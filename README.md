# negocio.sql
# Práctica PHP + SQL – CRUD Clientes

## Descripción
Esta es una aplicación web sencilla para gestionar clientes en un negocio.  
Permite realizar operaciones básicas **CRUD**: Crear, Leer, Actualizar y Borrar clientes (borrado lógico).  

---

## Instalación

1. Instalar **XAMPP** o MAMP en tu computadora.  
2. Abrir **XAMPP Control Panel** y arrancar **Apache** y **MySQL**.  
3. Abrir **phpMyAdmin** (`http://localhost:8080/phpmyadmin`) e importar el archivo `negocio_simple.sql`.  
   - Esto crea las tablas: `clientes`, `productos`, `pedidos` con datos de prueba.  
4. Colocar todos los archivos PHP en la carpeta del servidor local:  
   - XAMPP: `C:\xampp\htdocs\practica_php_sql`  
   - MAMP: `MAMP/htdocs/practica_php_sql`  
5. Abrir el navegador y acceder a la aplicación:  
http://localhost:8080/practica_php_sql/clientes.php

---

## Funcionalidades

- **Listar clientes**: muestra todos los clientes que no estén borrados.  
- **Agregar cliente**: formulario para crear nuevos clientes.  
- **Editar cliente**: modificar los datos de un cliente existente.  
- **Borrado lógico**: marcar clientes como borrados sin eliminar la fila de la base de datos.  

---

## Archivos principales

- `conexion.php` → conexión a la base de datos.  
- `clientes.php` → lista de clientes.  
- `agregar_cliente.php` → agregar nuevo cliente.  
- `editar_cliente.php` → modificar cliente existente.  
- `borrar_cliente.php` → borrar cliente (lógico).  
- `negocio_simple.sql` → script de creación de base de datos y datos de prueba.  
- `README.md` → instrucciones de instalación y uso.  

---

## Notas

- Apache corre en **puerto 8080**, por eso la URL incluye `:8080`.  
- Solo se listan clientes con `borrado = 0`.  
- La aplicación está hecha **sin frameworks**, siguiendo la estructura modular de PHP enseñada en clase.  
- Es una versión básica para práctica, se puede ampliar con módulos de **Productos** y **Pedidos**.
