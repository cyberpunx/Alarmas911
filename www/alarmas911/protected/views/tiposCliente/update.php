<?php
/* @var $this TiposClienteController */
/* @var $model TiposCliente */

$this->breadcrumbs=array(
	'Tipos Clientes'=>array('index'),
	$model->tipo_cliente_id=>array('view','id'=>$model->tipo_cliente_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TiposCliente', 'url'=>array('index')),
	array('label'=>'Create TiposCliente', 'url'=>array('create')),
	array('label'=>'View TiposCliente', 'url'=>array('view', 'id'=>$model->tipo_cliente_id)),
	array('label'=>'Manage TiposCliente', 'url'=>array('admin')),
);
?>

<h1>Update TiposCliente <?php echo $model->tipo_cliente_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>