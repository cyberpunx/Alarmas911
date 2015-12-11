<?php
/* @var $this ModelosController */
/* @var $model Modelos */

$this->breadcrumbs=array(
	'Modelos'=>array('Administrar'),
	$model->modelo_id,
);

$this->menu=array(
	//array('label'=>'List Modelos', 'url'=>array('index')),
	array('label'=>'Crear Modelos', 'url'=>array('create')),
	array('label'=>'Editar Modelo', 'url'=>array('update', 'id'=>$model->modelo_id)),
	array('label'=>'Eliminar Modelo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->modelo_id),'confirm'=>'¿Está seguro que desea eliminar este Item?')),
	array('label'=>'Administrar Modelos', 'url'=>array('admin')),
);
?>

<h1>Ver datos de modelo #<?php echo $model->modelo_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'modelo_id',
		'marcas.nombre_marca',
		'nombre_modelo',
		'observaciones_modelo',
		'discriminante',
	),
)); ?>
