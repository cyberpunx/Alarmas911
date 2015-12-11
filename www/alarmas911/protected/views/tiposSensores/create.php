<?php
/* @var $this TiposSensoresController */
/* @var $model TiposSensores */

$this->breadcrumbs=array(
	'Tipos Sensores'=>array('admin'),
	'Crear',
);

$this->menu=array(
	//array('label'=>'List TiposSensores', 'url'=>array('index')),
	array('label'=>'Administrar Tipos de Sensores', 'url'=>array('admin')),
);
?>

<h1>Crear Tipo de Sensores</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>