<?php
/* @var $this PersonasController */
/* @var $model Personas */

$this->breadcrumbs=array(
	'Clientes'=>array('admin'),
	$model->FullName=>array('admin'),
	//$model->FullName=>array('view','id'=>$model->persona_id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Listar Clientes', 'url'=>array('admin')),
	array('label'=>'Insertar Clientes', 'url'=>array('create')),
	//array('label'=>'View Personas', 'url'=>array('view', 'id'=>$model->persona_id)),
	//array('label'=>'Manage Personas', 'url'=>array('admin')),
);
?>

<h1>Editar Cliente: <?php echo $model->FullName; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>