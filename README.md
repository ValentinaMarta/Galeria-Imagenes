
# Galeria-Imágenes 

![](./public/img/icono1.png)

## Gestión de mis imágenes favoritas:
### `Añadir` :page_facing_up: `Ver`   :eyes: `Modificar`:writing_hand: `Borrar`  :x:
## 
## !🔌 Instala dependencias:

Debes tener instalado ***composer*** y una vez clonado el proyecto, ejecutar el comando:

### `composer install`
Este comando crea la carpeta vendor que contiene bundles y códigos de terceros.

### Crear o actualizar la base de datos
- Debemos tener MySql de XAMPP encendido.
- Debemos ir al archivo ***.env*** y modificar la ruta de conexión con la bases de datos
***DATABASE_URL="mysql://app:!ChangeMe!@127.0.0.1:3306/app?serverVersion=8&charset=utf8mb4"*** poniendo nuestro usuario contraseña y el nombre de la bases de datos que vamos a utilizar(en este caso se ha llamado ***fotos*** pero podriamos darle cualquier nombre)
- Por último ejecutamos uno de los comandos siguientes según el caso
### `php bin/console doctrine:database:create`
### `php bin/console doctrine:schema:update --force`

Ejecútalo con:
### `symfony server:start`
______ 

## Stack utilizado

- HTML    
- CSS
- JS
- SYMFONY 6.2
- PHP 8.1
- PHPUNIT
- XAMPP

## Vistas 

### Página principal

![](./public/img/uno.png)

### Añadir :page_facing_up:
![](./public/img/dos.png)

### Ver :eyes: 
![](./public/img/cinco2.png)

### Modificar :writing_hand:
![](./public/img/tres.png)

### Borrar :x:
![](./public/img/cuatro.png)

### Responsive :iphone:
![](./public/img/responsive.png)