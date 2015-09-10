<?php
/* @var $this ZonasController */
/* @var $model Zonas */

$this->breadcrumbs=array(
	$model->sistemaAlarmas->nombre_sistema_alarma=>array('sistemaAlarmas/view','id'=>$model->sistema_alarmas_sistema_alarma_id),
	'Zonas'=>array('listZonasBySistema','id_sistema'=>$model->sistema_alarmas_sistema_alarma_id),
	$model->nombre_zona,
);

$this->menu=array(
	//array('label'=>'List Zonas', 'url'=>array('index')),
	array('label'=>'Crear Zona', 'url'=>array('create')),
	array('label'=>'Actualizar Zona', 'url'=>array('update', 'id'=>$model->zona_id)),
	//array('label'=>'Delete Zonas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->zona_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Zonas', 'url'=>array('admin')),
);
?>

<h1>Ver Zona: <?php echo $model->sistemaAlarmas->nombre_sistema_alarma.'/'.$model->nombre_zona; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'zona_id',
		array(
            'label'=>'Sistema de Alarmas',
            'type'=>'raw',
            'value'=>CHtml::link(CHtml::encode($model->sistemaAlarmas->nombre_sistema_alarma),
                                 array('sistemaAlarmas/view','id'=>$model->sistema_alarmas_sistema_alarma_id)),
        ),
		'nombre_zona',		
		//'sistemaAlarmas.nombre_sistema_alarma',
		'observaciones_zona',
	),
)); ?>


 
<br>

<div class="button_list">
	<ul>
	</ul>
	<ul>
	</ul>
	<ul>
	</ul>
	<ul>
	</ul>
	<ul>
		<li>
			<a class="grey" href="index.php?r=zonas/listZonasBySistema<?php echo "&id_sistema=".$model->sistema_alarmas_sistema_alarma_id?>">
				<span class="icon icon-magnifier">Ver Zonas de este Sistema</span>
			</a>
		</li>
		<li>
			<a class="grey" href="index.php?r=sensores/createFromSistemas&id=<?php echo $model->zona_id?>">
				<span class="icon icon-add">Agregar Sensores</span>
			</a>
		</li>
	</ul>
	<br style="clear:left">
</div>

