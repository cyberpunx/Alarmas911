<?php
/* @var $this ModelosController */
/* @var $model Modelos */

$this->breadcrumbs=array(
	'Modeloses'=>array('index'),
	$model->modelo_id,
);

$this->menu=array(
	array('label'=>'List Modelos', 'url'=>array('index')),
	array('label'=>'Create Modelos', 'url'=>array('create')),
	array('label'=>'Update Modelos', 'url'=>array('update', 'id'=>$model->modelo_id)),
	array('label'=>'Delete Modelos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->modelo_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Modelos', 'url'=>array('admin')),
);
?>

<h1>View Modelos #<?php echo $model->modelo_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'modelo_id',
		'marcas_marca_id',
		'nombre_modelo',
		'observaciones_modelo',
		'discriminante',
	),
)); ?>
