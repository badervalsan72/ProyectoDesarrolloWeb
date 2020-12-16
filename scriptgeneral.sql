/* 
DROP TABLE OrdenEsp; 
DROP TABLE Productos; 
DROP TABLE Ordenes; 
DROP TABLE Usuarios;
DROP TABLE Tarjetas; 
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
    CorreoUsuario varchar(50) NOT NULL,
    Fecha date NOT NULL,
    EstadoEntrega int NOT NULL,
    PRIMARY KEY (ID)
);

-- Table: Productos
CREATE TABLE Productos (
    ID int NOT NULL,
    Nombre varchar(50) NOT NULL,
    Stock int NOT NULL,
    PrecioUnitario int NOT NULL,
    NombreImagen varchar(128) NOT NULL,
    Tipo bit NOT NULL, 
    PRIMARY KEY (ID)
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
    PRIMARY KEY (Correo) 
    
);

CREATE TABLE Tarjetas ( 
    ID bigint NOT NULL, 
    Titular varchar(128) NOT NULL, 
    FechaVencimiento date NOT NULL, 
    CSV int NOT NULL, 
    Saldo float NOT NULL, 
    PRIMARY KEY (ID)
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
ALTER TABLE Ordenes ADD CONSTRAINT Ordenes_Usuarios FOREIGN KEY Ordenes_Usuarios (CorreoUsuario)
    REFERENCES Usuarios (Correo);

 

insert into Productos (ID, Nombre, Stock, PrecioUnitario, NombreImagen, Tipo) values (1, 'Dona con glaseado azucarado', 20, 2500, 'img/works/1.png', 0); 
insert into Productos (ID, Nombre, Stock, PrecioUnitario, NombreImagen, Tipo) values (2, 'Pan Baguette', 34, 900, 'img/works/2.png', 1);
insert into Productos (ID, Nombre, Stock, PrecioUnitario, NombreImagen, Tipo) values (3, 'Queque de fiesta', 0, 3500, 'img/works/3.png', 0);
insert into Productos (ID, Nombre, Stock, PrecioUnitario, NombreImagen, Tipo) values (4, 'Tortillas caseras', 15, 2800, 'img/works/4.png', 1);
insert into Productos (ID, Nombre, Stock, PrecioUnitario, NombreImagen, Tipo) values (5, 'Tamal', 6, 4000, 'img/works/5.png', 1);
insert into Productos (ID, Nombre, Stock, PrecioUnitario, NombreImagen, Tipo) values (6, 'Tostada francesa', 31, 2200, 'img/works/6.png', 0);


insert into Tarjetas  (ID, Titular , FechaVencimiento, CSV, Saldo) values ('67627725926325998', 'Cinda Dowle', '2025-10-30', 357, 1053123.56);
insert into Tarjetas  (ID, Titular , FechaVencimiento, CSV, Saldo) values ('5108759029010189', 'Barnie Ruller', '2022-12-18', 5346, 7892641.0);
insert into Tarjetas  (ID, Titular , FechaVencimiento, CSV, Saldo) values ('201422954483536', 'Marita Redihalgh', '2024-10-16', 285, 7465041.14);
insert into Tarjetas  (ID, Titular , FechaVencimiento, CSV, Saldo) values ('3548400223695763', 'Maury Canada', '2024-11-15', 836, 8507536.0);
insert into Tarjetas  (ID, Titular , FechaVencimiento, CSV, Saldo) values ('6709982913823589', 'Simonette Ruddom', '2025-01-04', 2105, 2205799.22);
insert into Tarjetas  (ID, Titular , FechaVencimiento, CSV, Saldo) values ('201823864009529', 'Denna Ganford', '2024-09-23', 7408, 2757960.0);
insert into Tarjetas  (ID, Titular , FechaVencimiento, CSV, Saldo) values ('5108756274372744', 'Reynolds Nannizzi', '2024-01-27', 7439, 7445189.98);
insert into Tarjetas  (ID, Titular , FechaVencimiento, CSV, Saldo) values ('5260511971526207', 'Sloan MacRirie', '2023-06-15', 3923, 9107872.0);
insert into Tarjetas  (ID, Titular , FechaVencimiento, CSV, Saldo) values ('36021335551309', 'Farra Ludman', '2025-06-04', 8723, 3476256.94);
insert into Tarjetas  (ID, Titular , FechaVencimiento, CSV, Saldo) values ('3542669643315576', 'Marlo Spaunton', '2024-02-07', 8663, 2822477.49);
insert into Tarjetas  (ID, Titular , FechaVencimiento, CSV, Saldo) values ('3566150468465615', 'Opalina Cotes', '2024-06-15', 775, 7822775.31);
insert into Tarjetas  (ID, Titular , FechaVencimiento, CSV, Saldo) values ('3565088697335582', 'Reuven Farguhar', '2022-10-20', 8282, 5682760.33);
insert into Tarjetas  (ID, Titular , FechaVencimiento, CSV, Saldo) values ('3577484043223182', 'Dwayne Dymond', '2022-11-01', 9756, 7837467.85);
insert into Tarjetas  (ID, Titular , FechaVencimiento, CSV, Saldo) values ('337941533585542', 'Marget Smalman', '2023-11-15', 1349, 5864193.0);
insert into Tarjetas  (ID, Titular , FechaVencimiento, CSV, Saldo) values ('3545002219907369', 'Angelica Basketter', '2025-06-19', 463, 6607614.62);
insert into Tarjetas  (ID, Titular , FechaVencimiento, CSV, Saldo) values ('3546631554714417', 'Linda Dyett', '2023-04-26', 7380, 8168646.47);
insert into Tarjetas  (ID, Titular , FechaVencimiento, CSV, Saldo) values ('3556612795506397', 'Cookie Vossing', '2024-01-23', 7732, 4742523.0);
insert into Tarjetas  (ID, Titular , FechaVencimiento, CSV, Saldo) values ('676799462779597628', 'Jamison Giacomoni', '2025-02-14', 5384, 5389410.67);
insert into Tarjetas  (ID, Titular , FechaVencimiento, CSV, Saldo) values ('3546580621143201', 'Marjorie Alldis', '2024-03-27', 4783, 4584450.0);
insert into Tarjetas  (ID, Titular , FechaVencimiento, CSV, Saldo) values ('4041371421595', 'Gertrudis Puttock', '2024-03-14', 8273, 4960720.76);
insert into Tarjetas  (ID, Titular , FechaVencimiento, CSV, Saldo) values ('5523491994535993', 'Krysta Patrick', '2024-09-04', 8763, 2815290.0);
insert into Tarjetas  (ID, Titular , FechaVencimiento, CSV, Saldo) values ('5585376541586356', 'Lorenza Woolfoot', '2023-09-08', 5773, 7854968.68);
insert into Tarjetas  (ID, Titular , FechaVencimiento, CSV, Saldo) values ('3536295291606716', 'Pip Eskrick', '2025-06-25', 6867, 9917880.0);
insert into Tarjetas  (ID, Titular , FechaVencimiento, CSV, Saldo) values ('36822518455071', 'Lissy Ridde', '2024-02-20', 5525, 9243343.0);
insert into Tarjetas  (ID, Titular , FechaVencimiento, CSV, Saldo) values ('5602230989739622', 'Austen Currey', '2025-03-30', 4452, 8356598.0);
insert into Tarjetas  (ID, Titular , FechaVencimiento, CSV, Saldo) values ('374359257484848', 'Brittan Setchfield', '2022-10-25', 8432, 4868385.0);
insert into Tarjetas  (ID, Titular , FechaVencimiento, CSV, Saldo) values ('3554667700124712', 'Barby Ickowicz', '2025-03-02', 1058, 4784114.66);
insert into Tarjetas  (ID, Titular , FechaVencimiento, CSV, Saldo) values ('3554348464880936', 'Nicholle Mather', '2023-04-05', 3910, 7510919.76);
insert into Tarjetas  (ID, Titular , FechaVencimiento, CSV, Saldo) values ('5602228154017188', 'Paulina Deshon', '2024-02-26', 4430, 9355565.0);
insert into Tarjetas  (ID, Titular , FechaVencimiento, CSV, Saldo) values ('3546305622248910', 'Marshal Peedell', '2023-08-02', 1260, 950689.02);
insert into Tarjetas  (ID, Titular , FechaVencimiento, CSV, Saldo) values ('490519904687522102', 'Kylila Gurton', '2023-01-26', 961, 6707738.14);