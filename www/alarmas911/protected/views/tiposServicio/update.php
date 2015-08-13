<?php
/* @var $this TiposServicioController */
/* @var $model TiposServicio */

$this->breadcrumbs=array(
	'Tipos Servicio'=>array('admin'),
	$model->tipo_servicio_id=>array('view','id'=>$model->tipo_servicio_id),
	'Actualizar',
);

$this->menu=array(
	//array('label'=>'List TiposServicio', 'url'=>array('index')),
	array('label'=>'Crear Tipos Servicio', 'url'=>array('create')),
	array('label'=>'Ver Tipo Servicio', 'url'=>array('view', 'id'=>$model->tipo_servicio_id)),
	array('label'=>'Administrar Tipos Servicio', 'url'=>array('admin')),
);
?>

<h1>Actualizar Tipos de Servicio #<?php echo $model->tipo_servicio_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>