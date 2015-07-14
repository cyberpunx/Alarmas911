<?php
/* @var $this TiposBateriasController */
/* @var $model TiposBaterias */

$this->breadcrumbs=array(
	'Tipos Bateriases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TiposBaterias', 'url'=>array('index')),
	array('label'=>'Manage TiposBaterias', 'url'=>array('admin')),
);
?>

<h1>Create TiposBaterias</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>