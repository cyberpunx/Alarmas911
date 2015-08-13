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
	array('label'=>'Crear Tipos Monitoreo', 'url'=>array('create')),
	array('label'=>'Ver Tipo Monitoreo', 'url'=>array('view', 'id'=>$model->tipo_monitoreo_id)),
	array('label'=>'Administrar Tipos de Monitoreo', 'url'=>array('admin')),
);
?>

<h1>Actualizar Tipos de Monitoreo <?php echo $model->tipo_monitoreo_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>