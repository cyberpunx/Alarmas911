<?php
/* @var $this DetalleOrdenesServicioController */
/* @var $model DetalleOrdenesServicio */

$this->breadcrumbs=array(
	'Detalle Ordenes Servicios'=>array('index'),
	$model->detalle_orden_servicio_id,
);

$this->menu=array(
	array('label'=>'List DetalleOrdenesServicio', 'url'=>array('index')),
	array('label'=>'Create DetalleOrdenesServicio', 'url'=>array('create')),
	array('label'=>'Update DetalleOrdenesServicio', 'url'=>array('update', 'id'=>$model->detalle_orden_servicio_id)),
	array('label'=>'Delete DetalleOrdenesServicio', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->detalle_orden_servicio_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DetalleOrdenesServicio', 'url'=>array('admin')),
);
?>

<h1>View DetalleOrdenesServicio #<?php echo $model->detalle_orden_servicio_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'detalle_orden_servicio_id',
		'Ordenes_Servicio_orden_servicio_id',
		'Tipos_Servicio_tipo_servicio_id',
		'Descripcion_detalle_orden_servicio',
	),
)); ?>
