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
	array('label'=>'Crear Tipos Sensores', 'url'=>array('create')),
	array('label'=>'Ver  Tipo Sensores', 'url'=>array('view', 'id'=>$model->tipo_sensor_id)),
	array('label'=>'Administrar Tipos Sensores', 'url'=>array('admin')),
);
?>

<h1>Actualizar Tipos de Sensores <?php echo $model->tipo_sensor_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>