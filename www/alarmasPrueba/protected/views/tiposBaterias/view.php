<?php
/* @var $this TiposBateriasController */
/* @var $model TiposBaterias */

$this->breadcrumbs=array(
	'Tipos Bateriases'=>array('index'),
	$model->tipo_bateria_id,
);

$this->menu=array(
	array('label'=>'List TiposBaterias', 'url'=>array('index')),
	array('label'=>'Create TiposBaterias', 'url'=>array('create')),
	array('label'=>'Update TiposBaterias', 'url'=>array('update', 'id'=>$model->tipo_bateria_id)),
	array('label'=>'Delete TiposBaterias', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->tipo_bateria_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TiposBaterias', 'url'=>array('admin')),
);
?>

<h1>View TiposBaterias #<?php echo $model->tipo_bateria_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'tipo_bateria_id',
		'nombre',
		'observaciones',
	),
)); ?>
