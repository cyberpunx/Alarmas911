<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="sp" lang="sp">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="sp" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/form.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/buttons.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/icons.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/tables.css" />
    
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/mbmenu.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/mbmenu_iestyles.css" />
	

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>





	

<div class="container" id="page">
	<div id="topnav">
		<div class="topnav_text">
			<?php $this->widget('zii.widgets.CMenu',array(
				'items'=>array(
					//array('label'=>'About', 'url'=>array('/site/page'), 'view'=>'about', 'visible'=>Yii::app()->user->checkAccess('CLIENTE')),
					//array('label'=>'Contact', 'url'=>array('/site/contact')),
					//array('label'=>'detalleOrdenesServicio', 'url'=>array('/detalleOrdenesServicio/admin'),'visible'=>Yii::app()->user->checkAccess('ADMINISTRADOR')),
					//array('label'=>'--------------------------', 'visible'=>Yii::app()->user->checkAccess('ADMINISTRADOR')),
					//array('label'=>'paneles', 'url'=>array('/paneles/admin'),'visible'=>Yii::app()->user->checkAccess('ADMINISTRADOR')),
					//array('label'=>'sensores', 'url'=>array('/sensores/admin'),'visible'=>Yii::app()->user->checkAccess('ADMINISTRADOR')),
					//array('label'=>'accesorios', 'url'=>array('/accesorios/index'),'visible'=>Yii::app()->user->checkAccess('ADMINISTRADOR')),
					//array('label'=>'baterias', 'url'=>array('/baterias/index'),'visible'=>Yii::app()->user->checkAccess('ADMINISTRADOR')),
					//array('label'=>'zonas', 'url'=>array('/zonas/index'),'visible'=>Yii::app()->user->checkAccess('ADMINISTRADOR')),
					//array('label'=>'--------------------------', 'visible'=>Yii::app()->user->checkAccess('ADMINISTRADOR')),
					array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
					array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
					array('label'=>'gii', 'url'=>array('/gii'),'visible'=>Yii::app()->user->checkAccess('ADMINISTRADOR')),
				),
			)); ?>
		</div>
	</div>
	<div id="header">
		<div id="logo"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/logo.png"></img><?php //echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
    
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				//array('label'=>'Inicio', 'url'=>array('index'),'visible'=>Yii::app()->user->checkAccess('CLIENTE')),
				array('label'=>'Admin', 'url'=>array('/site/adminMain'),'visible'=>Yii::app()->user->checkAccess('ADMINISTRADOR')),
				array('label'=>'Componentes', 'url'=>array('/site/AdminTipos'),'visible'=>Yii::app()->user->checkAccess('ADMINISTRADOR')),
				//array('label'=>'Usuarios', 'url'=>array('/usuarios/index')),
				//array('label'=>'Página de ejemplo', 'url'=>array('/site/example')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Contacto', 'url'=>array('/site/contact')),
				//array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
				
			),
		)); ?>
	</div> <!--mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>



	<?php echo $content; ?>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> Alarmas 911<br/>
		All Rights Reserved.<br/>
		
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>