<?php
/* @var $this SensoresController */
/* @var $model Sensores */

$this->breadcrumbs=array(
	$model->zonas->sistemaAlarmas->nombre_sistema_alarma=>array('sistemaAlarmas/view','id'=>$model->zonas->sistemaAlarmas->sistema_alarma_id),
	$model->zonas->nombre_zona=>array('zonas/view','id'=>$model->zonas->zona_id),
	'Sensores'=>array('admin'),
	$model->sensor_id,
);

$this->menu=array(
	//array('label'=>'List Sensores', 'url'=>array('index')),
	//array('label'=>'Crear Sensor', 'url'=>array('create')),
	array('label'=>'Actualizar Sensor', 'url'=>array('update', 'id'=>$model->sensor_id)),
	array('label'=>'Eliminar Sensor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->sensor_id),'confirm'=>'Esta seguro que desea eliminar este Item?')),
	array('label'=>'Administrar Sensores', 'url'=>array('admin')),
);
?>

<h1>Ver Sensor: <?php echo $model->zonas->sistemaAlarmas->nombre_sistema_alarma.'/'.$model->zonas->nombre_zona.'/'.$model->tiposSensores->nombre_sensor.' ID #'.$model->sensor_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'sensor_id',
		array(
			'label'=>'Tipo de Sensor',
			'type'=>'raw',
			'value'=>$model->tiposSensores->nombre_sensor,
		),
		array(
			'label'=>'Modelo',
			'type'=>'raw',
			'value'=>$model->modelos->ModeloMarca,
		),
		array(
			'label'=>'Zona',
			'type'=>'raw',
			'value'=>CHtml::link(CHtml::encode($model->zonas->nombre_zona),
								 array('zonas/view','id'=>$model->zonas_zona_id)),
		),
		array(
			'label'=>'Sistema de Alarmas',
			'type'=>'raw',
			'value'=>CHtml::link(CHtml::encode($model->zonas->sistemaAlarmas->nombre_sistema_alarma),
								 array('sistemaAlarmas/view','id'=>$model->zonas->sistemaAlarmas->sistema_alarma_id)),
		),
	),
)); ?>
