<?php
/* @var $this TiposClienteController */
/* @var $model TiposCliente */

$this->breadcrumbs=array(
	'Tipos Clientes'=>array('index'),
	$model->tipo_cliente_id,
);

$this->menu=array(
	array('label'=>'List TiposCliente', 'url'=>array('index')),
	array('label'=>'Create TiposCliente', 'url'=>array('create')),
	array('label'=>'Update TiposCliente', 'url'=>array('update', 'id'=>$model->tipo_cliente_id)),
	array('label'=>'Delete TiposCliente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->tipo_cliente_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TiposCliente', 'url'=>array('admin')),
);
?>

<h1>View TiposCliente #<?php echo $model->tipo_cliente_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'tipo_cliente_id',
		'nombre_tipo_cliente',
		'observaciones_tipo_cliente',
	),
)); ?>
