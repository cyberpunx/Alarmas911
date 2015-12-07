<?php
/* @var $this ModelosController */
/* @var $model Modelos */

$this->breadcrumbs=array(
	'Modelos'=>array('admin'),
	$model->modelo_id=>array('view','id'=>$model->modelo_id),
	'Actualizar',
);

$this->menu=array(
	//array('label'=>'List Modelos', 'url'=>array('index')),
	array('label'=>'Crear Modelos', 'url'=>array('create')),
	//array('label'=>'Ver Modelo', 'url'=>array('view', 'id'=>$model->modelo_id)),
	array('label'=>'Administrar Modelos', 'url'=>array('admin')),
);
?>

<h1>Actualizar datos de modelo <?php echo $model->modelo_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>