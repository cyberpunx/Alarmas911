<?php
/* @var $this TiposClienteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipos Clientes',
);

$this->menu=array(
	array('label'=>'Create TiposCliente', 'url'=>array('create')),
	array('label'=>'Manage TiposCliente', 'url'=>array('admin')),
);
?>

<h1>Tipos Clientes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
