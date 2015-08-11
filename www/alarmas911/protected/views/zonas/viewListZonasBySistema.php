<?php
/* @var $this ZonasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Zonases',
);

$this->menu=array(
	array('label'=>'Create Zonas', 'url'=>array('create')),
	array('label'=>'Manage Zonas', 'url'=>array('admin')),
);
?>

<h1>Zonases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
