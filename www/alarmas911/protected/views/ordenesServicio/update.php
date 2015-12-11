<?php
/* @var $this OrdenesServicioController */
/* @var $model OrdenesServicio */

$this->breadcrumbs=array(
	'Ordenes Servicios'=>array('admin'),
	$model->orden_servicio_id=>array('view','id'=>$model->orden_servicio_id),
	'Actualizar',
);

$this->menu=array(
	//array('label'=>'List OrdenesServicio', 'url'=>array('index')),
	array('label'=>'Crear Orden de Servicio', 'url'=>array('create')),
	array('label'=>'Ver Orden de Servicio', 'url'=>array('view', 'id'=>$model->orden_servicio_id)),
	array('label'=>'Administrar Ordenes de Servicio', 'url'=>array('admin')),
);
?>

<h1>Actualizar Orden de Servicio # <?php echo $model->orden_servicio_id; ?></h1>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>