########## Estructura de Carpetas ##########

X:/.../Alarmas911/_db_dataModels/	# Acá se guardan los Modelo de Datos de la DB.
X:/.../Alarmas911/www/			# Carpeta raiz con acceso Web para el server Apache. Acá está el sitio Web visible.
X:/.../Alarmas911/yii/			# Instalación de Yii. Esta carpeta no accesible desde la web.


########### Configuración de la Aplicación Yii ##########

X:/path/to/repo/www/alarmas911/protected/config/main.php  # Configuracion del acceso a la BD (mysql:host=localhost;dbname=alarmas911)
							  # Config. de las herramientas Gii (password=911)


########### URLs ##########

http://localhost/alarmas911/	    	    # El Front-end de la aplicación
http://localhost/alarmas911/index.php?r=gii # Acceso a las herramientas Gii (Por ej: Para generar formularios)
http://localhost/yii_requirements/index.php # Pagina para ver si el Yii funciona correctamente