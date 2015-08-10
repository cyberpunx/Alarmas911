<?php
/* @var $this BateriasController */
/* @var $model Baterias */

$this->breadcrumbs=array(
	'Bateriases'=>array('index'),
	$model->bateria_id,
);

$this->menu=array(
	array('label'=>'List Baterias', 'url'=>array('index')),
	array('label'=>'Create Baterias', 'url'=>array('create')),
	array('label'=>'Update Baterias', 'url'=>array('update', 'id'=>$model->bateria_id)),
	array('label'=>'Delete Baterias', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->bateria_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Baterias', 'url'=>array('admin')),
);
?>

<h1>View Baterias #<?php echo $model->bateria_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'bateria_id',
		'sistema_alarmas_sistema_alarma_id',
		'modelos_modelo_id',
		'tipos_baterias_tipo_bateria_id',
		'observaciones_bateria',
		'vida_util',
		'fecha_alta',
		'fecha_baja',
	),
)); ?>
