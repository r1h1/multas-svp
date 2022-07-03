-- creamos una base de datos
create database svp_software_multas;

-- usamos esa base de datos
use svp_software_multas;

-- creamos tabla para las multas
create table svp_multas_registradas
(
	idMulta int primary key not null AUTO_INCREMENT,
    tipoPlaca varchar(5) not null,
    numeroPlaca varchar(10) not null,
    marca varchar(20) not null,
    color varchar(20) not null,
    lugarInfraccion varchar(50) not null,
    montoInfraccion numeric(10,2),
    montoConDescuento numeric(10,2),
    fotografiaRuta varchar(100),
    fechaMulta varchar(20) not null,
    mesMulta varchar(5) not null,
    estadoDeLaMulta varchar(10) not null
);

-- creamos tabla para los usuarios
create table svp_usuarios
(
	idUsuario int primary key not null AUTO_INCREMENT,
    nombreCompleto varchar(100) not null,
    cuiNit varchar(14) not null,
    usuarioRegistrado varchar(10) not null,
    rolUsuarioRegistrado varchar(10) not null
);

-- creamos tabla log para ingreso del sistema
-- SE BORRA CADA DIA, SOLO ES PARA BITÁCORA
create table svp_log_ingreso_sistema
(
	idIngresoSistema int primary key not null AUTO_INCREMENT,
    idFkUsuario int not null,
    fechaIngreso varchar(20) not null,
    horaIngreso varchar(20) not null,
    soIngreso varchar(25) not null,
    ipIngreso varchar(50) not null,
    FOREIGN KEY (idFkUsuario) REFERENCES svp_usuarios(idUsuario)
);

-- creamos tabla log para consulta de clientes
-- SE BORRA CADA DIA, SOLO ES PARA BITÁCORA
create table svp_log_consulta_clientes
(
	idConsultaCliente int PRIMARY KEY not null AUTO_INCREMENT,
    numeroPlacaCompleto varchar(15) not null,
    fechaIngreso varchar(20) not null,
    horaIngreso varchar(20) not null,
    soIngreso varchar(25) not null,
    ipIngreso varchar(50) not null
);

-- procedimiento para mostrar todas las multas
DELIMITER //
CREATE PROCEDURE verTodasLasMultas()
BEGIN
	SELECT * FROM svp_multas_registradas;
END //
DELIMITER ;

CREATE PROCEDURE verTodasLasMultas() BEGIN SELECT * FROM svp_multas_registradas; END;