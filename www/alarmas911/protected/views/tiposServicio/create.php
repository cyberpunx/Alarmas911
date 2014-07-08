<?php
/* @var $this TiposServicioController */
/* @var $model TiposServicio */

$this->breadcrumbs=array(
	'Tipos Servicios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TiposServicio', 'url'=>array('index')),
	array('label'=>'Manage TiposServicio', 'url'=>array('admin')),
);
?>

<h1>Create TiposServicio</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>