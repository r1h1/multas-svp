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
    idTipoMultaFk int not null,
    fechaMulta varchar(20) not null,
    mesMulta varchar(5) not null,
    estadoDeLaMulta varchar(10) not null,
    numeroComprobantePago varchar(100)
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



-- creamos tabla para los tipos de multas
create table svp_tipos_de_multas
(
	idTipoMulta int primary key not null AUTO_INCREMENT,
    nombreTipoMulta varchar(250) not null,
    montoInfraccion numeric(10,2) not null,
    montoConDescuento numeric(10,2) not null
);

INSERT INTO `svp_tipos_de_multas`(`nombreTipoMulta`, `montoInfraccion`, `montoConDescuento`) 
VALUES ('No tener el equipamiento básico a las bicicletas y motobicictetas.','100','0.00');

INSERT INTO `svp_tipos_de_multas`(`nombreTipoMulta`, `montoInfraccion`, `montoConDescuento`) 
VALUES ('No respetar las señales de tránsito.','100','0.00');

INSERT INTO `svp_tipos_de_multas`(`nombreTipoMulta`, `montoInfraccion`, `montoConDescuento`) 
VALUES ('Circular en arcén sin justificación.','100','0.00');

INSERT INTO `svp_tipos_de_multas`(`nombreTipoMulta`, `montoInfraccion`, `montoConDescuento`) 
VALUES ('No utilizar las señales al virar, cambiar de sentido, cambiar de carril, desacelerar y retroceder.','100','0.00');

INSERT INTO `svp_tipos_de_multas`(`nombreTipoMulta`, `montoInfraccion`, `montoConDescuento`) 
VALUES ('Conducir con aparatos receptores o reproductores de sonido conectados a audífonos.','100','0.00');

INSERT INTO `svp_tipos_de_multas`(`nombreTipoMulta`, `montoInfraccion`, `montoConDescuento`) 
VALUES ('Manejar en contra de vía.','200','0.00');

INSERT INTO `svp_tipos_de_multas`(`nombreTipoMulta`, `montoInfraccion`, `montoConDescuento`) 
VALUES ('Manejar en estado de ebriedad y/o sustancias estupefacientes.','200','0.00');

INSERT INTO `svp_tipos_de_multas`(`nombreTipoMulta`, `montoInfraccion`, `montoConDescuento`) 
VALUES ('Irrespetar el turno en una fila de espera.','200','0.00');

INSERT INTO `svp_tipos_de_multas`(`nombreTipoMulta`, `montoInfraccion`, `montoConDescuento`) 
VALUES ('Cambiar de un carril a otro, sin respetar la prioridad de los vehículos.','200','0.00');

INSERT INTO `svp_tipos_de_multas`(`nombreTipoMulta`, `montoInfraccion`, `montoConDescuento`) 
VALUES ('Rebasar por la derecha.','200','0.00');

INSERT INTO `svp_tipos_de_multas`(`nombreTipoMulta`, `montoInfraccion`, `montoConDescuento`) 
VALUES ('No usar luces de emergencia cuando sea necesario.','200','0.00');

INSERT INTO `svp_tipos_de_multas`(`nombreTipoMulta`, `montoInfraccion`, `montoConDescuento`) 
VALUES ('Irrespetar el orden jerárquico entre las señales de tránsito.','200','0.00');

INSERT INTO `svp_tipos_de_multas`(`nombreTipoMulta`, `montoInfraccion`, `montoConDescuento`) 
VALUES ('Conducir sin cinturones de seguridad.','200','0.00');

INSERT INTO `svp_tipos_de_multas`(`nombreTipoMulta`, `montoInfraccion`, `montoConDescuento`) 
VALUES ('Remolcar a otro vehículo con medios prohibidos.','200','0.00');

INSERT INTO `svp_tipos_de_multas`(`nombreTipoMulta`, `montoInfraccion`, `montoConDescuento`) 
VALUES ('Conducir con licencia vencida.','300','0.00');

