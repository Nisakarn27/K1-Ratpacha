<?php

class WebboardController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
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
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
						'actions'=>array('create'),
						'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('@'),
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
		$model = Webboard::model ()->findByPK ( $id );
	
		$comment=new Comment();
	
		$dataProvider=new CActiveDataProvider('Comment');
	
		if(isset($_POST['Comment']))
		{
			$comment->attributes=$_POST['Comment'];
		
			$comment->webboard_id=$model->id;
			$comment->create_time = date('Y-m-d H:i:s');
			$valid = $model->validate ();
			$valid = $comment->validate () && $valid;
			if($valid){
			if($comment->save(false))
				
				$this->redirect ( array (
						'index'
				) );
				
		}}
		$this->render('view',array(
				'model'=>$this->loadModel($id),
				'comment'=>$comment,
				'dataProvider'=>$dataProvider,
		));
	}
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	
	public function actionCreate()
	{
		$model=new Webboard;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Webboard']))
		{
			$model->attributes=$_POST['Webboard'];
			
			$model->post_date = date('Y.m.d H.i.s');
			$valid = $model->validate ();
				
			if ($image = CUploadedFile::getInstance ( $model, 'image' )) {
				// path for file upload
				$path = Yii::getPathOfAlias ( 'webroot' ) . '/webboard/';
				// use image name as username
				$filename = $model->post_date . '_img' . '.' . $image->getExtensionName ();
				// uploaded image to path
				$image->saveAs ( $path . $filename );
			} else
			// this for no image file upload
			$filename = 'noimage.jpg';
			// set another user attribute
			$model->image = $filename;
			$model->id = $model->id;
				
			if($valid){
				if($model->save(false)){
						
					$this->redirect ( array (
						'index' 
						) );
				}}
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
		$model= Webboard::model ()->findByPK ( $id );

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

	if(isset($_POST['Webboard']))
		{
			$model->attributes=$_POST['Webboard'];
			
			$model->post_date = date('Y.m.d H.i.s');
			$valid = $model->validate ();
				
			if ($image = CUploadedFile::getInstance ( $model, 'image' )) {
				// path for file upload
				$path = Yii::getPathOfAlias ( 'webroot' ) . '/webboard/';
				// use image name as username
				$filename = $model->post_date . '_img' . '.' . $image->getExtensionName ();
				// uploaded image to path
				$image->saveAs ( $path . $filename );
			} else
			// this for no image file upload
			//$filename = 'noimage.jpg';
			// set another user attribute
			//$model->image = $filename;
			$model->id = $model->id;
				
			if($valid){
				if($model->save(false)){
						
					$this->redirect ( array (
						'index' 
						) );
				}}
		}

		$this->render('create',array(
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
			$model = Webboard::model ()->findByPK ( $id );
		$model->delete ();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
			$model=new Webboard('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Webboard']))
			$model->attributes=$_GET['Webboard'];

		$this->render('index',array(
			'model'=>$model,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Webboard('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Webboard']))
			$model->attributes=$_GET['Webboard'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Webboard the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Webboard::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Webboard $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='webboard-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
