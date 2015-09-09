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

<h1>Ver datos de Orden de Servicio:  <?php echo $model->sistemaAlarmas->nombre_sistema_alarma.' / ID: '.$model->orden_servicio_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'orden_servicio_id',
		array(
			'label'=>'Cliente',
			'type'=>'raw',
			'value'=>CHtml::link(CHtml::encode($model->sistemaAlarmas->usuarios->FullName),
								 array('usuarios/view','id'=>$model->sistemaAlarmas->usuarios->usuario_id)),
		),
		array(
			'label'=>'Sistema de Alarmas',
			'type'=>'raw',
			'value'=>CHtml::link(CHtml::encode($model->sistemaAlarmas->nombre_sistema_alarma),
								 array('sistemaAlarmas/view','id'=>$model->sistemaAlarmas->sistema_alarma_id)),
		),
		'fecha_emision',
		'fecha_cierre',
		//'importe',
		array(
			'label'=>'Importe',
			'type'=>'raw',
			'value'=>"$".$model->importe,
		),
		'observaciones_orden_servicio',
		'vencimiento_orden',
		'prioridad',
		
		array(
			'label'=>'Detalle',
			'type'=>'raw',
			'value'=>$model->DetallesOrdenServicio,
		),
	),
)); ?>
