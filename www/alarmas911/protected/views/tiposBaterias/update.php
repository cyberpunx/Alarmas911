<?php
/* @var $this TiposBateriasController */
/* @var $model TiposBaterias */

$this->breadcrumbs=array(
	'Tipos Bateria'=>array('admin'),
	$model->tipo_bateria_id=>array('view','id'=>$model->tipo_bateria_id),
	'Actualizar',
);

$this->menu=array(
	//array('label'=>'List TiposBaterias', 'url'=>array('index')),
	array('label'=>'Crear Tipos Baterias', 'url'=>array('create')),
	array('label'=>'Ver  Tipo Bateria', 'url'=>array('view', 'id'=>$model->tipo_bateria_id)),
	array('label'=>'Administrar Tipos Baterias', 'url'=>array('admin')),
);
?>

<h1>Actualizar Tipos de Bateria <?php echo $model->tipo_bateria_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>