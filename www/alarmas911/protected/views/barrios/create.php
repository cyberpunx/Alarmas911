<?php
/* @var $this BarriosController */
/* @var $model Barrios */

$this->breadcrumbs=array(
	'Barrioses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Barrios', 'url'=>array('index')),
	array('label'=>'Manage Barrios', 'url'=>array('admin')),
);
?>

<h1>Create Barrios</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>