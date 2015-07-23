<?php

class SistemaAlarmasController extends Controller
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
				'roles'=>array('CLIENTE')
			),
			
			array('allow', // ADMISNITRADOR HACE TODO
				'actions'=>array('admin','delete','view', 'create', 'index', 'update', 'findUsuario'),
				'roles'=>array('ADMINISTRADOR')
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

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new SistemaAlarmas;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['SistemaAlarmas']))
		{
			$model->attributes=$_POST['SistemaAlarmas'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->sistema_alarma_id));
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

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['SistemaAlarmas']))
		{
			$model->attributes=$_POST['SistemaAlarmas'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->sistema_alarma_id));
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
		$dataProvider=new CActiveDataProvider('SistemaAlarmas');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new SistemaAlarmas('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['SistemaAlarmas']))
			$model->attributes=$_GET['SistemaAlarmas'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return SistemaAlarmas the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=SistemaAlarmas::model()->findByPk($id);
		if($model===null){
			if (isset($_GET['id'])){
               // NOTE 'with()'
               $this->model=SistemaAlarmas::model()->with('usuariosUsuario')->findbyPk($_GET['id']); 
			}

			if($model===null){
				throw new CHttpException(404,'The requested page does not exist.');
			}
		}
		
		
		return $model;
	}

	// data provider for EJuiAutoCompleteFkField for usuario_id field
	public function actionFindUsuario() {
		$q = $_GET['term'];
		if (isset($q)) {
			$criteria = new CDbCriteria;

			$criteria->condition = 'apellido like :q OR nombre like :q'; 
			$criteria->order = 'apellido asc'; 
			$criteria->limit = 10; 

			$criteria->params = array(':q' => trim($q) . '%'); 
			$usuarios = Usuarios::model()->findAll($criteria);

		   if (!empty($usuarios)) {
				$out = array();
				foreach ($usuarios as $p) {
					$out[] = array(
						// expression to give the string for the autoComplete drop-down
						'label' => $p->FullNameDniAddress,  
						'value' => $p->FullName,
						'id' => $p->usuario_id, // return value from autocomplete
					);
				}
				echo CJSON::encode($out);
				Yii::app()->end();
			}
		}
	}

	/**
	 * Performs the AJAX validation.
	 * @param SistemaAlarmas $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='sistema-alarmas-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
