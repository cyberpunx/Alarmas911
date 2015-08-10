<?php
/* @var $this ZonasController */
/* @var $model Zonas */

$this->breadcrumbs=array(
	'Zonases'=>array('index'),
	$model->zona_id=>array('view','id'=>$model->zona_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Zonas', 'url'=>array('index')),
	array('label'=>'Create Zonas', 'url'=>array('create')),
	array('label'=>'View Zonas', 'url'=>array('view', 'id'=>$model->zona_id)),
	array('label'=>'Manage Zonas', 'url'=>array('admin')),
);
?>

<h1>Update Zonas <?php echo $model->zona_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>