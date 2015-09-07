<?php
/* @var $this BateriasController */
/* @var $model Baterias */

$modelSistema = SistemaAlarmas::model()->findByPk($_GET['id']);

$this->breadcrumbs=array(
	$modelSistema->nombre_sistema_alarma=>array('sistemaAlarmas/view','id'=>$modelSistema->sistema_alarma_id),
	'Baterias'=>array('admin'),
	'Crear',
);

$this->menu=array(
	//array('label'=>'List Baterias', 'url'=>array('index')),
	array('label'=>'Administrar Baterias', 'url'=>array('admin')),
);
?>

<h1>Crear Bateria para Sistema de Alarmas: <?php echo $modelSistema->nombre_sistema_alarma?></h1>

<?php $this->renderPartial('_formFromSistemas', array('model'=>$model)); ?>