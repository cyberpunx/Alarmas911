<?php
/* @var $this BateriasController */
/* @var $model Baterias */

$this->breadcrumbs=array(
	'Bateriases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Baterias', 'url'=>array('index')),
	array('label'=>'Manage Baterias', 'url'=>array('admin')),
);
?>

<h1>Create Baterias</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>