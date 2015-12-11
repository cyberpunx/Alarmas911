<?php
/* @var $this PanelesController */
/* @var $model Paneles */

$this->breadcrumbs=array(
	'Paneles'=>array('admin'),
	$model->panel_id=>array('view','id'=>$model->panel_id),
	'Actualizar',
);

$this->menu=array(
	//array('label'=>'List Paneles', 'url'=>array('index')),
	array('label'=>'Crear Panel', 'url'=>array('create')),
	array('label'=>'Ver Panel', 'url'=>array('view', 'id'=>$model->panel_id)),
	array('label'=>'Administrar Paneles', 'url'=>array('admin')),
);
?>

<h1>Actualizar Panel # <?php echo $model->panel_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>