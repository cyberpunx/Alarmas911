<?php
/* @var $this AccesoriosController */
/* @var $model Accesorios */

$this->breadcrumbs=array(
	'Accesorios'=>array('admin'),
	'Crear',
);

$this->menu=array(
	//array('label'=>'List Accesorios', 'url'=>array('index')),
	array('label'=>'Administrar Accesorios', 'url'=>array('admin')),
);
?>

<h1>Crear Accesorio</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>