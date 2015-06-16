<?php
/* @var $this FatherController */
/* @var $model Father */

$this->breadcrumbs=array(
	'Fathers'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Father', 'url'=>array('index')),
	array('label'=>'Create Father', 'url'=>array('create')),
	array('label'=>'View Father', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Father', 'url'=>array('admin')),
);
?>

<h1>Update Father <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>