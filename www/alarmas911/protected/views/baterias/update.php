<?php
/* @var $this BateriasController */
/* @var $model Baterias */

$this->breadcrumbs=array(
	$model->sistemaAlarmas->nombre_sistema_alarma=>array('sistemaAlarmas/view','id'=>$model->sistema_alarmas_sistema_alarma_id),
	'Baterias'=>array('admin'),
	$model->bateria_id=>array('view','id'=>$model->bateria_id),
	'Actualizar',
);

$this->menu=array(
	//array('label'=>'List Baterias', 'url'=>array('index')),
	array('label'=>'Crear Bateria', 'url'=>array('create')),
	array('label'=>'Ver Bateria', 'url'=>array('view', 'id'=>$model->bateria_id)),
	array('label'=>'Administrar Baterias', 'url'=>array('admin')),
);
?>

<h1>Actualizar Bateria: <?php echo $model->sistemaAlarmas->nombre_sistema_alarma.'/Batería ID '.$model->bateria_id;  ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>