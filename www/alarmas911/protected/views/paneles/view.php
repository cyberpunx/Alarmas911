<?php
/* @var $this PanelesController */
/* @var $model Paneles */

$this->breadcrumbs=array(
	'Paneles'=>array('index'),
	$model->panel_id,
);

$this->menu=array(
	array('label'=>'List Paneles', 'url'=>array('index')),
	array('label'=>'Create Paneles', 'url'=>array('create')),
	array('label'=>'Update Paneles', 'url'=>array('update', 'id'=>$model->panel_id)),
	array('label'=>'Delete Paneles', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->panel_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Paneles', 'url'=>array('admin')),
);
?>

<h1>View Paneles #<?php echo $model->panel_id; ?></h1>

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
