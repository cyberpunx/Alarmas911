<?php
/* @var $this TiposMonitoreoController */
/* @var $model TiposMonitoreo */

$this->breadcrumbs=array(
	'Tipos Monitoreos'=>array('index'),
	$model->tipo_monitoreo_id,
);

$this->menu=array(
	array('label'=>'List TiposMonitoreo', 'url'=>array('index')),
	array('label'=>'Create TiposMonitoreo', 'url'=>array('create')),
	array('label'=>'Update TiposMonitoreo', 'url'=>array('update', 'id'=>$model->tipo_monitoreo_id)),
	array('label'=>'Delete TiposMonitoreo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->tipo_monitoreo_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TiposMonitoreo', 'url'=>array('admin')),
);
?>

<h1>View TiposMonitoreo #<?php echo $model->tipo_monitoreo_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'tipo_monitoreo_id',
		'nombre_tipo_monitoreo',
		'valor',
	),
)); ?>
