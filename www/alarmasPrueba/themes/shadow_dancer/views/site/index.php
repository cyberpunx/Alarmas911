<?php  
  $baseUrl = Yii::app()->theme->baseUrl; 
  $cs = Yii::app()->getClientScript();
  $cs->registerScriptFile('http://www.google.com/jsapi');
  $cs->registerCoreScript('jquery');
  $cs->registerScriptFile($baseUrl.'/js/jquery.gvChart-1.0.1.min.js');
  $cs->registerScriptFile($baseUrl.'/js/pbs.init.js');
  $cs->registerCssFile($baseUrl.'/css/jquery.css');

?>

<?php $this->pageTitle=Yii::app()->name; ?>

<h1>Admin</h1>
<!--
<div class="flash-error">This is an example of an error message to show you that things have gone wrong.</div>
<div class="flash-notice">This is an example of a notice message.</div>
<div class="flash-success">This is an example of a success message to show you that things have gone according to plan.</div>
-->


<div class="span-23 showgrid">
<div class="dashboardIcons span-23" style="margin-left:30px">

	<div class="dashIcon span-3">
		<a href="?r=usuarios/admin"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-people4.png" alt="Usuarios" /></a>
		<div class="dashIconText"><a href="?r=usuarios/admin">Usuarios</a></div>
	</div>

	<div class="dashIcon span-3">
		<a href="?r=ordenesServicio/admin"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-tools.png" alt="Ordenes de Servicio" /></a>
		<div class="dashIconText"><a href="?r=ordenesServicio/admin">Ordenes Servicio</a></div>
	</div> 

	
</div><!-- END OF .dashIcons -->

<h1>Sistemas de Alarmas.</h1>


<div class="dashboardIcons span-23" style="margin-left:30px">
	 
	<div class="dashIcon span-3">
		<a href="?r=marcas/admin"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-list3.png" alt="marcas" /></a>
		<div class="dashIconText"><a href="?r=marcas/admin">Marcas</a></div>
	</div> 

   <div class="dashIcon span-3">
		<a href="?r=modelos/admin"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-list2.png" alt="modelos" /></a>
		<div class="dashIconText"><a href="?r=modelos/admin">Modelos</a></div>
	</div> 

	<div class="dashIcon span-3">
		<a href="?r=sistemaAlarmas/admin"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-bell.png" alt="sistemaAlarmas" /></a>
		<div class="dashIconText"><a href="?r=sistemaAlarmas/admin">Sistemas Alarmas</a></div>
	</div> 

</div><!-- END OF .dashIcons -->

<h1>Tipos</h1>


<div class="dashboardIcons span-23" style="margin-left:30px">
	 


	<div class="dashIcon span-3">
		<a href="?r=tiposBaterias/admin"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-battery-charging.png" alt="tiposBaterias" /></a>
		<div class="dashIconText"><a href="?r=tiposBaterias/admin">Tipos Baterias</a></div>
	</div>

	<div class="dashIcon span-3">
		<a href="?r=tiposCliente/admin"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-people4.png" alt="tiposClientes" /></a>
		<div class="dashIconText"><a href="?r=tiposCliente/admin">Tipos Cliente</a></div>
	</div> 
   
	<div class="dashIcon span-3">
		<a href="?r=tiposMonitoreo/admin"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-wimax.png" alt="tiposMonitoreo" /></a>
		<div class="dashIconText"><a href="?r=tiposMonitoreo/admin">Tipos Monitoreo</a></div>
	</div> 

	<div class="dashIcon span-3">
		<a href="?r=tiposPago/admin"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-cash2.png" alt="tiposPago" /></a>
		<div class="dashIconText"><a href="?r=tiposPago/admin">Tipos Pago</a></div>
	</div> 

	<div class="dashIcon span-3">
		<a href="?r=tiposSensores/admin"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-signal.png" alt="tiposSensores" /></a>
		<div class="dashIconText"><a href="?r=tiposSensores/admin">Tipos Sensores</a></div>
	</div> 

	<div class="dashIcon span-3">
		<a href="?r=tiposServicio/admin"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-gears.png" alt="tiposServicios" /></a>
		<div class="dashIconText"><a href="?r=tiposServicio/admin">Tipos Servicios</a></div>
	</div>
	
</div><!-- END OF .dashIcons -->

<h1>Misc.</h1>


