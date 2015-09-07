<?php
/* @var $this PanelesController */
/* @var $model Paneles */

$modelSistema = SistemaAlarmas::model()->findByPk($_GET['id']);

$this->breadcrumbs=array(
	$modelSistema->nombre_sistema_alarma=>array('sistemaAlarmas/view','id'=>$modelSistema->sistema_alarma_id),
	'Paneles'=>array('admin'),
	'Crear',
);

$this->menu=array(
	//array('label'=>'List Paneles', 'url'=>array('index')),
	array('label'=>'Administrar Paneles', 'url'=>array('admin')),
);
?>


<h1>Crear Panel para Sistema de Alarmas: <?php echo $modelSistema->nombre_sistema_alarma?></h1>

<?php $this->renderPartial('_formFromSistemas', array('model'=>$model)); ?>