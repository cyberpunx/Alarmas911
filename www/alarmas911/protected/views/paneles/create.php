<?php
/* @var $this PanelesController */
/* @var $model Paneles */

$this->breadcrumbs=array(
	'Paneles'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Paneles', 'url'=>array('index')),
	array('label'=>'Manage Paneles', 'url'=>array('admin')),
);
?>

<h1>Create Paneles</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>