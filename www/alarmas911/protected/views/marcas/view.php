<?php
/* @var $this MarcasController */
/* @var $model Marcas */

$this->breadcrumbs=array(
	'Marcas'=>array('admin'),
	$model->marca_id,
);

$this->menu=array(
	//array('label'=>'List Marcas', 'url'=>array('index')),
	array('label'=>'Crear Marcas', 'url'=>array('create')),
	array('label'=>'Actualizar Marcas', 'url'=>array('update', 'id'=>$model->marca_id)),
	array('label'=>'Borrar Marca', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->marca_id),'confirm'=>'¿Está seguro que desea eliminar este Item?')),
	array('label'=>'Administrar Marcas', 'url'=>array('admin')),
);
?>

<h1>Ver datos de marca  #<?php echo $model->marca_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'marca_id',
		'nombre_marca',
		'observaciones_marca',
	),
)); ?>
