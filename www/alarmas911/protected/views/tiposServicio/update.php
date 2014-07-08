<?php
/* @var $this TiposServicioController */
/* @var $model TiposServicio */

$this->breadcrumbs=array(
	'Tipos Servicios'=>array('index'),
	$model->tipo_servicio_id=>array('view','id'=>$model->tipo_servicio_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TiposServicio', 'url'=>array('index')),
	array('label'=>'Create TiposServicio', 'url'=>array('create')),
	array('label'=>'View TiposServicio', 'url'=>array('view', 'id'=>$model->tipo_servicio_id)),
	array('label'=>'Manage TiposServicio', 'url'=>array('admin')),
);
?>

<h1>Update TiposServicio <?php echo $model->tipo_servicio_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>