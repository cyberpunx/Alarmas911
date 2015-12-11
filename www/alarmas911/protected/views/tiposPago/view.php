<?php
/* @var $this TiposPagoController */
/* @var $model TiposPago */

$this->breadcrumbs=array(
	'Tipos Pago'=>array('admin'),
	$model->tipo_pago_id,
);

$this->menu=array(
	//array('label'=>'List TiposPago', 'url'=>array('index')),
	array('label'=>'Crear Tipo de Pago', 'url'=>array('create')),
	array('label'=>'Actualizar Tipo de Pago', 'url'=>array('update', 'id'=>$model->tipo_pago_id)),
	array('label'=>'Borrar Tipo de Pago', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->tipo_pago_id),'confirm'=>'¿Está seguro que desea eliminar este item?')),
	array('label'=>'Administrar Tipos de Pago', 'url'=>array('admin')),
);
?>

<h1>Ver Tipo de Pago #<?php echo $model->tipo_pago_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'tipo_pago_id',
		'nombre_tipo_pago',
		'observaciones_tipo_pago',
	),
)); ?>