INSERT INTO `svp_tipos_de_multas`(`nombreTipoMulta`, `montoInfraccion`, `montoConDescuento`) 
VALUES ('Tirar o lanzar basura a otros vehículos o a la vía pública desde otro auto en movimiento.','300','0.00');

INSERT INTO `svp_tipos_de_multas`(`nombreTipoMulta`, `montoInfraccion`, `montoConDescuento`) 
VALUES ('Manejar con un vehículo sin escapa o sin silenciador.','300','0.00');

INSERT INTO `svp_tipos_de_multas`(`nombreTipoMulta`, `montoInfraccion`, `montoConDescuento`) 
VALUES ('Conducir produciendo sonidos o ruidos estridentes exagerados.','300','0.00');

INSERT INTO `svp_tipos_de_multas`(`nombreTipoMulta`, `montoInfraccion`, `montoConDescuento`) 
VALUES ('Usar sirenas o bocinas propias de los vehículos de emergencia.','300','0.00');

INSERT INTO `svp_tipos_de_multas`(`nombreTipoMulta`, `montoInfraccion`, `montoConDescuento`) 
VALUES ('Conducir sin licencia.','400','0.00');

INSERT INTO `svp_tipos_de_multas`(`nombreTipoMulta`, `montoInfraccion`, `montoConDescuento`) 
VALUES ('Circular utilizando luces exclusivas para vehículos de emergencia.','400','0.00');

INSERT INTO `svp_tipos_de_multas`(`nombreTipoMulta`, `montoInfraccion`, `montoConDescuento`) 
VALUES ('Rebasar a otras unidades de transporte público y pararse justo frente a ellas.','400','0.00');

INSERT INTO `svp_tipos_de_multas`(`nombreTipoMulta`, `montoInfraccion`, `montoConDescuento`) 
VALUES ('No ceder el paso a escolares dentro de la zona perimetral y horarios establecidos.','400','0.00');

INSERT INTO `svp_tipos_de_multas`(`nombreTipoMulta`, `montoInfraccion`, `montoConDescuento`) 
VALUES ('Manejar un auto con lado frontal sin iluminación.','400','0.00');

INSERT INTO `svp_tipos_de_multas`(`nombreTipoMulta`, `montoInfraccion`, `montoConDescuento`) 
VALUES ('Instalar objetos semejantes a señales de tránsito que pueden confundir o inciten a comportamientos prohibidos.','400','0.00');

INSERT INTO `svp_tipos_de_multas`(`nombreTipoMulta`, `montoInfraccion`, `montoConDescuento`) 
VALUES ('Fingir una falla mecánica y estacionarse en lugares indebidos.','400','0.00');

INSERT INTO `svp_tipos_de_multas`(`nombreTipoMulta`, `montoInfraccion`, `montoConDescuento`) 
VALUES ('Retroceder en autopistas y vías rápidas, representando un peligro para los demás usuarios.','400','0.00');

INSERT INTO `svp_tipos_de_multas`(`nombreTipoMulta`, `montoInfraccion`, `montoConDescuento`) 
VALUES ('Tirar o abandonar en la vía pública cualquier objeto que entorpezca la circulación.','400','0.00');

INSERT INTO `svp_tipos_de_multas`(`nombreTipoMulta`, `montoInfraccion`, `montoConDescuento`) 
VALUES ('Efectuar reparaciones que no sean de emergencia en vía pública.','400','0.00');

INSERT INTO `svp_tipos_de_multas`(`nombreTipoMulta`, `montoInfraccion`, `montoConDescuento`) 
VALUES ('A motoristas y conductores de motobicicletas que transiten en las aceras.','500','0.00');

INSERT INTO `svp_tipos_de_multas`(`nombreTipoMulta`, `montoInfraccion`, `montoConDescuento`) 
VALUES ('A los motoristas y conductores de motobicicletas que conduzcan entre carriles, zigzagueen.','500','0.00');

INSERT INTO `svp_tipos_de_multas`(`nombreTipoMulta`, `montoInfraccion`, `montoConDescuento`) 
VALUES ('Alteración de señales de tránsito a conveniencia.','1000','0.00');

