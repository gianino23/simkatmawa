<?php

class UserController extends Controller
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
				'actions'=>array('index','view','adminn','update'),
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
		$model=new User;
		
		$model->username=$_POST['modal_username'];
		$model->password=$_POST['modal_password'];
		$model->nama=$_POST['modal_nama'];
		$model->level=$_POST['modal_level'];
		if($model->save())
		 {
		  // fungsi untuk membuat format json
		  header('Content-Type: application/json');
		  // untuk load data yang sudah ada dari tabel
		  $content = file_get_contents(Yii::app()->createAbsoluteUrl('user/adminn'), true);
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
		$modal_kduser=$_POST['modal_kduser'];
		$model=User::model()->findByAttributes(array('kd_user'=>$modal_kduser));
		$model->username=$_POST['modal_username'];
		$model->password=$_POST['modal_password'];
		$model->nama=$_POST['modal_nama'];
		$model->level=$_POST['modal_level'];
		
		if($model->save())
		 {
		  // fungsi untuk membuat format json
		  header('Content-Type: application/json');
		  // untuk load data yang sudah ada dari tabel
		  $content = file_get_contents(Yii::app()->createAbsoluteUrl('user/adminn'), true);
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
		$id=$_POST['kd_user'];
		$model=$this->loadModel($id)->delete();
		if($model)
		 {
		  // fungsi untuk membuat format json
		  header('Content-Type: application/json');
		  // untuk load data yang sudah ada dari tabel
		  $content = file_get_contents(Yii::app()->createAbsoluteUrl('user/adminn'), true);
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
		$dataProvider=new CActiveDataProvider('User');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new User('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['User']))
			$model->attributes=$_GET['User'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return User the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=User::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param User $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='user-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
