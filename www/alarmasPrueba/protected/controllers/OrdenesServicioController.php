<?php

class OrdenesServicioController extends Controller
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
				'actions'=>array('admin','delete','view', 'create', 'index', 'update', 'findSistemaAlarmas','actionLoadDetalleByAjax',),
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
		$model=new OrdenesServicio;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['OrdenesServicio']))
		{
			$model->attributes=$_POST['OrdenesServicio'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->orden_servicio_id));
		}

		$this->render('create',array(
			'model'=>$model,
		));

		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['OrdenesServicio']))
		{
			$model->attributes=$_POST['OrdenesServicio'];
			if (isset($_POST['DetalleOrdenesServicio']))
            {
                $model->detalleOrdenesServicios = $_POST['DetalleOrdenesServicio'];
            }
           if ($model->saveWithRelated('detalleOrdenesServicios'))
                $this->redirect(array('detalleOrdenesServicios/admin'));
            else
                $model->addError('detalleOrdenesServicios', 'Error occured while saving detalleOrdenesServicios.');
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

		if(isset($_POST['OrdenesServicio']))
		{
			$model->attributes=$_POST['OrdenesServicio'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->orden_servicio_id));
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
		$dataProvider=new CActiveDataProvider('OrdenesServicio');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new OrdenesServicio('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['OrdenesServicio']))
			$model->attributes=$_GET['OrdenesServicio'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return OrdenesServicio the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=OrdenesServicio::model()->findByPk($id);
		if($model===null){
			if (isset($_GET['id'])){
				// NOTE 'with()'
				$this->model=OrdenesServicio::model()->with('usuariosUsuario')->findbyPk($_GET['id']); 
			}

			if($model===null){
				throw new CHttpException(404,'The requested page does not exist.');
			}
		}

		return $model;
	}

	public function actionFindSistemaAlarmas() {
		$q = $_GET['term'];
		if (isset($q)) {
			$criteria = new CDbCriteria;
			
			$criteria->condition = 'nombre_sistema_alarma like :q';
			$criteria->order = 'nombre_sistema_alarma asc'; // correct order-by field
			$criteria->limit = 10; // probably a good idea to limit the results
			// with trailing wildcard only; probably a good idea for large volumes of data
			$criteria->params = array(':q' => trim($q) . '%'); 
			$PostCodes = SistemaAlarmas::model()->findAll($criteria);

			if (!empty($PostCodes)) {
				$out = array();
				foreach ($PostCodes as $p) {
					$out[] = array(
						// expression to give the string for the autoComplete drop-down
						'label' => $p->nombre_sistema_alarma,  
						'value' => $p->nombre_sistema_alarma,
						'id' => $p->sistema_alarma_id, // return value from autocomplete
					);
				}
				echo CJSON::encode($out);
				Yii::app()->end();
			}
		}
	}

	/**
	 * Performs the AJAX validation.
	 * @param OrdenesServicio $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='ordenes-servicio-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

		public function actionLoadDetalleByAjax($index)
    {
        $model = new Clientes;
        $this->renderPartial('clientes/_form', array(
            'model' => $model,
            'index' => $index,
//            'display' => 'block',
        ), false, true);
    }

}