<div class="dashboardIcons span-23" style="margin-left:30px">
	 
	<div class="dashIcon span-3">
		<a href="?r=barrios/admin"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-map2.png" alt="Barrios" /></a>
		<div class="dashIconText"><a href="?r=barrios/admin">Barrios</a></div>
	</div>
	
</div><!-- END OF .dashIcons -->

<!--
<div class="span-7 last">

			Domains Used: 45/100
			<?php
			$this->widget('zii.widgets.jui.CJuiProgressBar', array(
				'value'=>45,
				'htmlOptions'=>array(
					'style'=>'height:10px;',
					'class'=>'shadowprogressbar'
				),
			));
			?>
			<br />
			Space Used: 95%
			<?php
			$this->widget('zii.widgets.jui.CJuiProgressBar', array(
				'value'=>95,
				'htmlOptions'=>array(
					'style'=>'height:10px;',
					'class'=>'shadowprogressbar'
				),
			));
			?>
			<br />
			Bandwidth Used: 10%
			<?php
			$this->widget('zii.widgets.jui.CJuiProgressBar', array(
				'value'=>10,
				'htmlOptions'=>array(
					'style'=>'height:10px;',
					'class'=>'shadowprogressbar'
				),
			));
			?>
			<br />
			Conversion Rate: 25%            
			<?php
			$this->widget('zii.widgets.jui.CJuiProgressBar', array(
				'value'=>25,
				'htmlOptions'=>array(
					'style'=>'height:10px;',
					'class'=>'shadowprogressbar'
				),
			));
			?>
			<br />
			Success Rate: 55%            
			<?php
			$this->widget('zii.widgets.jui.CJuiProgressBar', array(
				'value'=>55,
				'htmlOptions'=>array(
					'style'=>'height:10px;',
					'class'=>'shadowprogressbar'
				),
			));
			?>
</div>
-->
   
<!--             
<div class="span-10">
<?php
$this->beginWidget('zii.widgets.CPortlet', array(
	'title'=>'Pie Chart',
));
?>
<div class="chart2">
<div>
		<div class="text">
			<table class="myChart">
				<thead>
					<tr>
						<th></th>
						<th>Jan</th>
						<th>Feb</th>
						<th>Mar</th>
						<th>Apr</th>
						<th>May</th>
						<th>Jun</th>
						<th>Jul</th>
					</tr>
				</thead>
	
				<tbody>
					<tr>
					  <th>Sales</th>
					  <td>3923</td>
					  <td>2923</td>
					  <td>2931</td>
					  <td>3942</td>
					  <td>4921</td>
					  <td>6934</td>
					  <td>5934</td>
					</tr>
					<tr>
					  <th>Quotes</th>
					  <td>3623</td>
					  <td>2623</td>
					  <td>2831</td>
					  <td>3842</td>
					  <td>4821</td>
					  <td>6534</td>
					  <td>5134</td>
					</tr>
					<tr>
					  <th>Visitors </th>
						<td>3523</td>
						<td>2223</td>
						<td>2531</td>
						<td>3342</td>
						<td>4521</td>
						<td>6234</td>
						<td>5434</td>
					</tr>
				</tbody>
			</table>
			
			
	  </div>
  </div>
</div>
-->

<!--
<?php $this->endWidget();?>
</div>
<div class="span-13 last">
<?php
$this->beginWidget('zii.widgets.CPortlet', array(
	'title'=>'Line Chart',
));
?>
<div class="chart3">
	<div>
		<div class="text">
			<table class="myChart">
				<thead>
					<tr>
						<th></th>
						<th>Jan</th>
						<th>Feb</th>
						<th>Mar</th>
						<th>Apr</th>
						<th>May</th>
						<th>Jun</th>
					</tr>
				</thead>

				<tbody>
					<tr>
						<th>Quotes</th>
						<td>39523</td>
						<td>26123</td>
						<td>29031</td>
						<td>34342</td>
						<td>48321</td>
						<td>42234</td>
					</tr>
					<tr>
						<th>Sales</th>
						<td>34523</td>
						<td>22123</td>
						<td>25031</td>
						<td>30342</td>
						<td>45321</td>
						<td>46234</td>
					</tr>
				</tbody>
			</table>
			
			
		</div>
	</div>
</div>
<?php $this->endWidget();?>
</div>
-->

<!--
<div class="flash-notice span-22 last">
<p>This is a "static" page. You may change the content of this page
by updating the file <tt><?php echo __FILE__; ?></tt>.</p>
</div>
-->

</div>