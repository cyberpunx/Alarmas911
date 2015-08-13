<?php
/* @var $this PanelesController */
/* @var $model Paneles */

$this->breadcrumbs=array(
	'Paneles'=>array('admin'),
	'Crear',
);

$this->menu=array(
	//array('label'=>'List Paneles', 'url'=>array('index')),
	array('label'=>'Administrar Paneles', 'url'=>array('admin')),
);
?>

<h1>Crear Paneles</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>