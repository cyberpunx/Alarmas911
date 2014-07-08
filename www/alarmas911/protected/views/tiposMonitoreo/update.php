<?php
/* @var $this TiposMonitoreoController */
/* @var $model TiposMonitoreo */

$this->breadcrumbs=array(
	'Tipos Monitoreos'=>array('index'),
	$model->tipo_monitoreo_id=>array('view','id'=>$model->tipo_monitoreo_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TiposMonitoreo', 'url'=>array('index')),
	array('label'=>'Create TiposMonitoreo', 'url'=>array('create')),
	array('label'=>'View TiposMonitoreo', 'url'=>array('view', 'id'=>$model->tipo_monitoreo_id)),
	array('label'=>'Manage TiposMonitoreo', 'url'=>array('admin')),
);
?>

<h1>Update TiposMonitoreo <?php echo $model->tipo_monitoreo_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>