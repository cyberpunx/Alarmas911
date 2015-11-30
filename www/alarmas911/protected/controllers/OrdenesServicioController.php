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
				'actions'=>array('admin','delete','view', 'create', 'index', 'update', 'findSistemaAlarmas', 'findUsuario','loadDetalleByAjax','GenerarCobroMensual', 'rollbackCobroMensual', 'vistaImpresion'),
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

//		if(isset($_POST['OrdenesServicio']))
//		{
//			$model->attributes=$_POST['OrdenesServicio'];
//			if($model->save())
//				$this->redirect(array('view','id'=>$model->orden_servicio_id));
//		}
//
//		$this->render('create',array(
//			'model'=>$model,
//		));

		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['OrdenesServicio']))
		{
			$model->attributes=$_POST['OrdenesServicio'];
			if (isset($_POST['DetalleOrdenesServicio']))
            {
                $model->detalleOrdenesServicios = $_POST['DetalleOrdenesServicio'];
            }
           if ($model->saveWithRelated('detalleOrdenesServicios')){

           		$text = "";
           		$text.= "<h1>Alarmas 911</h1>";
           		$text.= "Estimado cliente, se le informa que se ha generado la siguiente Orden de Servicio.<br/>";
           		$text.= "<br/><b>Nombre:</b> ".$model->sistemaAlarmas->usuarios->FullName;
           		$text.= "<br/><b>Dirección:</b> ".$model->usuarios->direccion;
           		$text.= "<br/><b>Barrio:</b> ".$model->sistemaAlarmas->barrios->nombre_barrio;
           		$text.= "<br/><b>Fecha de alta:</b> ".$model->fecha_emision;
           		$text.= "<br/><b>Fecha de vencimiento:</b> ".$model->vencimiento_orden;
           		$text.= "<br/><b>Importe:</b> $".$model->importe;
           		$text.= "<br/><b>Detalle:</b>";
           			foreach($model->detalleOrdenesServicios as $detalle){
           				$text.= "<br/>&nbsp;&nbsp;&nbsp;&nbsp;[".$detalle->tiposServicioTipoServicio->nombre_tipo_servicio."] ".$detalle->descripcion_detalle_orden_servicio;		
           			}           		
           		$text.= "<br/><b>Notas:</b> ".$model->observaciones_orden_servicio;
           		$text.= "<br/><br/>No responda a este mensaje ya que ha sido generado automáticamente para su información.";
                
                // Envio el email de la orden de servicio creada
				Yii::import('application.extensions.phpmailer.JPhpMailer');
				$mail = new JPhpMailer;
				$mail->SMTPKeepAlive = true;  
      			$mail->Mailer = "smtp"; 
				$mail->IsSMTP();
				$mail->SMTPSecure = "ssl";
				$mail->Host = 'smtp.gmail.com';
				$mail->Port = '465';
				//$mail->Host = 'smtp.googlemail.com:465';
				$mail->SMTPAuth = true;
				$mail->Username = 'alarmas911.test@gmail.com';
				$mail->Password = 'alarmastest';
				$mail->SetFrom('alarmas911.test@gmail.com', 'Alarmas 911 test');
				$mail->Subject = 'Alarmas 911 - Orden de Servicio creada';
				$mail->AltBody = 'To view the message, please use an HTML compatible email viewer!';
				$mail->MsgHTML($text);
				$mail->AddAddress('alarmas911.test@gmail.com');
				$mail->SMTPDebug  = 1;
				$mail->Send();

                $this->redirect(array('OrdenesServicio/admin'));                
            }
            else
                $model->addError('detalleOrdenesServicios', 'Error occured while saving detalleOrdenesServicios.');
		}

		$model->fecha_emision = date('Y-m-d');
		
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
		$model = $this->loadModel($id);
 
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);
 
        if (isset($_POST['OrdenesServicio']))
        {
            $model->attributes = $_POST['OrdenesServicio'];
            if (isset($_POST['DetalleOrdenesServicio']))
            {
                $model->detalleOrdenesServicios = $_POST['DetalleOrdenesServicio'];
            }
            if ($model->saveWithRelated('detalleOrdenesServicios'))
                $this->redirect(array('OrdenesServicio/admin'));
            else
                $model->addError('detalleOrdenesServicios', 'Error occured while saving detalleOrdenesServicios.');
        }
 
        $this->render('update', array(
            'model' => $model,
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
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
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

	public function actionFindUsuario() {
		$q = $_GET['term'];
		if (isset($q)) {
			$criteria = new CDbCriteria;
			$criteria->select = 't.*';
			$criteria->join = 'LEFT JOIN tipos_cliente ON tipos_cliente.tipo_cliente_id = t.tipos_cliente_tipo_cliente_id ';
			
			//$criteria->condition = 't.apellido like :q OR t.nombre like :q'; 
			$criteria->condition = '(t.apellido like :q OR t.nombre like :q )AND nombre_tipo_cliente like \'empleado\''; 
			//$criteria->condition = 'nombre_tipo_cliente like \'empleado\''; // HARDCODE!!! FIXME
			$criteria->order = 't.apellido asc'; 
			$criteria->limit = 10; 

			$criteria->params = array(':q' => trim($q) . '%'); 
			$usuarios = Usuarios::model()->findAll($criteria);

		   if (!empty($usuarios)) {
				$out = array();
				foreach ($usuarios as $p) {
					$out[] = array(
						// expression to give the string for the autoComplete drop-down
						'label' => $p->FullName,  
						'value' => $p->FullName,
						'id' => $p->usuario_id, // return value from autocomplete
					);
				}
				echo CJSON::encode($out);
				Yii::app()->end();
			}
		}
	}

	public function actionGenerarCobroMensual()
	{

		$dataProvider=new CActiveDataProvider('OrdenesServicio');
		$this->render('cobroMensual',array(
			'dataProvider'=>$dataProvider,
		));
	}

	public function actionRollbackCobroMensual()
	{

		$dataProvider=new CActiveDataProvider('OrdenesServicio');
		$this->render('rollbackCobroMensual',array(
			'dataProvider'=>$dataProvider,
		));
	}

	public function actionVistaImpresion($string = '')
	{
		$criteria=new CDbCriteria;


		$criteria->with = array('sistemaAlarmas', 'sistemaAlarmas.barrios');
		
		//$criteria->compare('fecha_cierre', '');

		if( strlen( $string ) > 0 ){
			$criteria->addSearchCondition( 'nombre_barrio', $string, true, 'OR', 'LIKE' );
		}
    	   
		$criteria->addCondition('fecha_cierre IS NULL OR fecha_cierre = 0000-00-00');
		$dataProvider=new CActiveDataProvider('OrdenesServicio', array('criteria'=>$criteria, 'sort'=>array('defaultOrder'=>'nombre_barrio ASC, prioridad DESC, fecha_emision ASC' )));

		$this->render('vistaImpresion',array(
			'dataProvider'=>$dataProvider,
		));
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

	public function actionLoadDetalleByAjax($index){
	$model = new DetalleOrdenesServicio;
	$this->renderPartial('detalleOrdenesServicio/_form', array(
		'model' => $model,
		'index' => $index,
		//'display' => 'block',
		), false, true);
	}

}
