<?php
/* @var $this PanelesController */
/* @var $model Paneles */

$this->breadcrumbs=array(
	'Paneles'=>array('index'),
	$model->panel_id=>array('view','id'=>$model->panel_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Paneles', 'url'=>array('index')),
	array('label'=>'Create Paneles', 'url'=>array('create')),
	array('label'=>'View Paneles', 'url'=>array('view', 'id'=>$model->panel_id)),
	array('label'=>'Manage Paneles', 'url'=>array('admin')),
);
?>

<h1>Update Paneles <?php echo $model->panel_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>