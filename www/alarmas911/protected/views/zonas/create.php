<?php
/* @var $this ZonasController */
/* @var $model Zonas */

$this->breadcrumbs=array(
	'Zonases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Zonas', 'url'=>array('index')),
	array('label'=>'Manage Zonas', 'url'=>array('admin')),
);
?>

<h1>Create Zonas</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>