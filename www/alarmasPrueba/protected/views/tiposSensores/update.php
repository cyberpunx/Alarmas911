<?php
/* @var $this TiposSensoresController */
/* @var $model TiposSensores */

$this->breadcrumbs=array(
	'Tipos Sensores'=>array('index'),
	$model->tipo_sensor_id=>array('view','id'=>$model->tipo_sensor_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TiposSensores', 'url'=>array('index')),
	array('label'=>'Create TiposSensores', 'url'=>array('create')),
	array('label'=>'View TiposSensores', 'url'=>array('view', 'id'=>$model->tipo_sensor_id)),
	array('label'=>'Manage TiposSensores', 'url'=>array('admin')),
);
?>

<h1>Update TiposSensores <?php echo $model->tipo_sensor_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>