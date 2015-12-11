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
	array('label'=>'Crear Tipo de Servicio', 'url'=>array('create')),
	array('label'=>'Ver Tipo Servicio', 'url'=>array('view', 'id'=>$model->tipo_servicio_id)),
	array('label'=>'Administrar Tipos de Servicio', 'url'=>array('admin')),
);
?>

<h1>Actualizar Tipo de Servicio # <?php echo $model->tipo_servicio_id.' / '.$model->nombre_tipo_servicio; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>