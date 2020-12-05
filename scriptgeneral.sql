/* 
DROP TABLE OrdenEsp; 
DROP TABLE Productos; 
DROP TABLE Ordenes; 
DROP TABLE Usuarios;
*/ 

-- tables
-- Table: OrdenEsp
CREATE TABLE OrdenEsp (
    ID int NOT NULL,
    IDOrden int NOT NULL,
    IDProducto int NOT NULL,
    Cantidad int NOT NULL,
    CONSTRAINT OrdenEsp_pk PRIMARY KEY (ID)
);

-- Table: Ordenes
CREATE TABLE Ordenes (
    ID int NOT NULL,
    -- IDUsuario BIGINT NOT NULL,
    IDUsuario int NOT NULL,
    Fecha date NOT NULL,
    EstadoEntrega bit NOT NULL,
    CONSTRAINT Ordenes_pk PRIMARY KEY (ID)
);

-- Table: Productos
CREATE TABLE Productos (
    ID int NOT NULL,
    Nombre varchar(50) NOT NULL,
    Stock int NOT NULL,
    PrecioUnitario int NOT NULL,
    Imagen blob NOT NULL,
    CONSTRAINT Productos_pk PRIMARY KEY (ID)
);

-- Table: Usuarios
CREATE TABLE Usuarios (
    ID int  NOT NULL,
	-- ID BIGINT NOT NULL,
    Nombre varchar(50) NOT NULL,
    Apellido1 varchar(50) NOT NULL,
    Apellido2 varchar(50) NOT NULL,
    -- Lugar varchar(50) NOT NULL,
    Contrasena varchar(128) NOT NULL,
    Descuento int NOT NULL,
    Correo varchar(50) NOT NULL,
    CONSTRAINT Usuarios_pk PRIMARY KEY (ID)
);
-- nombre, ap1, ap2, pwd, desc, correo 
 
-- foreign keys
-- Reference: OrdenEsp_Ordenes (table: OrdenEsp)
ALTER TABLE OrdenEsp ADD CONSTRAINT OrdenEsp_Ordenes FOREIGN KEY OrdenEsp_Ordenes (IDOrden)
    REFERENCES Ordenes (ID);

-- Reference: OrdenEsp_Productos (table: OrdenEsp)
ALTER TABLE OrdenEsp ADD CONSTRAINT OrdenEsp_Productos FOREIGN KEY OrdenEsp_Productos (IDProducto)
    REFERENCES Productos (ID);

-- Reference: Ordenes_Usuarios (table: Ordenes)
ALTER TABLE Ordenes ADD CONSTRAINT Ordenes_Usuarios FOREIGN KEY Ordenes_Usuarios (IDUsuario)
    REFERENCES Usuarios (ID);

-- End of file.





/*
insert into Usuarios (ID, Nombre, Lugar, Contrasena, Descuento, Correo, Apellido1, Apellido2) values (423012246, 'Dud', '68482 Gale Center', 'j2vWUJkUh4', 51, 'dreyburn0@discuz.net', 'Keddie', 'Reyburn');
insert into Usuarios (ID, Nombre, Lugar, Contrasena, Descuento, Correo, Apellido1, Apellido2) values (581530492, 'Beniamino', '96433 Independence Avenue', 'KclnBXsbm', 43, 'bwollard1@bigcartel.com', 'Hearnaman', 'Wollard');
insert into Usuarios (ID, Nombre, Lugar, Contrasena, Descuento, Correo, Apellido1, Apellido2) values (716151168, 'Vern', '3792 Corben Park', 'BknLvR', 2, 'vpaolucci2@berkeley.edu', 'Leggett', 'Paolucci');
insert into Usuarios (ID, Nombre, Lugar, Contrasena, Descuento, Correo, Apellido1, Apellido2) values (146912540, 'Doro', '466 Bonner Way', 'p5cmGD0Kk', 56, 'dsphinxe3@1688.com', 'Bane', 'Sphinxe');
insert into Usuarios (ID, Nombre, Lugar, Contrasena, Descuento, Correo, Apellido1, Apellido2) values (145428400, 'Eadie', '36 Comanche Plaza', 'I4JjnvwZ0', 93, 'ecappel4@google.ru', 'Mattocks', 'Cappel');
*/

insert into Ordenes (ID, IDUsuario, Fecha, estadoEntrega) values (1, 716151168, '2020-06-16', true);
insert into Ordenes (ID, IDUsuario, Fecha, estadoEntrega) values (2, 145428400, '2020-04-28', true);
insert into Ordenes (ID, IDUsuario, Fecha, estadoEntrega) values (3, 146912540, '2020-03-27', false);
insert into Ordenes (ID, IDUsuario, Fecha, estadoEntrega) values (4, 145428400, '2020-01-19', true);
insert into Ordenes (ID, IDUsuario, Fecha, estadoEntrega) values (5, 423012246, '2020-08-04', true);
insert into Ordenes (ID, IDUsuario, Fecha, estadoEntrega) values (6, 423012246, '2020-05-04', false);


insert into Productos (ID, Nombre, Stock, PrecioUnitario, Imagen) values (1, 'Blouse / Shirt / Sweater', 20, 2427, 'http://dummyimage.com/239x120.jpg/cc0000/ffffff');
insert into Productos (ID, Nombre, Stock, PrecioUnitario, Imagen) values (2, 'Shrimp - Black Tiger 6 - 8', 34, 2526, 'http://dummyimage.com/156x125.png/ff4444/ffffff');
insert into Productos (ID, Nombre, Stock, PrecioUnitario, Imagen) values (3, 'Beef - Kobe Striploin', 0, 2574, 'http://dummyimage.com/100x109.png/ff4444/ffffff');
insert into Productos (ID, Nombre, Stock, PrecioUnitario, Imagen) values (4, 'Appetizer - Sausage Rolls', 15, 1655, 'http://dummyimage.com/190x163.png/dddddd/000000');
insert into Productos (ID, Nombre, Stock, PrecioUnitario, Imagen) values (5, 'Sauce - Chili', 6, 1849, 'http://dummyimage.com/225x151.jpg/ff4444/ffffff');
insert into Productos (ID, Nombre, Stock, PrecioUnitario, Imagen) values (6, 'Soup - Campbells Chicken', 31, 3305, 'http://dummyimage.com/167x127.bmp/dddddd/000000');

insert into OrdenEsp (ID, IDOrden, IDProducto, Cantidad) values (1, 2, 4, 8);
insert into OrdenEsp (ID, IDOrden, IDProducto, Cantidad) values (2, 3, 6, 5);
insert into OrdenEsp (ID, IDOrden, IDProducto, Cantidad) values (3, 6, 3, 7);
insert into OrdenEsp (ID, IDOrden, IDProducto, Cantidad) values (4, 6, 4, 8);
insert into OrdenEsp (ID, IDOrden, IDProducto, Cantidad) values (5, 3, 2, 3);
insert into OrdenEsp (ID, IDOrden, IDProducto, Cantidad) values (6, 6, 2, 7);
insert into OrdenEsp (ID, IDOrden, IDProducto, Cantidad) values (7, 2, 1, 2);
insert into OrdenEsp (ID, IDOrden, IDProducto, Cantidad) values (8, 3, 2, 2);
insert into OrdenEsp (ID, IDOrden, IDProducto, Cantidad) values (9, 2, 1, 9);
insert into OrdenEsp (ID, IDOrden, IDProducto, Cantidad) values (10, 3, 3, 3);
