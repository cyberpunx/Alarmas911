<?php
/* @var $this AccesoriosController */
/* @var $model Accesorios */

$modelSistema = SistemaAlarmas::model()->findByPk($_GET['id']);

$this->breadcrumbs=array(
	$modelSistema->nombre_sistema_alarma=>array('sistemaAlarmas/view','id'=>$modelSistema->sistema_alarma_id),
	'Accesorios'=>array('admin'),
	'Crear',
);

$this->menu=array(
	//array('label'=>'List Accesorios', 'url'=>array('index')),
	array('label'=>'Administrar Accesorios', 'url'=>array('admin')),
);
?>

<h1>Crear Accesorio para Sistema de Alarmas: <?php echo $modelSistema->nombre_sistema_alarma?></h1>

<?php $this->renderPartial('_formFromSistemas', array('model'=>$model)); ?>