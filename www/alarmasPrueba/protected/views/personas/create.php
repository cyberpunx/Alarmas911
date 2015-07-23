<?php
/* @var $this PersonasController */
/* @var $model Personas */

$this->breadcrumbs=array(
	'Clientes'=>array('admin'),
	'Insertar',
);

$this->menu=array(
	array('label'=>'Listar Clientes', 'url'=>array('admin')),
	//array('label'=>'Manage Personas', 'url'=>array('admin')),
);
?>

<h1>Insertar Cliente</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>