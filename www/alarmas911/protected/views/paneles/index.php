<?php
/* @var $this PanelesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Paneles',
);

$this->menu=array(
	array('label'=>'Create Paneles', 'url'=>array('create')),
	array('label'=>'Manage Paneles', 'url'=>array('admin')),
);
?>

<h1>Paneles</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
