<?php
/* @var $this TiposSensoresController */
/* @var $model TiposSensores */

$this->breadcrumbs=array(
	'Tipos Sensores'=>array('admin'),
	$model->tipo_sensor_id=>array('view','id'=>$model->tipo_sensor_id),
	'Actualizar',
);

$this->menu=array(
	//array('label'=>'List TiposSensores', 'url'=>array('index')),
	array('label'=>'Crear Tipo deSensores', 'url'=>array('create')),
	array('label'=>'Ver  Tipo de Sensores', 'url'=>array('view', 'id'=>$model->tipo_sensor_id)),
	array('label'=>'Administrar Tipos de Sensores', 'url'=>array('admin')),
);
?>

<h1>Actualizar Tipo de Sensor # <?php echo $model->tipo_sensor_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>