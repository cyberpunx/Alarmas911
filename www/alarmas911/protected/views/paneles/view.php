<?php
/* @var $this PanelesController */
/* @var $model Paneles */

$this->breadcrumbs=array(
	$model->sistemaAlarmas->nombre_sistema_alarma=>array('sistemaAlarmas/view','id'=>$model->sistema_alarmas_sistema_alarma_id),
	'Paneles'=>array('admin'),
	$model->panel_id,
);

$this->menu=array(
	//array('label'=>'List Paneles', 'url'=>array('index')),
	array('label'=>'Crear Panel', 'url'=>array('create')),
	array('label'=>'Actualizar Panel', 'url'=>array('update', 'id'=>$model->panel_id)),
	array('label'=>'Eliminar Panel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->panel_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Paneles', 'url'=>array('admin')),
);
?>

<h1>Ver Panel #<?php echo $model->panel_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'panel_id',
		'baterias_bateria_id',
		'modelos_modelo_id',
		'sistema_alarmas_sistema_alarma_id',
		'nombre_panel',
		'observaciones_panel',
	),
)); ?>
