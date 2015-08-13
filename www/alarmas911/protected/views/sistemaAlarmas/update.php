<?php
/* @var $this SistemaAlarmasController */
/* @var $model SistemaAlarmas */

$this->breadcrumbs=array(
	'Sistema Alarmas'=>array('admin'),
	$model->sistema_alarma_id=>array('view','id'=>$model->sistema_alarma_id),
	'Actualizar',
);

$this->menu=array(
	//array('label'=>'List SistemaAlarmas', 'url'=>array('index')),
	array('label'=>'Crear Sistema de Alarmas', 'url'=>array('create')),
	array('label'=>'Ver Sistema de Alarma', 'url'=>array('view', 'id'=>$model->sistema_alarma_id)),
	array('label'=>'Administrar Sistema de Alarmas', 'url'=>array('admin')),
);
?>

<h1>Actualizar datos del sistema de alarma #<?php echo $model->sistema_alarma_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>