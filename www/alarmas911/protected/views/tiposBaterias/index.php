<?php
/* @var $this TiposBateriasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipos Baterias',
);

$this->menu=array(
	array('label'=>'Create TiposBaterias', 'url'=>array('create')),
	array('label'=>'Manage TiposBaterias', 'url'=>array('admin')),
);
?>

<h1>Tipos Bateriases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