INSERT INTO `svp_tipos_de_multas`(`nombreTipoMulta`, `montoInfraccion`, `montoConDescuento`) 
VALUES ('Ofender, agredir o atentar contra un agente de tránsito.','1000','0.00');

INSERT INTO `svp_tipos_de_multas`(`nombreTipoMulta`, `montoInfraccion`, `montoConDescuento`) 
VALUES ('Organizar carreras o alterar el orden público vial.','5000','0.00');

INSERT INTO `svp_tipos_de_multas`(`nombreTipoMulta`, `montoInfraccion`, `montoConDescuento`) 
VALUES ('Dañar la vía pública.','25000','0.00');




-- creamos tabla log para ingreso del sistema
-- SE BORRA CADA DIA, SOLO ES PARA BITÁCORA
create table svp_log_ingreso_sistema
(
	idIngresoSistema int primary key not null AUTO_INCREMENT,
    usuarioRegistrado varchar(10) not null,
    fechaIngreso varchar(20) not null,
    horaIngreso varchar(20) not null,
    soIngreso varchar(25) not null,
    ipIngreso varchar(50) not null
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




-- procedimiento para mostrar todas las multas registradas
DELIMITER //
CREATE PROCEDURE verTodasLasMultasRegistradas()
BEGIN
	SELECT COUNT(*) AS TOTAL_MULTAS_REGISTRADAS FROM svp_multas_registradas;
END //
DELIMITER ;


-- procedimiento para mostrar todos los tipos de multas
DELIMITER //
CREATE PROCEDURE verTodosLosTiposDeMultas()
BEGIN
	SELECT * FROM svp_tipos_de_multas;
END //
DELIMITER ;



-- procedimiento para ver el monto de las multas registradas
DELIMITER //
CREATE PROCEDURE verMontoDeLasMultasRegistradas( 
    IN pIdTipoMulta int 
) 
BEGIN 
    SELECT `montoInfraccion`, `montoConDescuento` FROM `svp_tipos_de_multas` WHERE idTipoMulta = pIdTipoMulta; 
END //
DELIMITER ;



-- procedimiento para mostrar todas las multas por placa
DELIMITER //
CREATE PROCEDURE verMultasPorPlaca(
	IN ptipoPlaca varchar(5),
    IN pnumeroPlaca varchar(10)
)
BEGIN
	    SELECT idMulta,tipoPlaca,numeroPlaca,marca,color,lugarInfraccion,nombreTipoMulta,montoInfraccion,montoConDescuento,
        fechaMulta,mesMulta,estadoDeLaMulta,numeroComprobantePago FROM `svp_multas_registradas` INNER JOIN svp_tipos_de_multas ON idTipoMultaFk = idTipoMulta
        WHERE tipoPlaca = ptipoPlaca AND numeroPlaca = pnumeroPlaca AND estadoDeLaMulta = 'PENDIENTE' ORDER BY fechaMulta ASC;
END //
DELIMITER ;




-- procedimiento para mostrar solo multas pendientes de pago
DELIMITER //
CREATE PROCEDURE verTodasLasMultasPendientesPago()
BEGIN
	SELECT idMulta,tipoPlaca,numeroPlaca,marca,color,lugarInfraccion,nombreTipoMulta,montoInfraccion,montoConDescuento,
        fechaMulta,mesMulta,estadoDeLaMulta,numeroComprobantePago FROM svp_multas_registradas INNER JOIN svp_tipos_de_multas 
        ON idTipoMultaFk = idTipoMulta WHERE estadoDeLaMulta = 'PENDIENTE';
END //
DELIMITER ;



-- procedimiento para mostrar solo multas pendientes de pago por placa
DELIMITER //
CREATE PROCEDURE verTodasLasMultasPendientesPagoXPlaca(
	IN ptipoPlaca varchar(5),
    IN pnumeroPlaca varchar(10)
)
BEGIN
	SELECT idMulta,tipoPlaca,numeroPlaca,marca,color,lugarInfraccion,nombreTipoMulta,montoInfraccion,montoConDescuento,
        fechaMulta,mesMulta,estadoDeLaMulta,numeroComprobantePago FROM `svp_multas_registradas` INNER JOIN svp_tipos_de_multas ON idTipoMultaFk = idTipoMulta
        WHERE tipoPlaca = ptipoPlaca AND numeroPlaca = pnumeroPlaca AND estadoDeLaMulta = 'PENDIENTE';
END //
DELIMITER ;




-- procedimiento para mostrar solo multas pendientes de pago por fechas
DELIMITER //
CREATE PROCEDURE verTodasLasMultasPendientesPagoXFecha(
    IN pfechaMultaInicio varchar(20),
    IN pfechaMultaFin varchar(20)
)
BEGIN
	SELECT idMulta,tipoPlaca,numeroPlaca,marca,color,lugarInfraccion,nombreTipoMulta,montoInfraccion,montoConDescuento,
        fechaMulta,mesMulta,estadoDeLaMulta,numeroComprobantePago FROM `svp_multas_registradas` INNER JOIN svp_tipos_de_multas ON idTipoMultaFk = idTipoMulta
        WHERE fechaMulta BETWEEN pfechaMultaInicio AND pfechaMultaFin AND estadoDeLaMulta = 'PENDIENTE';
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
	SELECT idMulta,tipoPlaca,numeroPlaca,marca,color,lugarInfraccion,nombreTipoMulta,montoInfraccion,montoConDescuento, 
    fechaMulta,mesMulta,estadoDeLaMulta,numeroComprobantePago FROM svp_multas_registradas 
    INNER JOIN svp_tipos_de_multas ON idTipoMultaFk = idTipoMulta WHERE estadoDeLaMulta = 'PAGADO' OR estadoDeLaMulta = 'EXONERADO';
END //
DELIMITER ;



-- procedimiento para mostrar solo multas pagadas por placa
DELIMITER //
CREATE PROCEDURE verTodasLasMultasPagadasXPlaca(
    IN ptipoPlaca varchar(5),
    IN pnumeroPlaca varchar(10)
)
BEGIN
	    SELECT idMulta,tipoPlaca,numeroPlaca,marca,color,lugarInfraccion,nombreTipoMulta,montoInfraccion,montoConDescuento,
        fechaMulta,mesMulta,estadoDeLaMulta,numeroComprobantePago FROM svp_multas_registradas INNER JOIN svp_tipos_de_multas 
        ON idTipoMultaFk = idTipoMulta WHERE tipoPlaca = ptipoPlaca AND numeroPlaca = pnumeroPlaca AND estadoDeLaMulta = 'PAGADO'
        OR estadoDeLaMulta = 'EXONERADO';
END //
DELIMITER ;



-- procedimiento para mostrar solo multas pagadas por fechas
DELIMITER //
CREATE PROCEDURE verTodasLasMultasPagadasXFecha(
	IN pfechaMultaInicio varchar(20),
    IN pfechaMultaFin varchar(20)
)
BEGIN
	SELECT idMulta,tipoPlaca,numeroPlaca,marca,color,lugarInfraccion,nombreTipoMulta,montoInfraccion,montoConDescuento,
        fechaMulta,mesMulta,estadoDeLaMulta,numeroComprobantePago FROM svp_multas_registradas INNER JOIN svp_tipos_de_multas 
        ON idTipoMultaFk = idTipoMulta WHERE fechaMulta BETWEEN pfechaMultaInicio AND pfechaMultaFin AND estadoDeLaMulta = 'PAGADO'
        OR estadoDeLaMulta = 'EXONERADO';
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
	SELECT sum(montoInfraccion - montoConDescuento) AS TOTAL_DINERO_RECAUDADO FROM svp_tipos_de_multas INNER JOIN svp_multas_registradas ON idTipoMultaFk = idTipoMulta WHERE estadoDeLaMulta = 'PAGADO';
END //
DELIMITER ;



-- procedimiento para pagar multas pendientes de pago
DELIMITER //
CREATE PROCEDURE pagarUnaMulta(
	IN pidMulta int,
    IN pnumeroComprobantePago varchar(100)
)
BEGIN
	UPDATE `svp_multas_registradas` SET `estadoDeLaMulta`='PAGADO', numeroComprobantePago = pnumeroComprobantePago WHERE idMulta = pidMulta;
END //
DELIMITER ;


-- procedimiento para exonerar multas
DELIMITER //
CREATE PROCEDURE exonerarUnaMulta(
	IN pidMulta int
)
BEGIN
	UPDATE `svp_multas_registradas` SET `estadoDeLaMulta`='EXONERADO', numeroComprobantePago = 'EXONERADO' WHERE idMulta = pidMulta;
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



-- procedimiento para insertar log de cada acceso al sistema
DELIMITER //
CREATE PROCEDURE insertarLogIngresoSistema
(
   IN pusuarioRegistrado varchar(10),
   IN pfechaIngreso varchar(20),
   IN phoraIngreso varchar(20),
   IN psoIngreso varchar(25),
   IN pipIngreso varchar(50)
)
BEGIN
	INSERT INTO `svp_log_ingreso_sistema`(`usuarioRegistrado`, `fechaIngreso`, `horaIngreso`, `soIngreso`, `ipIngreso`)
    VALUES (pusuarioRegistrado,pfechaIngreso,phoraIngreso,psoIngreso,pipIngreso);
END //
DELIMITER ;



-- procedimiento para insertar log de cada consulta de un cliente
DELIMITER //
CREATE PROCEDURE insertarLogConsultaCliente
(
    IN pnumeroPlacaCompleto varchar(15),
    IN pfechaIngreso varchar(20),
    IN phoraIngreso varchar(20),
    IN psoIngreso varchar(25),
    IN pipIngreso varchar(50)
)
BEGIN
	INSERT INTO `svp_log_consulta_clientes`(`numeroPlacaCompleto`, `fechaIngreso`, `horaIngreso`, `soIngreso`, `ipIngreso`) 
    VALUES (pnumeroPlacaCompleto,pfechaIngreso,phoraIngreso,psoIngreso,pipIngreso);
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
    IN pidTipoMultaFk INT,
    IN pfechaMulta varchar(20),
    IN pmesMulta varchar(5),
    IN pestadoDeLaMulta varchar(10),
    IN pnumeroComprobantePago varchar(100)
)
BEGIN
	INSERT INTO `svp_multas_registradas`(`tipoPlaca`, `numeroPlaca`, `marca`, `color`, `lugarInfraccion`, `idTipoMultaFk`, `fechaMulta`, `mesMulta`, `estadoDeLaMulta`,`numeroComprobantePago`) VALUES (ptipoPlaca,pnumeroPlaca,pmarca,pcolor,plugarInfraccion,pidTipoMultaFk,pfechaMulta,pmesmulta,pestadoDeLaMulta,pnumeroComprobantePago);
