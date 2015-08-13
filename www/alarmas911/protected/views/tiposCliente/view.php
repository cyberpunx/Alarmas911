<?php
/* @var $this TiposClienteController */
/* @var $model TiposCliente */

$this->breadcrumbs=array(
	'Tipos Cliente'=>array('index'),
	$model->tipo_cliente_id,
);

$this->menu=array(
//	array('label'=>'List TiposCliente', 'url'=>array('index')),
	array('label'=>'Crear Tipos Cliente', 'url'=>array('create')),
	array('label'=>'Actualizar Tipo Cliente', 'url'=>array('update', 'id'=>$model->tipo_cliente_id)),
//	array('label'=>'Delete TiposCliente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->tipo_cliente_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Tipos Cliente', 'url'=>array('admin')),
);
?>

<h1>Ver Tipos de Cliente #<?php echo $model->tipo_cliente_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'tipo_cliente_id',
		'nombre_tipo_cliente',
		'observaciones_tipo_cliente',
	),
)); ?>
