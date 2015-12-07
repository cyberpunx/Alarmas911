<?php
/* @var $this BarriosController */
/* @var $model Barrios */

$this->breadcrumbs=array(
	'Barrios'=>array('admin'),
	$model->barrio_id=>array('view','id'=>$model->barrio_id),
	'Actualizar',
);

$this->menu=array(
	//array('label'=>'List Barrios', 'url'=>array('index')),
	array('label'=>'Crear Barrio', 'url'=>array('create')),
	//array('label'=>'Ver Barrio', 'url'=>array('view', 'id'=>$model->barrio_id)),
	array('label'=>'Administrar Barrios', 'url'=>array('admin')),
);
?>

<h1>Actualizar Barrios <?php echo $model->barrio_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>