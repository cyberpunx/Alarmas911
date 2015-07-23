<?php
/* @var $this BarriosController */
/* @var $model Barrios */

$this->breadcrumbs=array(
	'Barrioses'=>array('index'),
	$model->barrio_id=>array('view','id'=>$model->barrio_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Barrios', 'url'=>array('index')),
	array('label'=>'Create Barrios', 'url'=>array('create')),
	array('label'=>'View Barrios', 'url'=>array('view', 'id'=>$model->barrio_id)),
	array('label'=>'Manage Barrios', 'url'=>array('admin')),
);
?>

<h1>Update Barrios <?php echo $model->barrio_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>