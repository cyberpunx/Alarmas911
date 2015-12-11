<?php
/* @var $this MarcasController */
/* @var $model Marcas */

$this->breadcrumbs=array(
	'Marcas'=>array('admin'),
	$model->marca_id=>array('view','id'=>$model->marca_id),
	'Actualizar',
);

$this->menu=array(
	//array('label'=>'List Marcas', 'url'=>array('index')),
	array('label'=>'Crear Marcas', 'url'=>array('create')),
	array('label'=>'Ver Marca', 'url'=>array('view', 'id'=>$model->marca_id)),
	array('label'=>'Administrar Marcas', 'url'=>array('admin')),
);
?>

<h1>Actualizar datos de marca # <?php echo $model->marca_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>