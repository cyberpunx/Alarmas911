<?php
/* @var $this ZonasController */
/* @var $model Zonas */

$this->breadcrumbs=array(
	'Zonas'=>array('admin'),
	$model->zona_id=>array('view','id'=>$model->zona_id),
	'Actualizar',
);

$this->menu=array(
	//array('label'=>'List Zonas', 'url'=>array('index')),
	array('label'=>'Crear Zona', 'url'=>array('create')),
	array('label'=>'Ver Zona', 'url'=>array('view', 'id'=>$model->zona_id)),
	array('label'=>'Administrar Zonas', 'url'=>array('admin')),
);
?>

<h1>Actualizar Zona  #<?php echo $model->zona_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>