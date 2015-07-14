<?php
/* @var $this SistemaAlarmasController */
/* @var $model SistemaAlarmas */

$this->breadcrumbs=array(
	'Sistema Alarmases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SistemaAlarmas', 'url'=>array('index')),
	array('label'=>'Manage SistemaAlarmas', 'url'=>array('admin')),
);
?>

<h1>Create SistemaAlarmas</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>