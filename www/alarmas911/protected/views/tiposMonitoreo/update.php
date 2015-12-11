<?php
/* @var $this TiposMonitoreoController */
/* @var $model TiposMonitoreo */

$this->breadcrumbs=array(
	'Tipos Monitoreo'=>array('admin'),
	$model->tipo_monitoreo_id=>array('view','id'=>$model->tipo_monitoreo_id),
	'Actualizar',
);

$this->menu=array(
	//array('label'=>'List TiposMonitoreo', 'url'=>array('index')),
	array('label'=>'Crear Tipo de  Monitoreo', 'url'=>array('create')),
	array('label'=>'Ver Tipo de Monitoreo', 'url'=>array('view', 'id'=>$model->tipo_monitoreo_id)),
	array('label'=>'Administrar Tipos de Monitoreo', 'url'=>array('admin')),
);
?>

<h1>Actualizar Tipo de Monitoreo # <?php echo $model->tipo_monitoreo_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>