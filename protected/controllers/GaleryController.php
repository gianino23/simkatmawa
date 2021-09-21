<?php

class GaleryController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/tema';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			//'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','adminn','update','emptydir'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('tambah','edit'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','hapus'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}
	public function actionAdminn($id)
	{
		$this->render('adminn',array(
		'id'=>$id,
		));
	}
	public function actionUpdate()
	{
		$this->renderpartial('update');
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionTambah()
	{
		$folder_name = 'upload/';
		//$folder = $_POST['modal_namafolder'];
if(!empty($_FILES)){
 $f = $_POST['modal_namafolder'];
 $folders = Folder::model()->findByAttributes(array('nama_folder'=>$f));
 $model=new Galery;
 $model->judul=$_FILES['file']['name'];
 $model->deskripsi="";
 $model->folder=$folders->id_folder;
 $model->file=$_FILES['file']['name'];
 $model->tgl_entry=date('Y-m-d');
 $temp_file = $_FILES['file']['tmp_name'];
 $location = $folder_name.$f.'/'. $_FILES['file']['name'];
 move_uploaded_file($temp_file, $location);
 $model->save();
}

if(isset($_POST["name"])){
 $model=Galery::model()->FindByAttributes(array('judul'=>$_POST["name"]));
 $folders = Folder::model()->findByAttributes(array('id_folder'=>$model->folder));
 $filename = $folder_name.$folders->nama_folder.'/'.$_POST["name"];
 $id=$model->id_galery;
 $model=$this->loadModel($id)->delete();
 unlink($filename);

}

$result = array();
$files = scandir('upload');
$output = '<div class="row">';

if(false !== $files){
 foreach($files as $file){
  if('.' !=  $file && '..' != $file){
	  $fd=Folder::model()->findByAttributes(array('nama_folder'=>$file));
   $output .= '
   <div class="col-md-2">
    <a href="?r=galery/adminn&id='.$fd->id_folder.'"><img src="images/folder.png" class="img-thumbnail" width="175" height="175" style="height:175px;" /></a>
    <a href="?r=galery/adminn&id='.$fd->id_folder.'">'.$file.'</a>
   </div>
   ';
  }
 }
}
$output .= '</div>';
echo $output;
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionEdit()
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Galery']))
		{
			$model->attributes=$_POST['Galery'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_galery));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionHapus()
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Galery');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Galery('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Galery']))
			$model->attributes=$_GET['Galery'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Galery the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Galery::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Galery $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='galery-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
