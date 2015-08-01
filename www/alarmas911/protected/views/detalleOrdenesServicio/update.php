<?php
/* @var $this DetalleOrdenesServicioController */
/* @var $model DetalleOrdenesServicio */

$this->breadcrumbs=array(
	'Detalle Ordenes Servicios'=>array('index'),
	$model->detalle_orden_servicio_id=>array('view','id'=>$model->detalle_orden_servicio_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DetalleOrdenesServicio', 'url'=>array('index')),
	array('label'=>'Create DetalleOrdenesServicio', 'url'=>array('create')),
	array('label'=>'View DetalleOrdenesServicio', 'url'=>array('view', 'id'=>$model->detalle_orden_servicio_id)),
	array('label'=>'Manage DetalleOrdenesServicio', 'url'=>array('admin')),
);
?>

<h1>Update DetalleOrdenesServicio <?php echo $model->detalle_orden_servicio_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>