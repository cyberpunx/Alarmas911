<?php
/* @var $this TiposServicioController */
/* @var $model TiposServicio */

$this->breadcrumbs=array(
	'Tipos Servicio'=>array('admin'),
	$model->tipo_servicio_id,
);

$this->menu=array(
	//array('label'=>'List TiposServicio', 'url'=>array('index')),
	array('label'=>'Crear Tipos Servicio', 'url'=>array('create')),
	array('label'=>'Actualizar Tipo Servicio', 'url'=>array('update', 'id'=>$model->tipo_servicio_id)),
	//array('label'=>'Delete TiposServicio', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->tipo_servicio_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Tipos Servicio', 'url'=>array('admin')),
);
?>

<h1>Ver  Tipo de Servicio #<?php echo $model->tipo_servicio_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'tipo_servicio_id',
		'nombre_tipo_servicio',
		'observaciones_tipo_servicio',
	),
)); ?>
