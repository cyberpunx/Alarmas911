<?php
/* @var $this SensoresController */
/* @var $model Sensores */

$this->breadcrumbs=array(
	'Sensores'=>array('index'),
	$model->sensor_id=>array('view','id'=>$model->sensor_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Sensores', 'url'=>array('index')),
	array('label'=>'Create Sensores', 'url'=>array('create')),
	array('label'=>'View Sensores', 'url'=>array('view', 'id'=>$model->sensor_id)),
	array('label'=>'Manage Sensores', 'url'=>array('admin')),
);
?>

<h1>Update Sensores <?php echo $model->sensor_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>