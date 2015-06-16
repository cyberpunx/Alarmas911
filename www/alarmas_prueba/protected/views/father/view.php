<?php
/* @var $this FatherController */
/* @var $model Father */

$this->breadcrumbs=array(
	'Fathers'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Father', 'url'=>array('index')),
	array('label'=>'Create Father', 'url'=>array('create')),
	array('label'=>'Update Father', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Father', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Father', 'url'=>array('admin')),
);
?>

<h1>View Father #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
	),
)); ?>
