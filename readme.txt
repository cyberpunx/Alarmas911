########## Estructura de Carpetas ##########

X:/.../Alarmas911/_db_dataModels/	# Ac� se guardan los Modelo de Datos de la DB.
X:/.../Alarmas911/www/			# Carpeta raiz con acceso Web para el server Apache. Ac� est� el sitio Web visible.
X:/.../Alarmas911/yii/			# Instalaci�n de Yii. Esta carpeta no accesible desde la web.


########### Configuraci�n de la Aplicaci�n Yii ##########

X:/path/to/repo/www/alarmas911/protected/config/main.php  # Configuracion del acceso a la BD (mysql:host=localhost;dbname=alarmas911)
							  # Config. de las herramientas Gii (password=911)


########### URLs ##########

http://localhost/alarmas911/	    	    # El Front-end de la aplicaci�n
http://localhost/alarmas911/index.php?r=gii # Acceso a las herramientas Gii (Por ej: Para generar formularios)
http://localhost/yii_requirements/index.php # Pagina para ver si el Yii funciona correctamente