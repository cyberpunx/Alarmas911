<?php
/* @var $this PagosController */
/* @var $model Pagos */

$this->breadcrumbs=array(
	'Pagos'=>array('admin'),
	$model->pago_id,
);

$this->menu=array(
	array('label'=>'Administrar Pagos', 'url'=>array('admin')),
	array('label'=>'Crear Pago', 'url'=>array('create')),
	array('label'=>'Editar Pago', 'url'=>array('update', 'id'=>$model->pago_id)),
	array('label'=>'Borrar Pago', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pago_id),'confirm'=>'¿Está usted seguro de eliminar el siguiente item?')),
	//array('label'=>'Manage Pagos', 'url'=>array('admin')),
);
?>

<h1>Detalle del Pago #<?php echo $model->pago_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pago_id',
		//'usuarios_usuario_id',
		array(
			'name'=>'Usuario',
			'type'=>'raw',
			//'value'=>$model->usuarios->FullName,
			'value' => CHtml::link($model->usuarios->FullName, '?r=usuarios/view&id='.$model->usuarios->usuario_id),
		),
		//'importe',
		array(
			'name'=>'Importe',
			'type'=>'html',
			'value'=>"$".$model->importe,
		),
		//'ordenes_servicio_orden_servicio_id',
		'fecha',
		//'tipos_pago_tipo_pago_id',
		array(
			'name'=>'Tipo de pago',
			'type'=>'html',
			'value'=>$model->tiposPago->nombre_tipo_pago,
		),
		array(
			'name'=>'Información adicional',
			'type'=>'html',
			'value'=>$model->informacion_pago,
		),
	),
)); ?>
