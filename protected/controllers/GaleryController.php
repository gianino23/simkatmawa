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
				'actions'=>array('index','view','adminn','update','emptydir','folder','compressImage'),
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
	public function actionFolder()
	{
		$this->layout = 'public';
		$criteria=new CDbCriteria();
		$criteria->order = 'id_folder DESC';
    $count=Folder::model()->count($criteria);
    $pages=new CPagination($count);

    // results per page
    $pages->pageSize=9;
    $pages->applyLimit($criteria);
    $models=Folder::model()->findAll($criteria);

    $this->render('folder', array(
    'models' => $models,
         'pages' => $pages
    ));
		// $this->render('folder');
	}

	public function actionView($id)
	{
		$this->layout = 'public';
		$this->render('view',array(
			'id'=>$id,
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
		$sources = 'images/thumbnail/';
		//$folder = $_POST['modal_namafolder'];
if(!empty($_FILES)){
 $f = $_POST['modal_namafolder'];
 $folders = Folder::model()->findByAttributes(array('nama_folder'=>$f));
 $model=new Galery;
 $model->judul=$_FILES['file']['name'];
 $model->folder=$folders->id_folder;
 $model->file=$_FILES['file']['name'];
 $model->tgl_entry=date('Y-m-d');
 $temp_file = $_FILES['file']['tmp_name'];
 $location = $folder_name.$f.'/'. $_FILES['file']['name'];
 $location1 = $sources.'/'. $_FILES['file']['name'];
 
 move_uploaded_file($temp_file, $location);
	$path_info = pathinfo($location);
	if(($path_info['extension']=="jpeg")||($path_info['extension']=="JPEG")||($path_info['extension']=="jpg")){
		
          $save = $location1; //This is the new file you saving
          $file = $location; //This is the original file

          list($width, $height) = getimagesize($file) ; 


          $tn = imagecreatetruecolor($width, $height) ; 
          $image = imagecreatefromjpeg($file) ; 
          imagecopyresampled($tn, $image, 0, 0, 0, 0, $width, $height, $width, $height) ; 

          imagejpeg($tn, $save, 100) ; 
		
          $save = $location1; //This is the new file you saving
          $file = $location; //This is the original file

          list($width, $height) = getimagesize($file) ; 
		  $rasio = $height / 480 ;
		  $compreheight = 480 ;
		  $comprewidth = $width / $rasio ;
          
		  $modwidth = 256; 

          $diff = $width / $modwidth;

          $modheight = 480; 
          $tn = imagecreatetruecolor($comprewidth, $compreheight) ; 
          $image = imagecreatefromjpeg($file) ; 
          imagecopyresampled($tn, $image, 0, 0, 0, 0, $comprewidth, $compreheight, $width, $height) ; 

          imagejpeg($tn, $save, 100) ;
	}elseif(($path_info['extension']=="png")||($path_info['extension']=="PNG")){
		
          $save = $location1; //This is the new file you saving
          $file = $location; //This is the original file

          list($width, $height) = getimagesize($file) ; 


          $tn = imagecreatetruecolor($width, $height) ; 
          $image = imagecreatefrompng($file) ; 
          imagecopyresampled($tn, $image, 0, 0, 0, 0, $width, $height, $width, $height) ; 

          imagepng($tn, $save) ; 
		
          $save = $location1; //This is the new file you saving
          $file = $location; //This is the original file

          list($width, $height) = getimagesize($file) ; 
		  $rasio = $height / 480 ;
		  $compreheight = 480 ;
		  $comprewidth = $width / $rasio ;
		  
          $modwidth = 256; 

          $diff = $width / $modwidth;

          $modheight = 480; 
          $tn = imagecreatetruecolor($comprewidth, $compreheight) ; 
          $image = imagecreatefrompng($file) ; 
          imagecopyresampled($tn, $image, 0, 0, 0, 0, $comprewidth, $compreheight, $width, $height) ; 

          imagepng($tn, $save) ;
	}
//copy($location,$location1);

        
 $model->save();
 $this->refresh();
 
}

if(isset($_POST["name"])){
 $model=Galery::model()->FindByAttributes(array('judul'=>$_POST["name"]));
 $folders = Folder::model()->findByAttributes(array('id_folder'=>$model->folder));
 $filename = $folder_name.$folders->nama_folder.'/'.$_POST["name"];
 $filename1 = $sources.$_POST["name"];
 $id=$model->id_galery;
 $model=$this->loadModel($id)->delete();
 unlink($filename);
 unlink($filename1);
$this->refresh();
}


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
