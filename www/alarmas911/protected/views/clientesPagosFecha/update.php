<?php
/* @var $this ClientesPagosFechaController */
/* @var $model ClientesPagosFecha */

$this->breadcrumbs=array(
	'Clientes Pagos Fechas'=>array('index'),
	$model->cliente_pago_fecha_id=>array('view','id'=>$model->cliente_pago_fecha_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ClientesPagosFecha', 'url'=>array('index')),
	array('label'=>'Create ClientesPagosFecha', 'url'=>array('create')),
	array('label'=>'View ClientesPagosFecha', 'url'=>array('view', 'id'=>$model->cliente_pago_fecha_id)),
	array('label'=>'Manage ClientesPagosFecha', 'url'=>array('admin')),
);
?>

<h1>Update ClientesPagosFecha <?php echo $model->cliente_pago_fecha_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>