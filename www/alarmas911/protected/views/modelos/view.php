<?php
/* @var $this ModelosController */
/* @var $model Modelos */

$this->breadcrumbs=array(
	'Modeloses'=>array('index'),
	$model->id_modelo,
);

$this->menu=array(
	array('label'=>'List Modelos', 'url'=>array('index')),
	array('label'=>'Create Modelos', 'url'=>array('create')),
	array('label'=>'Update Modelos', 'url'=>array('update', 'id'=>$model->id_modelo)),
	array('label'=>'Delete Modelos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_modelo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Modelos', 'url'=>array('admin')),
);
?>

<h1>View Modelos #<?php echo $model->id_modelo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_modelo',
		'marcas_id_marca',
		'nombre_modelo',
		'observaciones_modelo',
		'discriminante',
	),
)); ?>
