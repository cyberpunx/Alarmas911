<?php
/* @var $this TiposPagoController */
/* @var $model TiposPago */

$this->breadcrumbs=array(
	'Tipos Pagos'=>array('index'),
	$model->tipo_pago_id,
);

$this->menu=array(
	array('label'=>'List TiposPago', 'url'=>array('index')),
	array('label'=>'Create TiposPago', 'url'=>array('create')),
	array('label'=>'Update TiposPago', 'url'=>array('update', 'id'=>$model->tipo_pago_id)),
	array('label'=>'Delete TiposPago', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->tipo_pago_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TiposPago', 'url'=>array('admin')),
);
?>

<h1>View TiposPago #<?php echo $model->tipo_pago_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'tipo_pago_id',
		'nombre_tipo_pago',
		'observaciones_tipo_pago',
	),
)); ?>
