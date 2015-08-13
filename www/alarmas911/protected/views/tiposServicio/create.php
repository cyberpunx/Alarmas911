<?php
/* @var $this TiposServicioController */
/* @var $model TiposServicio */

$this->breadcrumbs=array(
	'Tipos Servicio'=>array('admin'),
	'Crear',
);

$this->menu=array(
	//array('label'=>'List TiposServicio', 'url'=>array('index')),
	array('label'=>'Administrar Tipos Servicio', 'url'=>array('admin')),
);
?>

<h1>Crear Tipos de Servicio</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>