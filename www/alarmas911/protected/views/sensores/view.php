<?php
/* @var $this SensoresController */
/* @var $model Sensores */

$this->breadcrumbs=array(
	'Sensores'=>array('index'),
	$model->sensor_id,
);

$this->menu=array(
	array('label'=>'List Sensores', 'url'=>array('index')),
	array('label'=>'Create Sensores', 'url'=>array('create')),
	array('label'=>'Update Sensores', 'url'=>array('update', 'id'=>$model->sensor_id)),
	array('label'=>'Delete Sensores', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->sensor_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Sensores', 'url'=>array('admin')),
);
?>

<h1>View Sensores #<?php echo $model->sensor_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'sensor_id',
		'baterias_bateria_id',
		'tipos_sensores_tipo_sensor_id',
		'modelos_modelo_id',
		'zonas_zona_id',
	),
)); ?>
