<?php
/* @var $this SensoresController */
/* @var $model Sensores */

$this->breadcrumbs=array(
	$model->zonas->sistemaAlarmas->nombre_sistema_alarma=>array('sistemaAlarmas/view','id'=>$model->zonas->sistemaAlarmas->sistema_alarma_id),
	$model->zonas->nombre_zona=>array('zonas/view','id'=>$model->zonas->zona_id),
	'Sensores'=>array('admin'),
	$model->tiposSensores->nombre_sensor=>array('view','id'=>$model->sensor_id),
	'Actualizar',
);

$this->menu=array(
	//array('label'=>'List Sensores', 'url'=>array('index')),
	//array('label'=>'Crear Sensor', 'url'=>array('create')),
	array('label'=>'Ver Sensor', 'url'=>array('view', 'id'=>$model->sensor_id)),
	array('label'=>'Administrar Sensores', 'url'=>array('admin')),
);
?>

<h1>Actualizar Sensor <?php echo $model->zonas->sistemaAlarmas->nombre_sistema_alarma.'/'.$model->zonas->nombre_zona.'/'.$model->tiposSensores->nombre_sensor.' ID #'.$model->sensor_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>