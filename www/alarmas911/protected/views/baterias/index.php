<?php
/* @var $this BateriasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bateriases',
);

$this->menu=array(
	array('label'=>'Create Baterias', 'url'=>array('create')),
	array('label'=>'Manage Baterias', 'url'=>array('admin')),
);
?>

<h1>Bateriases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
