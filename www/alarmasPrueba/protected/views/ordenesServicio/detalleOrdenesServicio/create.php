<?php
/* @var $this DetalleOrdenesServicioController */
/* @var $model DetalleOrdenesServicio */

$this->breadcrumbs=array(
	'Detalle Ordenes Servicios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DetalleOrdenesServicio', 'url'=>array('index')),
	array('label'=>'Manage DetalleOrdenesServicio', 'url'=>array('admin')),
);
?>

<h1>Create DetalleOrdenesServicio</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>