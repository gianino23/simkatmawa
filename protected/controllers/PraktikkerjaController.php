<?php

class PraktikkerjaController extends Controller
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
				'actions'=>array('index','view','adminn','update','detail'),
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
		$temp = "upload/";
		
		if (!file_exists($temp))
			mkdir($temp);
		
		$model=new Praktikkerja;
		
		$model->nama_program = $_POST['modal_program'];
		$model->lokasi = $_POST['modal_lokasi'];
		$model->tanggal = $_POST['modal_waktu'];
		$model->jml_mhs_magang = $_POST['modal_mhs'];
		$model->periode = $_POST['modal_periode'];
		$model->save();
		
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
			  $valid_ext = array("png","jpeg","jpg","zip","pdf","docx");

			  // Check extension
			  if(in_array($ext, $valid_ext)){

				 // File path
				 $path = $temp.$NewImageName;

				 // Upload file
				 if(move_uploaded_file($_FILES['files']['tmp_name'][$index],$path)){
					$files_arr[] = $path;
				 }
				$model1 =new Filepraktikkerja ;
				$model1->praktikkerja_id=$model->id_praktikkerja;
				$model1->isi=$NewImageName;
				$model1->save();
			  }
		   }
		}
		
		
		
		//$fileupload      = $_FILES['modal_fileupload']['tmp_name'];
		//$ImageName       = $_FILES['modal_fileupload']['name'];
		//$ImageType       = $_FILES['modal_fileupload']['type'];
	
		if($model->save())
		 {
			//$acak           = rand(11111111, 99999999);
			//$ImageExt       = substr($ImageName, strrpos($ImageName, '.'));
			//$ImageExt       = str_replace('.','',$ImageExt); // Extension
			//$ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
			//$NewImageName   = str_replace(' ', '', $acak.'.'.$ImageExt);
		 
			//move_uploaded_file($_FILES["modal_fileupload"]["tmp_name"], $temp.$NewImageName); // Menyimpan file 
			
			
			
		  // fungsi untuk membuat format json
		  header('Content-Type: application/json');
		  // untuk load data yang sudah ada dari tabel
		  $content = file_get_contents(Yii::app()->createAbsoluteUrl('praktikkerja/adminn'), true);
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

		if(isset($_POST['Praktikkerja']))
		{
			$model->attributes=$_POST['Praktikkerja'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_praktikkerja));
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
		$id=$_POST['id_praktikkerja'];
		$model1=Filepraktikkerja::model()->findAllByAttributes(array('praktikkerja_id'=>$id));
		if(count($model1)==1){
			$model2=Filepraktikkerja::model()->findByAttributes(array('praktikkerja_id'=>$id));
			unlink(Yii::app()->basePath . '/../upload/'.$model2->isi);
		}else{
		foreach($model1 as $mdl){
		unlink(Yii::app()->basePath . '/../upload/'.$mdl->isi);
		}
		}
		$model=$this->loadModel($id)->delete();
		
		
		if($model)
		 {
		  // fungsi untuk membuat format json
		  header('Content-Type: application/json');
		  // untuk load data yang sudah ada dari tabel
		  $content = file_get_contents(Yii::app()->createAbsoluteUrl('praktikkerja/adminn'), true);
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
		$dataProvider=new CActiveDataProvider('Praktikkerja');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Praktikkerja('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Praktikkerja']))
			$model->attributes=$_GET['Praktikkerja'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Praktikkerja the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Praktikkerja::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Praktikkerja $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='praktikkerja-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
