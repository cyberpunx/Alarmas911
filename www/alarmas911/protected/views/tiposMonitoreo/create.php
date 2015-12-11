<?php
/* @var $this TiposMonitoreoController */
/* @var $model TiposMonitoreo */

$this->breadcrumbs=array(
	'Tipos Monitoreo'=>array('admin'),
	'Crear',
);

$this->menu=array(
	//array('label'=>'List TiposMonitoreo', 'url'=>array('index')),
	array('label'=>'Administrar Tipos de Monitoreo', 'url'=>array('admin')),
);
?>

<h1>Crear Tipo de Monitoreo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>