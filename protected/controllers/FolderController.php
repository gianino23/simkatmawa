<?php

class FolderController extends Controller
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
	public function actionAdminn()
	{
		$this->renderpartial('adminn');
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
		$model=new Folder;

		$model->nama_folder=$_POST['modal_namafolder'];
		$model->deskripsi=$_POST['modal_deskripsi'];
		if(Yii::app()->user->level == 1) $model->ormas_id = 0;
		if($model->save())
		 {
			 $temp = "upload/".$model->nama_folder."/";
				if (!file_exists($temp))
					mkdir($temp);
				
		  // fungsi untuk membuat format json
		  header('Content-Type: application/json');
		  // untuk load data yang sudah ada dari tabel
		  $content = file_get_contents(Yii::app()->createAbsoluteUrl('folder/adminn'), true);
		  $data = array('status'=>'success', 'data'=> $content);
		  echo json_encode($data);
		 }
		 else // jika insert data gagal
		 {
		  $data = array('status'=>'failed', 'data'=> null);
		  echo json_encode($data);
		 }
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionEdit()
	{
		
		$modal_idfolder=$_POST['modal_idfolder'];
		$model=Folder::model()->findByAttributes(array('id_folder'=>$modal_idfolder));
 $temp = "upload/".$model->nama_folder."/";
		if (is_dir($temp)) {
        $scn = scandir($temp);
        foreach ($scn as $files) {
            if ($files !== '.') {
                if ($files !== '..') {
                    if (!is_dir($temp . '/' . $files)) {
                        unlink($temp . '/' . $files);
                    } else {
                        emptyDir($temp . '/' . $files);
                        rmdir($temp . '/' . $files);
                    }
                }
            }
        }
    }
				if (file_exists($temp))
					rmdir($temp);
		$model->nama_folder=$_POST['modal_namafolder'];
		$model->deskripsi=$_POST['modal_deskripsi'];
		
		if($model->save())
		 {
			 $tempi = "upload/".$model->nama_folder."/";
				if (!file_exists($tempi))
					mkdir($tempi);
		  // fungsi untuk membuat format json
		  header('Content-Type: application/json');
		  // untuk load data yang sudah ada dari tabel
		  $content = file_get_contents(Yii::app()->createAbsoluteUrl('folder/adminn'), true);
		  $data = array('status'=>'success', 'data'=> $content);
		  echo json_encode($data);
		  
		 }
		 else // jika insert data gagal
		 {
		  $data = array('status'=>'failed', 'data'=> null);
		  echo json_encode($data);
		 }
		  
		 
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	
	public function actionHapus()
	{
		$id=$_POST['id_folder'];
		$model=Folder::model()->findByAttributes(array('id_folder'=>$id));
		 $temp = "upload/".$model->nama_folder."/";
		if (is_dir($temp)) {
        $scn = scandir($temp);
        foreach ($scn as $files) {
            if ($files !== '.') {
                if ($files !== '..') {
                    if (!is_dir($temp . '/' . $files)) {
                        unlink($temp . '/' . $files);
                    } else {
                        emptyDir($temp . '/' . $files);
                        rmdir($temp . '/' . $files);
                    }
                }
            }
        }
    }
				if (file_exists($temp))
					rmdir($temp);
		$model=$this->loadModel($id)->delete();
		if($model)
		 {
			 
		  // fungsi untuk membuat format json
		  header('Content-Type: application/json');
		  // untuk load data yang sudah ada dari tabel
		  $content = file_get_contents(Yii::app()->createAbsoluteUrl('folder/adminn'), true);
		  $data = array('status'=>'success', 'data'=> $content);
		  echo json_encode($data);
		 }
		 else // jika insert data gagal
		 {
		  $data = array('status'=>'failed', 'data'=> null);
		  echo json_encode($data);
		 }
		
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Folder');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$criteria=new CDbCriteria();
		$criteria->order = 'id_folder DESC';
    $count=Folder::model()->count($criteria);
    $pages=new CPagination($count);

    // results per page
    $pages->pageSize=8;
    $pages->applyLimit($criteria);
    $models=Folder::model()->findAll($criteria);

    $this->render('admin', array(
    'models' => $models,
         'pages' => $pages
    ));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Folder the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Folder::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Folder $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='folder-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
