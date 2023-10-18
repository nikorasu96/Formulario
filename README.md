# Formulario con Base de Datos

Este proyecto consiste en un formulario web que interactúa con una base de datos MariaDB. A continuación se detallan los pasos para ejecutarlo en tu propio entorno.

## Requisitos Previos

1. **XAMPP con MariaDB**
   - Si no tienes instalado XAMPP, puedes descargarlo desde [aquí](https://www.apachefriends.org/index.html). Asegúrate de incluir la opción de instalación para MariaDB.

2. **Editor de Código**
   - Necesitarás un editor de código para realizar modificaciones si es necesario. Puedes descargar Visual Studio Code desde [este enlace](https://code.visualstudio.com/).

## Pasos para Ejecutar

1. **Descargar el Proyecto**
   - Haz clic en el botón "Code" en la parte superior derecha y selecciona "Download ZIP". Descomprime el archivo descargado en tu computadora.

2. **Configurar la Base de Datos**

   - Abre XAMPP y asegúrate de que Apache y MySQL estén ejecutándose.
   - Abre tu navegador web y accede a `http://localhost/phpmyadmin`.
3. **Importar la Estructura de la Tabla**
   - Haz clic en la pestaña "Importar" y selecciona el archivo `votacion.sql` que se encuentra en la carpeta del proyecto descargado.

4. **Mover los Archivos al Directorio Raíz de XAMPP**

   - Abre la carpeta donde descomprimiste el proyecto y copia todos los archivos.
   - Pega los archivos en la carpeta `htdocs` de tu instalación de XAMPP (generalmente se encuentra en `C:\xampp\htdocs`).

5. **Acceder al Formulario**

   - Abre tu navegador web y accede al formulario usando la siguiente URL: `http://localhost/Formulario_NicolasEndress/index.php`.

