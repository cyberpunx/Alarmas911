<?php
/* @var $this TiposBateriasController */
/* @var $model TiposBaterias */

$this->breadcrumbs=array(
	'Tipos Bateria'=>array('admin'),
	$model->tipo_bateria_id,
);

$this->menu=array(
	//array('label'=>'List TiposBaterias', 'url'=>array('index')),
	array('label'=>'Crear Tipos Baterias', 'url'=>array('create')),
	array('label'=>'Actualizar Tipo Bateria', 'url'=>array('update', 'id'=>$model->tipo_bateria_id)),
	//array('label'=>'Delete TiposBaterias', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->tipo_bateria_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Tipos Baterias', 'url'=>array('admin')),
);
?>

<h1>Ver  Tipo de Bateria #<?php echo $model->tipo_bateria_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'tipo_bateria_id',
		'nombre',
		'observaciones',
	),
)); ?>
