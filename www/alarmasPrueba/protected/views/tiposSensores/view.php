<?php
/* @var $this TiposSensoresController */
/* @var $model TiposSensores */

$this->breadcrumbs=array(
	'Tipos Sensores'=>array('index'),
	$model->tipo_sensor_id,
);

$this->menu=array(
	array('label'=>'List TiposSensores', 'url'=>array('index')),
	array('label'=>'Create TiposSensores', 'url'=>array('create')),
	array('label'=>'Update TiposSensores', 'url'=>array('update', 'id'=>$model->tipo_sensor_id)),
	array('label'=>'Delete TiposSensores', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->tipo_sensor_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TiposSensores', 'url'=>array('admin')),
);
?>

<h1>View TiposSensores #<?php echo $model->tipo_sensor_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'tipo_sensor_id',
		'nombre_sensor',
		'observaciones_sensor',
	),
)); ?>
