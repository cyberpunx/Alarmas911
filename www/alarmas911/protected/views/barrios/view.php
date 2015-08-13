<?php
/* @var $this BarriosController */
/* @var $model Barrios */

$this->breadcrumbs=array(
	'Barrios'=>array('admin'),
	$model->barrio_id,
);

$this->menu=array(
	//array('label'=>'List Barrios', 'url'=>array('index')),
	array('label'=>'Crear Barrio', 'url'=>array('create')),
	array('label'=>'Actualizar Barrio', 'url'=>array('update', 'id'=>$model->barrio_id)),
	//array('label'=>'Delete Barrios', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->barrio_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Barrios', 'url'=>array('admin')),
);
?>

<h1>Ver Barrio #<?php echo $model->barrio_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'barrio_id',
		'nombre_barrio',
		'observaciones_barrio',
	),
)); ?>
