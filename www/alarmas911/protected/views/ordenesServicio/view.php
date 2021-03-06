<?php
/* @var $this OrdenesServicioController */
/* @var $model OrdenesServicio */

$this->breadcrumbs=array(
	'Ordenes Servicios'=>array('admin'),
	$model->orden_servicio_id,
);

$this->menu=array(
	//array('label'=>'List OrdenesServicio', 'url'=>array('index')),
	array('label'=>'Crear Orden de Servicio', 'url'=>array('create'), 'visible'=>Yii::app()->user->checkAccess('ADMINISTRADOR') ),
	array('label'=>'Actualizar Orden de Servicio', 'url'=>array('update', 'id'=>$model->orden_servicio_id), 'visible'=>Yii::app()->user->checkAccess('ADMINISTRADOR')),
	array('label'=>'Borrar Orden de Servicio', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->orden_servicio_id),'confirm'=>'¿Está usted seguro de eliminar el siguiente item?')),
	array('label'=>'Administrar Ordenes de Servicio', 'url'=>array('admin'), 'visible'=>Yii::app()->user->checkAccess('ADMINISTRADOR')),
);
?>

<h1>Ver detalle de Orden de Servicio:  <?php echo $model->sistemaAlarmas->nombre_sistema_alarma.' / ID: '.$model->orden_servicio_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'orden_servicio_id',
		array(
			'label'=>'Cliente',
			'type'=>'raw',
			'value'=>CHtml::link(CHtml::encode($model->sistemaAlarmas->usuarios->FullName),
								 array('usuarios/view','id'=>$model->sistemaAlarmas->usuarios->usuario_id)),
			'visible'=>Yii::app()->user->checkAccess('ADMINISTRADOR')
		),
		array(
			'label'=>'Sistema de Alarmas',
			'type'=>'raw',
			'value'=>CHtml::link(CHtml::encode($model->sistemaAlarmas->nombre_sistema_alarma),
								 array('sistemaAlarmas/view','id'=>$model->sistemaAlarmas->sistema_alarma_id)),
			'visible'=>Yii::app()->user->checkAccess('ADMINISTRADOR')
		),
		array(
			'label'=>'Barrio',
			'type'=>'raw',
			'value'=>$model->sistemaAlarmas->barrios->nombre_barrio,
		),
		array(
			'label'=>'Direccion del sistema',
			'type'=>'raw',
			'value'=>$model->sistemaAlarmas->direccion_sistema_alarma,
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
			'label'=>'Empleado Responsable',
			'type'=>'raw',
			'value'=>"".$model->usuarios->FullName,
		),
		array(
			'label'=>'Detalle',
			'type'=>'raw',
			'value'=>$model->DetallesOrdenServicio,
		),
		
	),
)); ?>
