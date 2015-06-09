<?php
/* @var $this PersonasController */
/* @var $model Personas */

$this->breadcrumbs=array(
	'Personases'=>array('index'),
	$model->persona_id=>array('view','id'=>$model->persona_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Personas', 'url'=>array('index')),
	array('label'=>'Create Personas', 'url'=>array('create')),
	array('label'=>'View Personas', 'url'=>array('view', 'id'=>$model->persona_id)),
	array('label'=>'Manage Personas', 'url'=>array('admin')),
);
?>

<h1>Update Personas <?php echo $model->persona_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>