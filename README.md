**México en TI**
================

Es una aplicación creada con en función de las especificaciones dadas por el portal [**Retos Públicos**][1] para la creación de una red de empresas del sector de las TIC en México. Se busca los actores de la red puedan acceder a una serie de beneficios otorgados por otras empresas como eventos, convocatorias y servicios internos.

Ésto con la finalidad de fomentar vínculos comerciales y alianzas entre las empresas y personas físicas, que permitan el crecimiento de los actores involucrados y puedan ofrecer soluciones en conjunto.

----------

Retos Públicos
--------------

**Retos Públicos** es una estrategia de la **Coordinación de Estrategia Digital Nacional** que invitará a los emprendedores e innovadores del país a proponer y desarrollar soluciones para problemas del Gobierno Federal. De esta manera buscamos solucionar problemas públicos y que las dependencias de gobierno abran sus procesos a la innovación cívica para generar la apertura de datos y la creación de un ecosistema de emprendedores cívicos.

Laravel
---------

El desarrollo propuesto está basado en el Laravel. Es un framework de código abierto para desarrollar aplicaciones y servicios web con PHP 5. Utiliza sistema de ruteo, **RESTful**, el motor de plantillas **blade** y **Eloquent ORM**, entre otras características que lo colocan como una de las mejores opciones a la hora de construir aplicaciones.

Instalación
-----------

### Homestead
Para esta tarea, la aplicación fue desarrollada y probada bajo Windows 10 con Vagrant 1.7.4 en VirtualBox. **Homestead** incluye:

> **Tecnologías incluidas:**
> - Ubuntu 14.04
> - PHP 5.6
> - HHVM
> - Nginx
> - MySQL
> - Postgres
> - Node (With Bower, Grunt, and Gulp)
> - Redis
> - Memcached
> - Beanstalkd
> - Laravel Envoy
> - Fabric + HipChat Extension

### Paso a paso
 - Descargar e instalar VirtualBox
 - Descargar e instalar [**Vagrant**][2]
 - Modificar el archivo ***Homestead.yaml*** y establecer las rutas hasta las carpetas
 - Entrar a la consola (***PowerShell***), ir hasta el directorio ***/ruta_voluntarios/server/*** y ejecutar vagrant up (iniciará la descarga y comenzará la ejecución) hasta que muestra ***php5-fpm start/running, process XXXX***
 - Conectar por medio de SSH a la consola de Vagrant:
   - IP: 127.0.0.1
   - Puerto: 2222
   - Usuario: vagrant
   - Contraseña: vagrant
 - Crear la BD en Vagrant:
   - mysql -h 127.0.0.1 -P 33060 -u homestead -p"secret"
   - CREATE DATABASE voluntariosmx DEFAULT CHARACTER SET utf8 DEFAULT COLLATE utf8_general_ci;"
   - Ejecutar los siguientes comandos para alimentar la base de datos y popular las tablas
       cd source
     php artisan migrate --seed --force
 - Probar la aplicación en el navegador http://192.168.10.10
   - Puedes configurar el archivo ***hosts*** con la siguiente entrada:
       **192.168.10.10 lh.mexicoenti.mx**

***NOTA: estas configuraciones también pueden ser ejecutadas en entornos de producción***

  [1]: http://retos.datos.gob.mx/organizaciones/12/retos/11-reto-hechoen-mx
  [2]: https://www.vagrantup.com/downloads.html "Vagrant"