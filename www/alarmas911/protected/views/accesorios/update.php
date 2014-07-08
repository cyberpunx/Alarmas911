<?php
/* @var $this AccesoriosController */
/* @var $model Accesorios */

$this->breadcrumbs=array(
	'Accesorioses'=>array('index'),
	$model->accesorio_id=>array('view','id'=>$model->accesorio_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Accesorios', 'url'=>array('index')),
	array('label'=>'Create Accesorios', 'url'=>array('create')),
	array('label'=>'View Accesorios', 'url'=>array('view', 'id'=>$model->accesorio_id)),
	array('label'=>'Manage Accesorios', 'url'=>array('admin')),
);
?>

<h1>Update Accesorios <?php echo $model->accesorio_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>