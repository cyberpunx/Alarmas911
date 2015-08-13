<?php
/* @var $this OrdenesServicioController */
/* @var $model OrdenesServicio */

$this->breadcrumbs=array(
	'Ordenes Servicios'=>array('admin'),
	$model->orden_servicio_id,
);

$this->menu=array(
	//array('label'=>'List OrdenesServicio', 'url'=>array('index')),
	array('label'=>'Crear Ordenes de Servicio', 'url'=>array('create')),
	array('label'=>'Actualizar Ordenes de Servicio', 'url'=>array('update', 'id'=>$model->orden_servicio_id)),
	//array('label'=>'Delete OrdenesServicio', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->orden_servicio_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Ordenes de Servicio', 'url'=>array('admin')),
);
?>

<h1>Ver datos de Orden de Servicio #<?php echo $model->orden_servicio_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'orden_servicio_id',
		'fecha_emision',
		'fecha_cierre',
		'importe',
		'observaciones_orden_servicio',
		'vencimiento_orden',
		'prioridad',
		'sistema_alarmas_sistema_alarma_id',
	),
)); ?>
