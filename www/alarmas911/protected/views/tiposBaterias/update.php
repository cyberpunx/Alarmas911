<?php
/* @var $this TiposBateriasController */
/* @var $model TiposBaterias */

$this->breadcrumbs=array(
	'Tipos Bateriases'=>array('index'),
	$model->tipo_bateria_id=>array('view','id'=>$model->tipo_bateria_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TiposBaterias', 'url'=>array('index')),
	array('label'=>'Create TiposBaterias', 'url'=>array('create')),
	array('label'=>'View TiposBaterias', 'url'=>array('view', 'id'=>$model->tipo_bateria_id)),
	array('label'=>'Manage TiposBaterias', 'url'=>array('admin')),
);
?>

<h1>Update TiposBaterias <?php echo $model->tipo_bateria_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>