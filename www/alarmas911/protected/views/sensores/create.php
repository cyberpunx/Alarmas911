<?php
/* @var $this SensoresController */
/* @var $model Sensores */

$this->breadcrumbs=array(
	'Sensores'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Sensores', 'url'=>array('index')),
	array('label'=>'Manage Sensores', 'url'=>array('admin')),
);
?>

<h1>Create Sensores</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>