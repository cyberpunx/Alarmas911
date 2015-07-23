<?php
/* @var $this EmpleadosController */
/* @var $model Empleados */

$this->breadcrumbs=array(
	'Empleadoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Empleados', 'url'=>array('index')),
	array('label'=>'Manage Empleados', 'url'=>array('admin')),
);
?>

<h1>Create Empleados</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>