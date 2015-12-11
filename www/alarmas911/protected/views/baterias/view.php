<?php
/* @var $this BateriasController */
/* @var $model Baterias */

$this->breadcrumbs=array(
	$model->sistemaAlarmas->nombre_sistema_alarma=>array('sistemaAlarmas/view','id'=>$model->sistema_alarmas_sistema_alarma_id),
	'Baterias'=>array('admin'),
	$model->bateria_id,
);

$this->menu=array(
	//array('label'=>'List Baterias', 'url'=>array('index')),
	array('label'=>'Crear Bateria', 'url'=>array('create')),
	array('label'=>'Actualizar Bateria', 'url'=>array('update', 'id'=>$model->bateria_id)),
	array('label'=>'Eliminar Bateria', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->bateria_id),'confirm'=>'¿Está seguro que desea eliminar este Item?')),
	array('label'=>'Administrar Baterias', 'url'=>array('admin')),
);
?>

<h1>Ver Bateria: <?php echo $model->sistemaAlarmas->nombre_sistema_alarma.'/Batería ID '.$model->bateria_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'bateria_id',
		array(
			'label'=>'Sistema de Alarmas',
			'type'=>'raw',
			'value'=>CHtml::link(CHtml::encode($model->sistemaAlarmas->nombre_sistema_alarma),
								 array('sistemaAlarmas/view','id'=>$model->sistemaAlarmas->sistema_alarma_id)),
		),
		array(
			'label'=>'Modelo',
			'type'=>'raw',
			'value'=>$model->modelos->ModeloMarca,
		),
		array(
			'label'=>'Tipo de Batería',
			'type'=>'raw',
			'value'=>$model->tiposBaterias->nombre,
		),
		'observaciones_bateria',
		'vida_util',
		'fecha_alta',
		'fecha_baja',
	),
)); ?>
