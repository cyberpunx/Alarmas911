<?php
/* @var $this ZonasController */
/* @var $model Zonas */

$this->breadcrumbs=array(
	'Zonases'=>array('index'),
	$model->zona_id,
);

$this->menu=array(
	array('label'=>'List Zonas', 'url'=>array('index')),
	array('label'=>'Create Zonas', 'url'=>array('create')),
	array('label'=>'Update Zonas', 'url'=>array('update', 'id'=>$model->zona_id)),
	array('label'=>'Delete Zonas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->zona_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Zonas', 'url'=>array('admin')),
);
?>

<h1>View Zonas #<?php echo $model->zona_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'zona_id',
		'Sistema_Alarmas_sistema_alarma_id',
		'nombre_zona',
		'observaciones_zona',
	),
)); ?>
