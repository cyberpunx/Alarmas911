<?php
/* @var $this ZonasController */
/* @var $model Zonas */

$this->breadcrumbs=array(
	'Zonas'=>array('admin'),
	'Crear',
);

$this->menu=array(
	//array('label'=>'List Zonas', 'url'=>array('index')),
	array('label'=>'Administrar Zonas', 'url'=>array('admin')),
);
?>

<h1>Crear Zona</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>