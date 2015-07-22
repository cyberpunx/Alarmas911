<?php
/* @var $this MarcasController */
/* @var $model Marcas */

$this->breadcrumbs=array(
	'Marcases'=>array('index'),
	$model->marca_id=>array('view','id'=>$model->marca_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Marcas', 'url'=>array('index')),
	array('label'=>'Create Marcas', 'url'=>array('create')),
	array('label'=>'View Marcas', 'url'=>array('view', 'id'=>$model->marca_id)),
	array('label'=>'Manage Marcas', 'url'=>array('admin')),
);
?>

<h1>Update Marcas <?php echo $model->marca_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>