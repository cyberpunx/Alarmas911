<?php
/* @var $this ActiverecordlogController */
/* @var $model Activerecordlog */

$this->breadcrumbs=array(
	'Activerecordlogs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Activerecordlog', 'url'=>array('index')),
	array('label'=>'Create Activerecordlog', 'url'=>array('create')),
	array('label'=>'Update Activerecordlog', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Activerecordlog', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Activerecordlog', 'url'=>array('admin')),
);
?>

<h1>View Activerecordlog #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'description',
		'action',
		'model',
		'idModel',
		'field',
		'creationdate',
		'userid',
		'oldValue',
		'newValue',
	),
)); ?>
