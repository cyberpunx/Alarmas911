ALARMAS 911
Pablo Quelin.
Franco Magrini.


########## Estructura de Carpetas ##########

X:/.../Alarmas911/_db_dataModels/ 	# Acá se guardan los Modelo de Datos de la DB.
X:/.../Alarmas911/www/ 			# Carpeta raiz del webserver
X:/.../Alarmas911/yii/ 			# Instalación de Yii.

########### Configuración de la Aplicación Yii ##########

X:/path/to/repo/www/alarmas911/protected/config/main.php  # Config de la Webapp


########### URLs ##########
	
http://localhost/alarmas911/	    	    		# El Front-end de la aplicación
http://localhost/alarmas911/index.php?r=gii 		# Acceso a las herramientas Gii 
http://localhost/alarmas911/index.php?r=site/login	# Pagina de Login


http://localhost/yii_requirements/index.php 		# Pagina para ver si el Yii funciona


#########################################################

http://localhost/alarmas911/index.php?r=clientes	# Pagina CRUD para Clientes
http://localhost/alarmas911/index.php?r=tiposcliente	# Pagina CRUD para Tipos de Cliente
http://localhost/alarmas911/index.php?r=personas	# Pagina CRUD para Personas


----------------------------------------------------------------

CHANGELOG:

02:44 p.m. 09/05/2015:

	Creadas las paginas CRUD para Clientes, Tipos de Cliente y Personas.
	El formulario de Clientes toma el "Tipo de Cliente" de un combobox autorellenado con los datos de la tabla Tipos_Cliente.

11:24 a.m. 12/05/2015
	
	Actualizado el modelo de datos con los mecanismos de compensacion correspondientes. 
	