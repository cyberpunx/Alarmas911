<?php
/* @var $this TiposBateriasController */
/* @var $model TiposBaterias */

$this->breadcrumbs=array(
	'Tipos Bateria'=>array('admin'),
	'Crear',
);

$this->menu=array(
	//array('label'=>'List TiposBaterias', 'url'=>array('index')),
	array('label'=>'Administrar Tipos de Baterias', 'url'=>array('admin')),
);
?>

<h1>Crear Tipo de Bateria</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>