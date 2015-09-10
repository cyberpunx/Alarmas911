<?php
/* @var $this SensoresController */
/* @var $model Sensores */

$this->breadcrumbs=array(
	'Sensores'=>array('admin'),
	'Crear',
);

$this->menu=array(
	//array('label'=>'List Sensores', 'url'=>array('index')),
	array('label'=>'Administrar Sensores', 'url'=>array('admin')),
);
?>

<h1>Crear Sensores</h1>

<?php $this->renderPartial('_formFromSistemas', array('model'=>$model)); ?>