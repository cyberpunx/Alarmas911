


<?php
/* @var $this AccesoriosController */
/* @var $model Accesorios */

$this->breadcrumbs=array(
	$model->sistemaAlarmas->nombre_sistema_alarma=>array('sistemaAlarmas/view','id'=>$model->sistema_alarmas_sistema_alarma_id),
	'Accesorios'=>array('admin'),
	$model->nombre_accesorio,
);

$this->menu=array(
	//array('label'=>'List Accesorios', 'url'=>array('index')),
	array('label'=>'Crear Accesorio', 'url'=>array('create')),
	array('label'=>'Actualizar Accesorio', 'url'=>array('update', 'id'=>$model->accesorio_id)),
	array('label'=>'Eliminar Accesorio', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->accesorio_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Accesorios', 'url'=>array('admin')),
);
?>

<h1>Ver Accesorio: <?php echo $model->sistemaAlarmas->nombre_sistema_alarma.'/'.$model->nombre_accesorio; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'accesorio_id',
		array(
			'label'=>'Modelo',
			'type'=>'raw',
			'value'=>$model->modelos->ModeloMarca,
		),
		array(
			'label'=>'Sistema de Alarmas',
			'type'=>'raw',
			'value'=>CHtml::link(CHtml::encode($model->sistemaAlarmas->nombre_sistema_alarma),
								 array('sistemaAlarmas/view','id'=>$model->sistemaAlarmas->sistema_alarma_id)),
		),
		'nombre_accesorio',
		'observaciones_accesorio',
	),
)); ?>
