<?php
/* @var $this SensoresController */
/* @var $model Sensores */

$this->breadcrumbs=array(
	'Sensores'=>array('index'),
	$model->sensor_id=>array('view','id'=>$model->sensor_id),
	'Actualizar',
);

$this->menu=array(
	//array('label'=>'List Sensores', 'url'=>array('index')),
	array('label'=>'Crear Sensor', 'url'=>array('create')),
	array('label'=>'Ver Sensor', 'url'=>array('view', 'id'=>$model->sensor_id)),
	array('label'=>'Administrar Sensores', 'url'=>array('admin')),
);
?>

<h1>Actualizar Sensores <?php echo $model->sensor_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>