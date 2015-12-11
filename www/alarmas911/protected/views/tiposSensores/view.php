<?php
/* @var $this TiposSensoresController */
/* @var $model TiposSensores */

$this->breadcrumbs=array(
	'Tipos Sensores'=>array('index'),
	$model->tipo_sensor_id,
);

$this->menu=array(
	//array('label'=>'List TiposSensores', 'url'=>array('index')),
	array('label'=>'Crear Tipos Sensores', 'url'=>array('create')),
	array('label'=>'Actualizar Tipo Sensor', 'url'=>array('update', 'id'=>$model->tipo_sensor_id)),
	array('label'=>'Borrar Tipo de Sensor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->tipo_sensor_id),'confirm'=>'¿Está seguro que desea eliminar este item?')),
	array('label'=>'Administrar Tipos Sensores', 'url'=>array('admin')),
);
?>

<h1>Ver Tipo de Sensor #<?php echo $model->tipo_sensor_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'tipo_sensor_id',
		'nombre_sensor',
		'observaciones_sensor',
	),
)); ?>
