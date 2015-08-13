<?php
/* @var $this AccesoriosController */
/* @var $model Accesorios */

$this->breadcrumbs=array(
	'Accesorios'=>array('admin'),
	$model->accesorio_id=>array('view','id'=>$model->accesorio_id),
	'Actualizar',
);

$this->menu=array(
	//array('label'=>'List Accesorios', 'url'=>array('index')),
	array('label'=>'Crear Accesorio', 'url'=>array('create')),
	array('label'=>'Ver Accesorio', 'url'=>array('view', 'id'=>$model->accesorio_id)),
	array('label'=>'Administrar Accesorios', 'url'=>array('admin')),
);
?>

<h1>Actualizar Accesorio #<?php echo $model->accesorio_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>