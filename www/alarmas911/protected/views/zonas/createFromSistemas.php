<?php
/* @var $this ZonasController */
/* @var $model Zonas */

$modelSistema = SistemaAlarmas::model()->findByPk($_GET['id']);

$this->breadcrumbs=array(
	$modelSistema->nombre_sistema_alarma=>array('sistemaAlarmas/view','id'=>$modelSistema->sistema_alarma_id),
	'Zonas'=>array('admin'),
	'Crear',
);

$this->menu=array(
	//array('label'=>'List Zonas', 'url'=>array('index')),
	array('label'=>'Administrar Zonas', 'url'=>array('admin')),
);
?>

<h1>Crear Zona para Sistema de Alarmas: <?php echo $modelSistema->nombre_sistema_alarma?></h1>

<?php $this->renderPartial('_formFromSistemas', array('model'=>$model)); ?>