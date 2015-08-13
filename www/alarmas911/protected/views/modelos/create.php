<?php
/* @var $this ModelosController */
/* @var $model Modelos */

$this->breadcrumbs=array(
	'Modelos'=>array('admin'),
	'Crear',
);

$this->menu=array(
	//array('label'=>'List Modelos', 'url'=>array('index')),
	array('label'=>'Administrar Modelos', 'url'=>array('admin')),
);
?>

<h1>Crear Modelo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>