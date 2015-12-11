<?php
/* @var $this TiposServicioController */
/* @var $model TiposServicio */

$this->breadcrumbs=array(
	'Tipos Servicio'=>array('admin'),
	$model->tipo_servicio_id,
);

$this->menu=array(
	//array('label'=>'List TiposServicio', 'url'=>array('index')),
	array('label'=>'Crear Tipos de Servicio', 'url'=>array('create')),
	array('label'=>'Actualizar Tipo de Servicio', 'url'=>array('update', 'id'=>$model->tipo_servicio_id)),
	array('label'=>'Borrar Tipo de Servicio', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->tipo_servicio_id),'confirm'=>'¿Está seguro que desea eliminar este item?')),
	array('label'=>'Administrar Tipos de Servicio', 'url'=>array('admin')),
);
?>

<h1>Ver Tipo de Servicio #<?php echo $model->tipo_servicio_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'tipo_servicio_id',
		'nombre_tipo_servicio',
		'observaciones_tipo_servicio',
	),
)); ?>
