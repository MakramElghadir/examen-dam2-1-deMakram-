## [X] Dinámica
1. Repositorio forkeado.
2. Repositorio cloneada a mi maquina.
3. Sprints leendo durante mi avenzo a traves mi examen.
4. Todo progresso van a ser documentados en este archivo.

## [X] Sprint 1: Preparación

1. Puedo hacer `commit` y `push` a mi repositorio.
2. Sesion `docker hub` iniciada con la commanda `sudo docker info` y verificacion positiva de la iniciacion de dockerhub.

## [X] Sprint 2: Apache

1. Carpeta `apache` creada. Con `Dockerfile` dentro de ella.
2. Archivo `index.html` creada en carpeta `apache`, con "Hola Mundo" escribido dentro.
3. Imagen `apache` creada y lánzada localmente y correctamente con las comandas `sudo docker build -t apache .` y `sudo docker run -d -p 8080:80 apache` y vistada con el elance `http://localhost:8080/index.html`.

## [X] Sprint 3: Apache + PHP

1. Carpeta`apache-php` creada.
2. archivo `index.php` creada con:
    - [X] Un mensaje de hola mundo, como lo quieras hacer.
    - [X] La fecha y hora actual.
    - [X] La versión de PHP que estás utilizando.
    - [X] La versión de Apache que estás utilizando.
    - [X] La IP del servidor.
    - [X] La IP del cliente.
3. Imagen lánzala localmente y contenido de `index.php` desplegado correctamente con las comandas `sudo docker build -t php-hello-world .` y `sudo docker run -d -p 8080:80 php-hello-world` y vistada con el elance`http://localhost:8080/index.php`.

## [X] Sprint 4: PHP

1. Trabajando en `apache-php` continuada.
2. Archivo `info.php` creada con la función `phpinfo()` dentro ello.
3. Archivo `random.php` creado:
    - [X] Un número aleatorio entre 1 y 100.
    - [X] Un mensaje que diga si el número es par o impar.
    - [X] Un elemento aleatorio de un array que contenga al menos 5 elementos, a tu elección.
4. Imagen lánzala localmente y contenido de `random.php` desplegado correctamente con las comandas `sudo docker build -t php-hello-world .` y `sudo docker run -d -p 8080:80 php-hello-world` y vistada con el elance`http://localhost:8080/random.php`.

## Sprint 5: Composing con Apache + PHP + MySQL

Este es el ultimo sprint. En este sprint vamos a crear un entorno completo con Apache, PHP y MySQL.

Apache y php ya los tenemos. Ahora vamos a añadir MySQL. Sin embargo, para esto tendrás que hacer uso de un comando nuevo, `docker compose` y un archivo de configuración, `docker-compose.yml` que te permitirá lanzar varios contenedores a la vez.

1. Carpeta `apache-php-mysql` creada. Con `docker-compose.yml`dentro de ella.
2. Archivo `init.sql` creada. Tiene `id` tan un `int AUTOINCREMENT PRIMARY KEY`, `name` y `password` tan `varchar(30)`.
3. 3 usuarios insertado dentro `init.sql` con la comanda `INSERT INTO usuario (name, password) VALUES ('Archmagos Istrakaris', '01110');`.
4. Carpeta `apache-php` copiada dentro `apache-php-mysql`.

Esta es la estructura principal de tu entorno, tu `docker-compose.yml` definirá los servicios que se lanzarán y cómo se comunicarán entre ellos. 

Recuerda que un archivo `Dockerfile` define una imagen o servicio y un archivo `docker-compose.yml` define un entorno completo, donde podemos usar varios contenedores. Un `.yml` no es más que un `.json` sin llaves y sin comas, usando tabulado para definir las anidaciones.

3. Gracias a `docker compose` y configuracion del archivo `.yml`, el `docker-compose.yml` estaba escribidos con los servicios necesarios para lanzar el servidor web Apache.
4. Archivo `index.php` modificado, con conexión a la base de datos MySQL y systema de desplego de conecto o de error.
5. Archivo `users.php` creado, cpm todos los usuarios de la tabla `users` dentra la base de datos.
6. Construye el entorno y lánzalo localmente.
7. Documenta como has hecho estos pasos en el archivo `README.md`.
8. Crea un contenedor en `docker hub` con el entorno que has creado y documenta como lo has hecho en el archivo `README.md`.
9. Modifica la página principal de `docker hub` con el comando necesario para lanzar el entorno con un solo comando.
10. Terminaste! No olvides de hacer `commit` y `push` a tu repositorio.