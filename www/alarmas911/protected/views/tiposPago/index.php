<?php
/* @var $this TiposPagoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipos Pagos',
);

$this->menu=array(
	array('label'=>'Create TiposPago', 'url'=>array('create')),
	array('label'=>'Manage TiposPago', 'url'=>array('admin')),
);
?>

<h1>Tipos Pagos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
