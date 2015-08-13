<?php
/* @var $this MarcasController */
/* @var $model Marcas */

$this->breadcrumbs=array(
	'Marcas'=>array('admin'),
	'Crear',
);

$this->menu=array(
	//array('label'=>'List Marcas', 'url'=>array('index')),
	array('label'=>'Administrar Marcas', 'url'=>array('admin')),
);
?>

<h1>Crear Marca</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>