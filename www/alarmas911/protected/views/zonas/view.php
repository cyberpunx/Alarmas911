<?php
/* @var $this ZonasController */
/* @var $model Zonas */

$this->breadcrumbs=array(
	$model->sistemaAlarmas->nombre_sistema_alarma=>array('sistemaAlarmas/view','id'=>$model->sistema_alarmas_sistema_alarma_id),
	'Zonas'=>array('listZonasBySistema','id_sistema'=>$model->sistema_alarmas_sistema_alarma_id),
	$model->nombre_zona,
);

$this->menu=array(
	array('label'=>'List Zonas', 'url'=>array('index')),
	array('label'=>'Create Zonas', 'url'=>array('create')),
	array('label'=>'Update Zonas', 'url'=>array('update', 'id'=>$model->zona_id)),
	array('label'=>'Delete Zonas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->zona_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Zonas', 'url'=>array('admin')),
);
?>

<h1>View Zonas "<?php echo $model->nombre_zona; ?>"</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'zona_id',
		array(
            'label'=>'Sistema de Alarmas',
            'type'=>'raw',
            'value'=>CHtml::link(CHtml::encode($model->sistemaAlarmas->nombre_sistema_alarma),
                                 array('sistemaAlarmas/view','id'=>$model->sistema_alarmas_sistema_alarma_id)),
        ),
		'nombre_zona',		
		//'sistemaAlarmas.nombre_sistema_alarma',
		'observaciones_zona',
	),
)); ?>
