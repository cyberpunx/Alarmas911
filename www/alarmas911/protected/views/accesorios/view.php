<?php
/* @var $this AccesoriosController */
/* @var $model Accesorios */

$this->breadcrumbs=array(
	'Accesorioses'=>array('index'),
	$model->accesorio_id,
);

$this->menu=array(
	array('label'=>'List Accesorios', 'url'=>array('index')),
	array('label'=>'Create Accesorios', 'url'=>array('create')),
	array('label'=>'Update Accesorios', 'url'=>array('update', 'id'=>$model->accesorio_id)),
	array('label'=>'Delete Accesorios', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->accesorio_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Accesorios', 'url'=>array('admin')),
);
?>

<h1>View Accesorios #<?php echo $model->accesorio_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'accesorio_id',
		'Modelos_id_modelo',
		'Baterias_bateria_id',
		'Sistema_Alarmas_sistema_alarma_id',
		'nombre_accesorio',
		'observaciones_accesorio',
	),
)); ?>
