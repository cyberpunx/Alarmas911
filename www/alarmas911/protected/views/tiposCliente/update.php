<?php
/* @var $this TiposClienteController */
/* @var $model TiposCliente */

$this->breadcrumbs=array(
	'Tipos Cliente'=>array('admin'),
	$model->tipo_cliente_id=>array('view','id'=>$model->tipo_cliente_id),
	'Actualizar',
);

$this->menu=array(
	//array('label'=>'List TiposCliente', 'url'=>array('index')),
	array('label'=>'Crear Tipos Cliente', 'url'=>array('create')),
	array('label'=>'Ver  Tipo Cliente', 'url'=>array('view', 'id'=>$model->tipo_cliente_id)),
	array('label'=>'Administrar Tipos Cliente', 'url'=>array('admin')),
);
?>

<h1>Actualizar Tipos de Cliente <?php echo $model->tipo_cliente_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>