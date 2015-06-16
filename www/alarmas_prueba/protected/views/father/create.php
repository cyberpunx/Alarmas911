<?php
/* @var $this FatherController */
/* @var $model Father */

$this->breadcrumbs=array(
	'Fathers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Father', 'url'=>array('index')),
	array('label'=>'Manage Father', 'url'=>array('admin')),
);
?>

<h1>Create Father</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>