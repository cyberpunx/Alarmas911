<?php
/* @var $this SistemaAlarmasController */
/* @var $model SistemaAlarmas */

$this->breadcrumbs=array(
	'Sistema Alarmas'=>array('admin'),
	'Crear',
);

$this->menu=array(
	//array('label'=>'List SistemaAlarmas', 'url'=>array('index')),
	array('label'=>'Administrar Sistemas de Alarmas', 'url'=>array('admin')),
);
?>

<h1>Crear Sistemas de Alarmas</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>