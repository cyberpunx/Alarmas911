<?php
/* @var $this BateriasController */
/* @var $model Baterias */

$this->breadcrumbs=array(
	'Baterias'=>array('admin'),
	'Crear',
);

$this->menu=array(
	//array('label'=>'List Baterias', 'url'=>array('index')),
	array('label'=>'Administrar Baterias', 'url'=>array('admin')),
);
?>

<h1>Crear Bateria</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>