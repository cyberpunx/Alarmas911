<?php
/* @var $this AccesoriosController */
/* @var $model Accesorios */

$this->breadcrumbs=array(
	$model->sistemaAlarmas->nombre_sistema_alarma=>array('sistemaAlarmas/view','id'=>$model->sistema_alarmas_sistema_alarma_id),
	'Accesorios'=>array('admin'),
	$model->nombre_accesorio=>array('view','id'=>$model->accesorio_id),
	'Actualizar',
);

$this->menu=array(
	//array('label'=>'List Accesorios', 'url'=>array('index')),
	array('label'=>'Crear Accesorio', 'url'=>array('create')),
	array('label'=>'Ver Accesorio', 'url'=>array('view', 'id'=>$model->accesorio_id)),
	array('label'=>'Administrar Accesorios', 'url'=>array('admin')),
);
?>

<h1>Actualizar Accesorio: <?php echo $model->sistemaAlarmas->nombre_sistema_alarma.'/'.$model->nombre_accesorio;  ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>