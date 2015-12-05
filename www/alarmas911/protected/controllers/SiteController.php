<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		//if(Yii::app()->user->isGuest){
		//	
		//}

		// Esto se ejecuta 1 vez al dia, cada vez que entra al index
		$this->check_vencimiento_baterias();
		

		if(Yii::app()->user->checkAccess('ADMINISTRADOR')){
			$this->redirect('?r=site/adminMain'); // vista ADMIN
		}
		elseif(Yii::app()->user->checkAccess('CLIENTE')){
				$this->redirect('?r=site/clienteMain'); //vista CLIENTE
		}
		else{
			$this->redirect('?r=site/login');	// Si no hay sesión -> LOGIN
		}		
	}

	public function actionClienteMain()
	{
		$this->render('clienteMain');
	}

	public function actionExample()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('example');
	}

	public function actionAdminTipos()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('adminTipos');
	}

	public function actionAdminMain()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('adminMain');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}

	public function check_vencimiento_baterias(){

		// Armo un archivo donde guardo la fecha del ultimo checkeo realizado
		$webroot = Yii::getPathOfAlias('webroot');
		$file =  $webroot.'/protected/commands/vencimiento_baterias.dat';
		$todayDate = date("Y-m-d");
		
		if(filesize($file) <= 0){			
			$handle = fopen($file, 'a+');				
			fwrite($handle, $todayDate);
			fclose($handle);
		}



		// Query para checkear los vencimientos
		$sql_check = "SELECT * 
				FROM  `baterias` 
				WHERE (DATEDIFF(CURDATE(), `fecha_alta`)) >= (`vida_util` * 360)";

		
						
		$content = file_get_contents($file);
		if(strtotime($content) < strtotime($todayDate)){
			// Hoy no se hizo checkeo
			// Checkear
			$baterias_Lst = Yii::app()->db->createCommand($sql_check)->queryAll();
			foreach($baterias_Lst as $bateria){			
				// Query para obtener los mails de las baterias vencidas
				$sql_get_mail = "SELECT *
						FROM  `baterias` 
						left join sistema_alarmas sa on sa.sistema_alarma_id = `sistema_alarmas_sistema_alarma_id`
						left join usuarios u on sa.usuarios_usuario_id = u.usuario_id
						WHERE `bateria_id` = ".$bateria['bateria_id'];

				$sitema_info = Yii::app()->db->createCommand($sql_get_mail)->queryAll();
				
				//Envio los emails
				foreach($sitema_info as $info){
					
					// AL CLIENTE
					$text = "";
			   		$text.= "<h1>Alarmas 911</h1>";
			   		$text.= "Estimado cliente, se le informa que la batería instalada en su Sistema ha caducado.<br/>";
			   		$text.= "Contáctese con la empresa para reemplazarla.<br/>";
			   		$text.= "<br/><b>Nombre:</b> ".$info['nombre']." ".$info['apellido'];
			   		$text.= "<br/><b>Dirección:</b> ".$info['direccion'];
			   		$text.= "<br/><b>Fecha de instalación de la Batería:</b> ".$info['fecha_alta'];
			   		$text.= "<br/><b>Vida útil de la batería:</b> ".$info['vida_util']." años.";          		
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
					$mail->Subject = 'Alarmas 911 - Bateria vencida';
					$mail->AltBody = 'To view the message, please use an HTML compatible email viewer!';
					$mail->MsgHTML($text);
					$mail->AddAddress('alarmas911.test@gmail.com'); //$info['email']
					$mail->SMTPDebug  = 1;
					$mail->Send();
				}
				
			}

			//Escribo el archivo para dejar marcado que hoy se hizo el checkeo
			$handle = fopen($file, 'w+');				
			fwrite($handle, $todayDate);
			fclose($handle);
		}
	}
}