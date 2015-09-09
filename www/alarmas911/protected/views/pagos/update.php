<?php
/* @var $this PagosController */
/* @var $model Pagos */

$this->breadcrumbs=array(
	'Pagos'=>array('admin'),
	$model->pago_id=>array('view','id'=>$model->pago_id),
	'Update',
);

$this->menu=array(
	array('label'=>'Admin Pagos', 'url'=>array('admin')),
	array('label'=>'Crear Pago', 'url'=>array('create')),
	array('label'=>'Ver Pago', 'url'=>array('view', 'id'=>$model->pago_id)),
	//array('label'=>'Manage Pagos', 'url'=>array('admin')),
);
?>

<h1>Update Pagos <?php echo $model->pago_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>