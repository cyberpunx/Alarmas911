<?php
/* @var $this TiposSensoresController */
/* @var $model TiposSensores */

$this->breadcrumbs=array(
	'Tipos Sensores'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TiposSensores', 'url'=>array('index')),
	array('label'=>'Manage TiposSensores', 'url'=>array('admin')),
);
?>

<h1>Create TiposSensores</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>