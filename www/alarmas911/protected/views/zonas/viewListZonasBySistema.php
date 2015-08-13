<?php
/* @var $this ZonasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Zonas',
);

$this->menu=array(
	array('label'=>'Crear Zona', 'url'=>array('create')),
	array('label'=>'Administrar Zonas', 'url'=>array('admin')),
);
?>

<h1>Zonas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
