<?php

class ProfilController extends Controller
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
				'actions'=>array('index','view','adminn','update','detail','tentang','strukturorganisasi','upload'),
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
	public function actionUpload()
	{
	if ($_FILES['file']['name']) {
  if (!$_FILES['file']['error']) {
    $name = md5(rand(100, 200));
    $ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
    $filename = $name.
    '.'.$ext;
    $destination = '/uploads/'.$filename; //change this directory
    $location = $_FILES["file"]["tmp_name"];
    move_uploaded_file($location, $destination);
    echo '/uploads/'.$filename; //change this URL
  } else {
    echo $message = 'Ooops!  Your upload triggered the following error:  '.$_FILES['file']['error'];
  }
}
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
		$temp = "upload/profil";
		
		if (!file_exists($temp))
			mkdir($temp);
		
		$model=new Profil;

		$model->jenis_id = $_POST['modal_nama'];
		$submitted_text=$_POST['modal_isi'];
		if (strpos($submitted_text, '<img') !== false && strpos($submitted_text, ';base64') !== false) {

    $doc = new DOMDocument();
    $doc->loadHTML($submitted_text);

    $tags = $doc->getElementsByTagName('img');

    foreach ($tags as $tag) {
        // Get base64 encoded string
        $srcStr = $tag->getAttribute('src');
        $base64EncData = substr($srcStr, ($pos = strpos($srcStr, 'base64,')) !== false ? $pos + 7 : 0);
        $base64EncData = substr($base64EncData, 0, -1);

        // Get an image file
        $img = base64_decode($base64EncData);

        // Get file type
        $dataInfo = explode(";", $srcStr)[0];
        $fileExt = str_replace('data:image/', '', $dataInfo);

        // Create a new filename for the image
        $newImageName = str_replace(".", "", uniqid("forum_img_", true));
        $filename = $newImageName . '.' . $fileExt;
        $file = 'upload/profil/' . $filename;

        // Save the image to disk
        $success = file_put_contents($file, $img);
        $imgUrl = 'upload/profil/' . $filename;

        // Update the forum thread text with an img tag for the new image
        $newImgTag = '<img src="' . $imgUrl . '" />';

        $tag->setAttribute('src', $imgUrl);
        $tag->setAttribute('data-original-filename', $tag->getAttribute('data-filename'));
        $tag->removeAttribute('data-filename');
        $submitted_text = $doc->saveHTML();
		
    }
}
		$model->isi = $submitted_text;
		$model->periode=$_POST['modal_periode'];
		$model->save();
		
	
		if($model->save())
		 {
			
		  // fungsi untuk membuat format json
		  header('Content-Type: application/json');
		  // untuk load data yang sudah ada dari tabel
		  $content = file_get_contents(Yii::app()->createAbsoluteUrl('profil/adminn'), true);
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
		$temp = "upload/profil";
		
		if (!file_exists($temp))
			mkdir($temp);
		
		$modal_idprofil=$_POST['modal_idprofil'];
		$model=Profil::model()->findByAttributes(array('id_profil'=>$modal_idprofil));
		$submitted_text=$_POST['modal_isi'];
		if (strpos($submitted_text, '<img') !== false && strpos($submitted_text, ';base64') !== false) {

    $doc = new DOMDocument();
    $doc->loadHTML($submitted_text);

    $tags = $doc->getElementsByTagName('img');

    foreach ($tags as $tag) {
        // Get base64 encoded string
        $srcStr = $tag->getAttribute('src');
        $base64EncData = substr($srcStr, ($pos = strpos($srcStr, 'base64,')) !== false ? $pos + 7 : 0);
        $base64EncData = substr($base64EncData, 0, -1);

        // Get an image file
        $img = base64_decode($base64EncData);

        // Get file type
        $dataInfo = explode(";", $srcStr)[0];
        $fileExt = str_replace('data:image/', '', $dataInfo);

        // Create a new filename for the image
        $newImageName = str_replace(".", "", uniqid("", true));
        $filename = $newImageName . '.' . $fileExt;
        $file = 'upload/profil/'.$filename;

        // Save the image to disk
        $success = file_put_contents($file, $img);
        $imgUrl = 'upload/profil/' . $filename;

        // Update the forum thread text with an img tag for the new image
        $newImgTag = '<img src="' . $imgUrl . '" />';

        $tag->setAttribute('src', $imgUrl);
        $tag->setAttribute('data-original-filename', $tag->getAttribute('data-filename'));
        $tag->removeAttribute('data-filename');
        $submitted_text = $doc->saveHTML();
		
    }
}
		$model->isi = $submitted_text;
		$model->periode=$_POST['modal_periode'];
		
		if($model->save())
		 {
		  // fungsi untuk membuat format json
		  header('Content-Type: application/json');
		  // untuk load data yang sudah ada dari tabel
		  $content = file_get_contents(Yii::app()->createAbsoluteUrl('profil/adminn'), true);
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
		$id=$_POST['id_profil'];
		$model=$this->loadModel($id)->delete();
		
		
		if($model)
		 {
		  // fungsi untuk membuat format json
		  header('Content-Type: application/json');
		  // untuk load data yang sudah ada dari tabel
		  $content = file_get_contents(Yii::app()->createAbsoluteUrl('profil/adminn'), true);
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
		$dataProvider=new CActiveDataProvider('Profil');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Profil('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Profil']))
			$model->attributes=$_GET['Profil'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Profil the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Profil::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Profil $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='profil-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
