<?php

class JenisController extends Controller
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
		/*
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','adminn','update','detail','tentang','strukturorganisasi'),
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
		*/
			array('deny',
				'actions'=>array('index','view','adminn','update','detail','tentang','strukturorganisasi','admin','hapus','tambah','edit'),			// deny all users
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

	public function actionTentang()
	{
		$this->layout='public';
		$this->render('tentang');
	}

	public function actionStrukturOrganisasi()
	{
		$this->layout='public';
		$this->render('struktur');
	}
	
	public function actionUpdate()
	{
		$this->renderpartial('update');
	}
	public function actionDetail($id)
	{
		$this->render('detail',array(
			'id'=>$id,
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionTambah()
	{
		$model=new Jenis;

		$model->nama = $_POST['modal_nama'];
		$model->tabel = $_POST['modal_tabel'];
		$model->save();
		
	
		if($model->save())
		 {
			
		  // fungsi untuk membuat format json
		  header('Content-Type: application/json');
		  // untuk load data yang sudah ada dari tabel
		  $content = file_get_contents(Yii::app()->createAbsoluteUrl('jenis/adminn'), true);
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
		$modal_idjenis=$_POST['modal_idjenis'];
		$model=Jenis::model()->findByAttributes(array('id_jenis'=>$modal_idjenis));
		$model->nama = $_POST['modal_nama'];
		$model->tabel = $_POST['modal_tabel'];
		
		if($model->save())
		 {
		  // fungsi untuk membuat format json
		  header('Content-Type: application/json');
		  // untuk load data yang sudah ada dari tabel
		  $content = file_get_contents(Yii::app()->createAbsoluteUrl('jenis/adminn'), true);
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
		$id=$_POST['id_jenis'];
		$model=$this->loadModel($id)->delete();
		
		
		if($model)
		 {
		  // fungsi untuk membuat format json
		  header('Content-Type: application/json');
		  // untuk load data yang sudah ada dari tabel
		  $content = file_get_contents(Yii::app()->createAbsoluteUrl('jenis/adminn'), true);
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
		$dataProvider=new CActiveDataProvider('Jenis');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Jenis('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Jenis']))
			$model->attributes=$_GET['Jenis'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Jenis the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Jenis::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Jenis $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='jenis-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
