<?php
/* @var $this TiposMonitoreoController */
/* @var $model TiposMonitoreo */

$this->breadcrumbs=array(
	'Tipos Monitoreos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TiposMonitoreo', 'url'=>array('index')),
	array('label'=>'Manage TiposMonitoreo', 'url'=>array('admin')),
);
?>

<h1>Create TiposMonitoreo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>