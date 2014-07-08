<?php
/* @var $this ClientesPagosFechaController */
/* @var $model ClientesPagosFecha */

$this->breadcrumbs=array(
	'Clientes Pagos Fechas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ClientesPagosFecha', 'url'=>array('index')),
	array('label'=>'Manage ClientesPagosFecha', 'url'=>array('admin')),
);
?>

<h1>Create ClientesPagosFecha</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>