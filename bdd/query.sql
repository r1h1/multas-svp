-- inicio del script


-- creamos una base de datos
CREATE DATABASE svp_software_multas;


-- usamos esa base de datos
USE svp_software_multas;


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



-- procedimiento para loguearse al sistema
DELIMITER //
CREATE PROCEDURE logueoSistemaMultasSvp(
	IN pusuarioRegistrado varchar(10),
    IN pcuiNit varchar(14)
)
BEGIN
	SELECT rolUsuarioRegistrado FROM `svp_usuarios` WHERE usuarioRegistrado = pusuarioRegistrado AND cuiNit = pcuiNit;
END //
DELIMITER ;




-- procedimiento para mostrar todas las multas en la tabla svp_multas_registradas
DELIMITER //
CREATE PROCEDURE verTodasLasMultas()
BEGIN
	SELECT * FROM svp_multas_registradas;
END //
DELIMITER ;



-- procedimiento para mostrar todas las multas registradas
DELIMITER //
CREATE PROCEDURE verTodasLasMultasRegistradas()
BEGIN
	SELECT COUNT(*) AS TOTAL_MULTAS_REGISTRADAS FROM svp_multas_registradas;
END //
DELIMITER ;




-- procedimiento para mostrar todas las multas por placa
DELIMITER //
CREATE PROCEDURE verMultasPorPlaca(
	IN ptipoPlaca varchar(5),
    IN pnumeroPlaca varchar(10)
)
BEGIN
	SELECT * FROM svp_multas_registradas WHERE tipoPlaca = ptipoPlaca AND numeroPlaca = pnumeroPlaca ORDER BY fechaMulta ASC;
END //
DELIMITER ;



-- procedimiento para mostrar solo multas pendientes de pago
DELIMITER //
CREATE PROCEDURE verTodasLasMultasPendientesPago()
BEGIN
	SELECT * FROM svp_multas_registradas WHERE estadoDeLaMulta = 'PENDIENTE';
END //
DELIMITER ;





-- procedimiento para mostrar solo multas pendientes de pago por placa
DELIMITER //
CREATE PROCEDURE verTodasLasMultasPendientesPagoXPlaca(
	IN ptipoPlaca varchar(5),
    IN pnumeroPlaca varchar(10)
)
BEGIN
	SELECT * FROM svp_multas_registradas WHERE tipoPlaca = ptipoPlaca AND numeroPlaca = pnumeroPlaca AND estadoDeLaMulta = 'PENDIENTE';
END //
DELIMITER ;




-- procedimiento para mostrar solo multas pendientes de pago por fechas
DELIMITER //
CREATE PROCEDURE verTodasLasMultasPendientesPagoXFecha(
    IN pfechaMultaInicio varchar(20),
    IN pfechaMultaFin varchar(20)
)
BEGIN
	SELECT * FROM svp_multas_registradas WHERE fechaMulta BETWEEN pfechaMultaInicio AND pfechaMultaFin AND estadoDeLaMulta = 'PENDIENTE';
END //
DELIMITER ;



-- procedimiento para mostrar el total de multas pendientes de pago
DELIMITER //
CREATE PROCEDURE totalMultasPendientesPago()
BEGIN
	SELECT COUNT(*) AS TOTAL_MULTAS_PENDIENTES_PAGO FROM svp_multas_registradas WHERE estadoDeLaMulta = 'PENDIENTE';
END //
DELIMITER ;




-- procedimiento para mostrar solo multas pagadas
DELIMITER //
CREATE PROCEDURE verTodasLasMultasPagadas()
BEGIN
	SELECT * FROM svp_multas_registradas WHERE estadoDeLaMulta = 'PAGADO';
END //
DELIMITER ;



-- procedimiento para mostrar solo multas pagadas por placa
DELIMITER //
CREATE PROCEDURE verTodasLasMultasPagadasXPlaca()
BEGIN
	SELECT * FROM svp_multas_registradas WHERE tipoPlaca = ptipoPlaca AND numeroPlaca = pnumeroPlaca AND estadoDeLaMulta = 'PAGADO';
END //
DELIMITER ;



