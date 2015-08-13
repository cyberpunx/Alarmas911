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

18:20 p.m. 02/06/2015
	Actualizado el modelo de datos. Se agrego el atributo usuario_rol en la tabla Usuarios. 
	Creado un archivo localizado en la raiz, controlUsuarios. Tutorial para generar todo lo necesario. 
	Se loguea con el email. 

01:10 p.m. 04/06/2015
	Implementado el control de usuarios

05:27 p.m. 15/07/2015
	Pusheado el Modelo de Datos v5.1 con una única tabla Usuarios (que engloba Personas-Clientes-Empleados).
	Tambien un SQL con inserción de 100 usuarios de Dummy Data.
	En la carpeta WWW está el script generatedata, puede ser accedido mediante http://localhost/generatedata
	
01:58 p.m. 19/07/2015
	Arreglado un bug de un dropdown menu, que insertaba NULL en la tabla sin importar que estaba seleccionado (Ver views/usuarios/_form linea 82)
	Modificado ligeramente los inserts de los 100 usuarios (eliminar y volver a correr)
	Modificada la vista Admin para que las columnas muestren un numero maximo de caracteres (se deformaba todo con cadenas muy largas)
	Agregada una vista custom  usuarios/listClientes  (a modo de ejemplo por ahora solo muestra los clientes cuya factua sera del tipo A)
		Busqueda FullName operativa sobre la nueva vista
		Edits:
			view: views/usuarios/clientList.php (casi replica de views/usuarios/admin.php)
			controller: 
				Accion nueva actionListClientes() (casi replica de la accion actionAdmin)
				Agregada actionListClientes() en las AccessRules
			model:
				Agregada funcion searchListClientes() (Casi replica de Search()  pero con una clausula WHERE )
				Agregada searchListClientes() en la lista de Rules() para que funcionen las busquedas y filtros.


05:05 p.m. 22/07/2015
	Ordenes de Servicio -> Views/ordenesServicio/_form  --> Agregado sistema de fechas para insertar los valores.
														--> Fecha default al dia de hoy para insertar nueva orden de servicio

	Sistemas de Alarmas -> models/SistemaAlarmas
						   controllers/SistemaAlarmasController
						   views/sistemaAlarmas

						   Agregado en _form un campo para insertar el cliente mediante una busqueda de FullName. Use una extensión. 




02:34 p.m. 01/08/2015
	Funcionando el Detalle Ordenes Servicio con el método Father/Children

12:50 p.m. 13/08/2015
	Editada las vistas del peoyecto. Cambiado el idioma. 