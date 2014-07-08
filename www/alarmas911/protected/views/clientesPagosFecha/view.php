<?php
/* @var $this ClientesPagosFechaController */
/* @var $model ClientesPagosFecha */

$this->breadcrumbs=array(
	'Clientes Pagos Fechas'=>array('index'),
	$model->cliente_pago_fecha_id,
);

$this->menu=array(
	array('label'=>'List ClientesPagosFecha', 'url'=>array('index')),
	array('label'=>'Create ClientesPagosFecha', 'url'=>array('create')),
	array('label'=>'Update ClientesPagosFecha', 'url'=>array('update', 'id'=>$model->cliente_pago_fecha_id)),
	array('label'=>'Delete ClientesPagosFecha', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cliente_pago_fecha_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ClientesPagosFecha', 'url'=>array('admin')),
);
?>

<h1>View ClientesPagosFecha #<?php echo $model->cliente_pago_fecha_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cliente_pago_fecha_id',
		'Pagos_pago_id',
		'Clientes_cliente_id',
		'fecha',
	),
)); ?>
