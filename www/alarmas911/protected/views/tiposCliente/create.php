<?php
/* @var $this TiposClienteController */
/* @var $model TiposCliente */

$this->breadcrumbs=array(
	'Tipos Cliente'=>array('admin'),
	'Crear',
);

$this->menu=array(
	//array('label'=>'List TiposCliente', 'url'=>array('index')),
	array('label'=>'Administrar Tipos Cliente', 'url'=>array('admin')),
);
?>

<h1>Crear Tipos de Cliente</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>