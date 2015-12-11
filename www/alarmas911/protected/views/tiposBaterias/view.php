<?php
/* @var $this TiposBateriasController */
/* @var $model TiposBaterias */

$this->breadcrumbs=array(
	'Tipos Bateria'=>array('admin'),
	$model->tipo_bateria_id,
);

$this->menu=array(
	//array('label'=>'List TiposBaterias', 'url'=>array('index')),
	array('label'=>'Crear Tipo de Bateria', 'url'=>array('create')),
	array('label'=>'Actualizar Tipo de Bateria', 'url'=>array('update', 'id'=>$model->tipo_bateria_id)),
	array('label'=>'Borrar Tipo de Bateria', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->tipo_bateria_id),'confirm'=>'¿Está seguro que desea eliminar este item?')),
	array('label'=>'Administrar Tipos de Baterias', 'url'=>array('admin')),
);
?>

<h1>Ver  Tipo de Bateria - <?php echo $model->nombre; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'tipo_bateria_id',
		'nombre',
		'observaciones',
	),
)); ?>
