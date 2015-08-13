<?php
/* @var $this BarriosController */
/* @var $model Barrios */

$this->breadcrumbs=array(
	'Barrios'=>array('admin'),
	'Crear',
);

$this->menu=array(
	//array('label'=>'List Barrios', 'url'=>array('index')),
	array('label'=>'Administrar Barrios', 'url'=>array('admin')),
);
?>

<h1>Crear Barrio</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>