END //
DELIMITER ;




-- procedimiento para mostrar el monto de infracción y con descuento al seleccionar
-- un tipo de multa en un select
DELIMITER //
CREATE PROCEDURE verMontoInfraccionYDescuento(
    IN pidTipoMulta int
)
BEGIN
	SELECT idTipoMulta,nombreTipoMulta,montoInfraccion,montoConDescuento FROM svp_tipos_de_multas WHERE idTipoMulta = pidTipoMulta;
END //
DELIMITER ;



-- procedimiento para obtener el total a pagar cuando hay más de una multa
DELIMITER //
CREATE OR REPLACE PROCEDURE obtenerTotalAPagarPorMultasXPlaca(
    IN ptipoPlaca varchar(10),
    IN pnumeroPlaca varchar(12)
)
BEGIN
	SELECT tipoPlaca,numeroPlaca,nombreTipoMulta,sum(montoInfraccion - montoConDescuento) as total_a_pagar_multas 
    FROM `svp_multas_registradas` INNER JOIN svp_tipos_de_multas ON idTipoMultaFk = idTipoMulta 
    WHERE tipoPlaca = ptipoPlaca AND numeroPlaca = pnumeroPlaca AND estadoDeLaMulta = 'PENDIENTE' ORDER BY fechaMulta ASC;
END //
DELIMITER ;



-- fin del script