-- procedimiento para mostrar solo multas pagadas por fechas
DELIMITER //
CREATE PROCEDURE verTodasLasMultasPagadasXFecha(
	IN pfechaMultaInicio varchar(20),
    IN pfechaMultaFin varchar(20)
)
BEGIN
	SELECT * FROM svp_multas_registradas WHERE fechaMulta BETWEEN pfechaMultaInicio AND pfechaMultaFin AND estadoDeLaMulta = 'PAGADO';
END //
DELIMITER ;



-- procedimiento para mostrar el total de multas pagadas
DELIMITER //
CREATE PROCEDURE totalDeMultasPagadas()
BEGIN
	SELECT COUNT(*) AS TOTAL_MULTAS_PAGADAS FROM svp_multas_registradas
	WHERE estadoDeLaMulta = 'PAGADO';
END //
DELIMITER ;



-- procedimiento para mostrar el total de dinero recaudado
DELIMITER //
CREATE PROCEDURE totalDeDineroRecaudado()
BEGIN
	SELECT SUM(montoInfraccion) AS TOTAL_DINERO_RECAUDADO FROM svp_multas_registradas WHERE estadoDeLaMulta = 'PAGADO';
END //
DELIMITER ;



-- procedimiento para pagar multas pendientes de pago
DELIMITER //
CREATE PROCEDURE pagarUnaMulta(
	IN pidMulta int
)
BEGIN
	UPDATE `svp_multas_registradas` SET `estadoDeLaMulta`='PAGADO' WHERE idMulta = pidMulta;
END //
DELIMITER ;



-- procedimiento para exonerar multas
DELIMITER //
CREATE PROCEDURE exonerarUnaMulta(
	IN pidMulta int
)
BEGIN
	UPDATE `svp_multas_registradas` SET `estadoDeLaMulta`='EXONERADO' WHERE idMulta = pidMulta;
END //
DELIMITER ;




-- procedimiento para insertar las multas en la tabla svp_multas_registradas
DELIMITER //
CREATE PROCEDURE insertarMultas(
    IN ptipoPlaca varchar(5),
    IN pnumeroPlaca varchar(10),
    IN pmarca varchar(20),
    IN pcolor varchar(20),
    IN plugarInfraccion varchar(50),
    IN pmontoInfraccion numeric(10,2),
    IN pmontoConDescuento numeric(10,2),
    IN pfotografiaRuta varchar(100),
    IN pfechaMulta varchar(20),
    IN pmesMulta varchar(5),
    IN pestadoDeLaMulta varchar(10)
)
BEGIN
	INSERT INTO `svp_multas_registradas`(`tipoPlaca`, `numeroPlaca`, `marca`, `color`, `lugarInfraccion`, `montoInfraccion`, `montoConDescuento`, `fotografiaRuta`, `fechaMulta`, `mesMulta`, `estadoDeLaMulta`) VALUES (ptipoPlaca,pnumeroPlaca,pmarca,pcolor,plugarInfraccion,pmontoInfraccion,pmontoConDescuento,pfotografiaRuta,pfechaMulta,pmesmulta,pestadoDeLaMulta);
END //
DELIMITER ;



-- procedimiento para borrar una multa en la tabla svp_multas_registradas
DELIMITER //
CREATE PROCEDURE eliminarMultas(
    IN pidMulta INT
)
BEGIN
	DELETE FROM `svp_multas_registradas` WHERE idMulta = pidMulta;
END //
DELIMITER ;



-- procedimiento para insertar un usuario en el sistema
DELIMITER //
CREATE PROCEDURE insertarUsuarioSistema
(
   IN pnombreCompleto varchar(100),
   IN pcuiNit varchar(14),
   IN pusuarioRegistrado varchar(10),
   IN prolUsuarioRegistrado varchar(10)
)
BEGIN
	INSERT INTO `svp_usuarios`(`nombreCompleto`, `cuiNit`, `usuarioRegistrado`, `rolUsuarioRegistrado`) 
	VALUES (pnombreCompleto,pcuiNit,pusuarioRegistrado,prolUsuarioRegistrado);
END //
DELIMITER ;



-- fin del script




