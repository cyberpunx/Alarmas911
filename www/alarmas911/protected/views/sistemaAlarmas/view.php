<?php
/* @var $this SistemaAlarmasController */
/* @var $model SistemaAlarmas */

$this->breadcrumbs=array(
	'Sistema Alarmases'=>array('index'),
	$model->sistema_alarma_id,
);

$this->menu=array(
	array('label'=>'List SistemaAlarmas', 'url'=>array('index')),
	array('label'=>'Create SistemaAlarmas', 'url'=>array('create')),
	array('label'=>'Update SistemaAlarmas', 'url'=>array('update', 'id'=>$model->sistema_alarma_id)),
	array('label'=>'Delete SistemaAlarmas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->sistema_alarma_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SistemaAlarmas', 'url'=>array('admin')),
);
?>

<h1>View SistemaAlarmas #<?php echo $model->sistema_alarma_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'sistema_alarma_id',
		'nombre_sistema_alarma',
		'observaciones_sistema_alarma',
		'modelos_modelo_id',
		'barrios_barrio_id',
		'tipos_monitoreo_tipo_monitoreo_id',
		'usuarios_usuario_id',
	),
)); ?>
