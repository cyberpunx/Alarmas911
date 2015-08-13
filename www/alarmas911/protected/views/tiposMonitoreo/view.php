<?php
/* @var $this TiposMonitoreoController */
/* @var $model TiposMonitoreo */

$this->breadcrumbs=array(
	'Tipos Monitoreo'=>array('admin'),
	$model->tipo_monitoreo_id,
);

$this->menu=array(
	//array('label'=>'List TiposMonitoreo', 'url'=>array('index')),
	array('label'=>'Crear Tipos Monitoreo', 'url'=>array('create')),
	array('label'=>'Actualizar Tipo Monitoreo', 'url'=>array('update', 'id'=>$model->tipo_monitoreo_id)),
	//array('label'=>'Delete TiposMonitoreo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->tipo_monitoreo_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Tipos Monitoreo', 'url'=>array('admin')),
);
?>

<h1>Ver  Tipo de Monitoreo #<?php echo $model->tipo_monitoreo_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'tipo_monitoreo_id',
		'nombre_tipo_monitoreo',
		'valor',
	),
)); ?>
