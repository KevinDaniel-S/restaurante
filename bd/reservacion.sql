DROP DATABASE IF EXISTS reservacion;

CREATE DATABASE reservacion;
USE reservacion;

/*TABLA USUARIO*/
CREATE TABLE usuarios (
		idusuario INT NOT NULL AUTO_INCREMENT,
		nombre_us CHAR (50) NOT NULL UNIQUE,
		password_us CHAR (50) NOT NULL,
                puesto_us INT DEFAULT 0,
		PRIMARY KEY (idusuario)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*TABLA PAQUETES*/
CREATE TABLE paquetes (
		idpaquete INT NOT NULL AUTO_INCREMENT,
		nombre_paq CHAR (50) NOT NULL,
		descripcion_paq CHAR (50) NOT NULL,
		costo_paq INT NOT NULL,
		PRIMARY KEY (idpaquete)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*TABLA RESERVACION*/
CREATE TABLE reservacion (
		idreservacion INT NOT NULL AUTO_INCREMENT,
		fecha_res DATE NOT NULL,
                hora_res TIME NOT NULL,
		cantidad_res INT NOT NULL,
		idusuario INT NOT NULL,
                idpaquete INT NOT NULL,
		PRIMARY KEY (idreservacion),
      CONSTRAINT idusuario_fk FOREIGN KEY (idusuario) REFERENCES usuarios (idusuario)
          ON DELETE CASCADE ON UPDATE CASCADE,
      CONSTRAINT idpaquete_fk FOREIGN KEY (idpaquete) REFERENCES paquetes (idpaquete)
          ON UPDATE CASCADE ON DELETE CASCADE);

/*Tabla menu*/
CREATE TABLE menu (
		idItem INT NOT NULL AUTO_INCREMENT,
	        nombre CHAR (50) NOT NULL,
		precio INT NOT NULL,
                tamanio CHAR (50),
                tipo CHAR (50) NOT NULL,
		PRIMARY KEY (idItem)
              );

INSERT INTO usuarios VALUES(NULL, 'admin', '1234', 2)
