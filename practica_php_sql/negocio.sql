-- 1 Crear la base de datos
CREATE DATABASE negocio_simple;
USE negocio_simple;

-- 2 Tabla Clientes
CREATE TABLE clientes (
    id_cliente INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50),
    email VARCHAR(50),
    telefono VARCHAR(20),
    borrado TINYINT(1) DEFAULT 0
);

-- 3 Tabla Productos
CREATE TABLE productos (
    id_producto INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50),
    precio DECIMAL(10,2),
    borrado TINYINT(1) DEFAULT 0
);

-- 4 Tabla Pedidos
CREATE TABLE pedidos (
    id_pedido INT AUTO_INCREMENT PRIMARY KEY,
    id_cliente INT,
    id_producto INT,
    fecha DATE,
    FOREIGN KEY (id_cliente) REFERENCES clientes(id_cliente),
    FOREIGN KEY (id_producto) REFERENCES productos(id_producto)
);

-- 5 Datos de prueba
INSERT INTO clientes (nombre,email,telefono) VALUES
('Juan Pérez','juan@mail.com','123456789'),
('Ana López','ana@mail.com','987654321'),
('Luis Gómez','luis@mail.com','555123456'),
('Marta Ruiz','marta@mail.com','666987654'),
('Carlos Díaz','carlos@mail.com','444555666'),
('Laura Fernández','laura@mail.com','777888999'),
('Pedro Torres','pedro@mail.com','333222111'),
('Elena Morales','elena@mail.com','999888777'),
('Diego Sánchez','diego@mail.com','222333444'),
('Sofía Ramos','sofia@mail.com','111222333');

INSERT INTO productos (nombre,precio) VALUES
('Producto A',10.50),
('Producto B',25.00),
('Producto C',15.75),
('Producto D',30.00),
('Producto E',12.00),
('Producto F',20.00),
('Producto G',18.50),
('Producto H',22.00),
('Producto I',16.75),
('Producto J',28.00);

INSERT INTO pedidos (id_cliente,id_producto,fecha) VALUES
(1,1,'2026-02-16'),
(2,2,'2026-02-16'),
(3,3,'2026-02-15'),
(4,4,'2026-02-14'),
(5,5,'2026-02-13');
