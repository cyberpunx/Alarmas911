<?php
/* @var $this SistemaAlarmasController */
/* @var $model SistemaAlarmas */

$this->breadcrumbs=array(
	'Sistema de Alarmas'=>array('index'),
	$model->nombre_sistema_alarma,
);

$this->menu=array(
	array('label'=>'Listar Sistemas', 'url'=>array('index')),
	array('label'=>'Crear Sistema', 'url'=>array('create')),
	array('label'=>'Actualizar Sistema', 'url'=>array('update', 'id'=>$model->sistema_alarma_id)),
	array('label'=>'Borrar Sistema', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->sistema_alarma_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Admin Sistema', 'url'=>array('admin')),
);
?>

<h1>Ver Sistema de Alarmas / <?php echo $model->nombre_sistema_alarma; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'sistema_alarma_id',
		'nombre_sistema_alarma',
		'observaciones_sistema_alarma',
		array(
			'label' => $model->modelos->getAttributeLabel('nombre_modelo'),
			'value' => $model->modelos->nombre_modelo
		),
		array(
			'label' => $model->barrios->getAttributeLabel('nombre_barrio'),
			'value' => $model->barrios->nombre_barrio
		),
		array(
			'label' => $model->tiposMonitoreo->getAttributeLabel('nombre_tipo_monitoreo'),
			'value' => $model->tiposMonitoreo->nombre_tipo_monitoreo
		),
		array(
			'label' => $model->usuarios->getAttributeLabel('nombre'),
			'value' => $model->usuarios->FullName
		),
		array(
			'name'=>'Zonas',
			'type'=>'html',
			'value'=>$model->relatedZonas,
		),
	),
)); ?>