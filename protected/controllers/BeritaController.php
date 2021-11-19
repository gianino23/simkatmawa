<?php

class BeritaController extends Controller
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
			// 'postOnly + delete', // we only allow deletion via POST request
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
				'actions'=>array('index','view','adminn','post'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','admin','delete'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
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

	public function actionPost($id)
	{
		$this->layout='public';
		$this->render('post',array(
			'id'=>$id,
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Berita;

		if(Yii::app()->user->level == 1) $ormawa = 0;
		else $ormawa = Yii::app()->user->ormawa;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Berita']))
		{
			$model->attributes=$_POST['Berita'];

			$upload=CUploadedFile::getInstance($model,'cover');
			$filename=$upload;

			$model->author=$ormawa;
			$model->cover = $filename;
			if($model->save())
				$upload->saveAs(Yii::app()->basePath.'/../upload/berita/'.$filename);
				$this->redirect(array('view','id'=>$model->id_berita));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		if(Yii::app()->user->level == 1) $ormawa = 0;
		else $ormawa = Yii::app()->user->ormawa;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Berita']))
		{

			unlink(Yii::app()->basePath.'/../upload/berita/'.$model->cover);
			$model->attributes=$_POST['Berita'];

			$upload=CUploadedFile::getInstance($model,'cover');
			$filename=$upload;

			$model->author=$ormawa;
			$model->cover = $filename;
			if($model->save())
				$upload->saveAs(Yii::app()->basePath.'/../upload/berita/'.$filename);
				$this->redirect(array('view','id'=>$model->id_berita));
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
	public function actionDelete($id)
	{
		$model=$this->loadModel($id);

			unlink(Yii::app()->basePath.'/../upload/berita/'.$model->cover);
			$this->loadModel($id)->delete();
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl'])
                                 ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$this->layout = 'public';

		$criteria=new CDbCriteria();
		$criteria->condition = 'status = 1';
		$criteria->order = 'tgl_entry DESC';
    $count=Berita::model()->count($criteria);
    $pages=new CPagination($count);

    // results per page
    $pages->pageSize=9;
    $pages->applyLimit($criteria);
    $models=Berita::model()->findAll($criteria);

    $this->render('index', array(
    'models' => $models,
         'pages' => $pages
    ));
		// $dataProvider=new CActiveDataProvider('Berita');
		// $this->render('index',array(
		// 	'dataProvider'=>$dataProvider,
		// ));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Berita('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Berita']))
			$model->attributes=$_GET['Berita'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Berita the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Berita::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Berita $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='berita-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
