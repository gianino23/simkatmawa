<?php

class RegulasimhsController extends Controller
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
				'actions'=>array('index','view','adminn','update','detail','post'),
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
	// public function actionPost($id)
	// {
	// 	$this->layout = 'public';
	// 	$this->render('post',array(
	// 		'model'=>$this->loadModel($id),
	// 	));
	// }
	public function actionAdminn()
	{
		$this->renderpartial('adminn');
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
	public function actionPost($id)
	{
		$this->layout = 'public';
		$this->render('post',array(
			'id'=>$id,
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionTambah()
	{
		$temp = "upload/";
		
		if (!file_exists($temp))
			mkdir($temp);
		
		
		$countfiles = count($_FILES['files']['name']);
		$files_arr = array();
		// Loop all files
		for($index = 0;$index < $countfiles;$index++){

		   if(isset($_FILES['files']['name'][$index]) && $_FILES['files']['name'][$index] != ''){
			  // File name
			  $filename = $_FILES['files']['name'][$index];
			  $ImageType       = $_FILES['files']['type'][$index];
			  
				$acak           = rand(11111111, 99999999);
				$ImageExt       = substr($filename, strrpos($filename, '.'));
				$ImageExt       = str_replace('.','',$ImageExt); // Extension
				$ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $filename);
				$NewImageName   = str_replace(' ', '', $acak.'.'.$ImageExt);

			  // Get extension
			  $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

			  // Valid image extension
			  $valid_ext = array("pdf");

			  // Check extension
			    if(in_array($ext,$valid_ext)=== false){
					$this->redirect(array('admin'));
				}elseif(in_array($ext, $valid_ext)){

				 // File path
				 $path = $temp.$NewImageName;

				 // Upload file
				 if(move_uploaded_file($_FILES['files']['tmp_name'][$index],$path)){
					$files_arr[] = $path;
				 }
				$model1 =new Regulasimhs ;
				$model1->jenis_id=$_POST['modal_nama'];
				$model1->isi=$NewImageName;
				$model1->status=1;
				$model1->periode=$_POST['modal_periode'];
				$model1->tgl_entry=date('Y-m-d');
				$model1->save();
			  }
		   }
		}
		
	
		if($model1->save())
		 {
			
		  // fungsi untuk membuat format json
		  header('Content-Type: application/json');
		  // untuk load data yang sudah ada dari tabel
		  $content = file_get_contents(Yii::app()->createAbsoluteUrl('regulasimhs/adminn'), true);
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
	public function actionEdit($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Regulasimhs']))
		{
			$model->attributes=$_POST['Regulasimhs'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_regulasimhs));
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
		$id=$_POST['id_regulasimhs'];
		$model=Regulasimhs::model()->findByAttributes(array('id_regulasimhs'=>$id));
		unlink(Yii::app()->basePath . '/../upload/'.$model->isi);
		$model=$this->loadModel($id)->delete();
		
		
		if($model)
		 {
		  // fungsi untuk membuat format json
		  header('Content-Type: application/json');
		  // untuk load data yang sudah ada dari tabel
		  $content = file_get_contents(Yii::app()->createAbsoluteUrl('regulasimhs/adminn'), true);
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
		$dataProvider=new CActiveDataProvider('Regulasimhs');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Regulasimhs('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Regulasimhs']))
			$model->attributes=$_GET['Regulasimhs'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Regulasimhs the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Regulasimhs::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Regulasimhs $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='regulasimhs-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
