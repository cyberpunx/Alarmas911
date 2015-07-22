<?php
/* @var $this ModelosController */
/* @var $model Modelos */

$this->breadcrumbs=array(
	'Modeloses'=>array('index'),
	$model->modelo_id=>array('view','id'=>$model->modelo_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Modelos', 'url'=>array('index')),
	array('label'=>'Create Modelos', 'url'=>array('create')),
	array('label'=>'View Modelos', 'url'=>array('view', 'id'=>$model->modelo_id)),
	array('label'=>'Manage Modelos', 'url'=>array('admin')),
);
?>

<h1>Update Modelos <?php echo $model->modelo_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>