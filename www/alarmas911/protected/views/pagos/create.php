<?php
/* @var $this PagosController */
/* @var $model Pagos */

$this->breadcrumbs=array(
	'Pagos'=>array('admin'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Admin Pagos', 'url'=>array('admin')),
	//array('label'=>'Manage Pagos', 'url'=>array('admin')),
);
?>

<h1>Crear Pago</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>