<?php
/* @var $this ClientesController */
/* @var $model Clientes */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->cliente_id,
);

$this->menu=array(
	array('label'=>'List Clientes', 'url'=>array('index')),
	array('label'=>'Create Clientes', 'url'=>array('create')),
	array('label'=>'Update Clientes', 'url'=>array('update', 'id'=>$model->cliente_id)),
	array('label'=>'Delete Clientes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cliente_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Clientes', 'url'=>array('admin')),
);
?>

<h1>View Clientes #<?php echo $model->cliente_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model_p,
	'attributes'=>array(
		'nombre_persona',
		'apellido_persona',
	),
)); ?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model_u,
	'attributes'=>array(
		'cliente_id',
		'Tipos_Cliente_tipo_cliente_id',
		'Persona_persona_id',
		'direccion_cobro',
		'abono_mensual',
		'sistema_secundario_id',
		'factura',
		'razon_social',
		'cuit',
	),
)); ?>
