<?php
/* @var $this AccesoriosController */
/* @var $model Accesorios */

$this->breadcrumbs=array(
	'Accesorios'=>array('admin'),
	$model->accesorio_id,
);

$this->menu=array(
	//array('label'=>'List Accesorios', 'url'=>array('index')),
	array('label'=>'Crear Accesorio', 'url'=>array('create')),
	array('label'=>'Actualizar Accesorio', 'url'=>array('update', 'id'=>$model->accesorio_id)),
	array('label'=>'Eliminar Accesorio', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->accesorio_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Accesorios', 'url'=>array('admin')),
);
?>

<h1>Ver Accesorio #<?php echo $model->accesorio_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'accesorio_id',
		'modelos_modelo_id',
		'baterias_bateria_id',
		'sistema_alarmas_sistema_alarma_id',
		'nombre_accesorio',
		'observaciones_accesorio',
	),
)); ?>
