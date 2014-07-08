<?php
/* @var $this TiposClienteController */
/* @var $model TiposCliente */

$this->breadcrumbs=array(
	'Tipos Clientes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TiposCliente', 'url'=>array('index')),
	array('label'=>'Manage TiposCliente', 'url'=>array('admin')),
);
?>

<h1>Create TiposCliente</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>