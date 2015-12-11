<?php
/* @var $this TiposMonitoreoController */
/* @var $model TiposMonitoreo */

$this->breadcrumbs=array(
	'Tipos Monitoreo'=>array('admin'),
	$model->tipo_monitoreo_id,
);

$this->menu=array(
	//array('label'=>'List TiposMonitoreo', 'url'=>array('index')),
	array('label'=>'Crear Tipo de Monitoreo', 'url'=>array('create')),
	array('label'=>'Actualizar Tipo de Monitoreo', 'url'=>array('update', 'id'=>$model->tipo_monitoreo_id)),
	array('label'=>'Borrar Tipo de Monitoreo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->tipo_monitoreo_id),'confirm'=>'¿Está seguro que desea eliminar este item?')),
	array('label'=>'Administrar Tipos de Monitoreo', 'url'=>array('admin')),
);
?>

<h1>Ver Tipo de Monitoreo #<?php echo $model->tipo_monitoreo_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'tipo_monitoreo_id',
		'nombre_tipo_monitoreo',
		'valor',
	),
)); ?>
