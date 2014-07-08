<?php
/* @var $this BateriasController */
/* @var $model Baterias */

$this->breadcrumbs=array(
	'Bateriases'=>array('index'),
	$model->bateria_id=>array('view','id'=>$model->bateria_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Baterias', 'url'=>array('index')),
	array('label'=>'Create Baterias', 'url'=>array('create')),
	array('label'=>'View Baterias', 'url'=>array('view', 'id'=>$model->bateria_id)),
	array('label'=>'Manage Baterias', 'url'=>array('admin')),
);
?>

<h1>Update Baterias <?php echo $model->bateria_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>