<?php
/* @var $this ZonasController */
/* @var $model Zonas */

$this->breadcrumbs=array(
	$model->sistemaAlarmas->nombre_sistema_alarma=>array('sistemaAlarmas/view','id'=>$model->sistema_alarmas_sistema_alarma_id),
	'Zonas'=>array('admin'),
	$model->nombre_zona=>array('view','id'=>$model->zona_id),
	'Actualizar',
);

$this->menu=array(
	//array('label'=>'List Zonas', 'url'=>array('index')),
	array('label'=>'Crear Zona', 'url'=>array('create')),
	array('label'=>'Ver Zona', 'url'=>array('view', 'id'=>$model->zona_id)),
	array('label'=>'Administrar Zonas', 'url'=>array('admin')),
);
?>

<h1>Actualizar Zona: <?php echo $model->sistemaAlarmas->nombre_sistema_alarma.'/'.$model->nombre_zona; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>