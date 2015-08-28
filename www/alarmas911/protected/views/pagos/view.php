<?php
/* @var $this PagosController */
/* @var $model Pagos */

$this->breadcrumbs=array(
	'Pagoses'=>array('index'),
	$model->pago_id,
);

$this->menu=array(
	array('label'=>'List Pagos', 'url'=>array('index')),
	array('label'=>'Create Pagos', 'url'=>array('create')),
	array('label'=>'Update Pagos', 'url'=>array('update', 'id'=>$model->pago_id)),
	array('label'=>'Delete Pagos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pago_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pagos', 'url'=>array('admin')),
);
?>

<h1>View Pagos #<?php echo $model->pago_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pago_id',
		'usuarios_usuario_id',
		'importe',
		'ordenes_servicio_orden_servicio_id',
		'fecha',
		'tipos_pago_tipo_pago_id',
		'informacion_pago',
	),
)); ?>
