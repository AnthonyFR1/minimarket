
DROP DATABASE IF EXISTS ventas;
CREATE DATABASE IF NOT EXISTS ventas;
USE ventas;
CREATE TABLE productos(
	id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
	codigo VARCHAR(255) NOT NULL,
	descripcion VARCHAR(255) NOT NULL,
	precioVenta DECIMAL(5, 2) NOT NULL,
	precioCompra DECIMAL(5, 2) NOT NULL,
	stock BIGINT NOT NULL,
	PRIMARY KEY(id)
) ENGINE = InnoDB DEFAULT CHARACTER SET = utf8;

CREATE TABLE ventas(
	id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
	fecha DATETIME NOT NULL,
	total DECIMAL(7,2),
	PRIMARY KEY(id)
) ENGINE = InnoDB DEFAULT CHARACTER SET = utf8;

CREATE TABLE productos_vendidos(
	id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
	id_producto BIGINT UNSIGNED NOT NULL,
	cantidad BIGINT UNSIGNED NOT NULL,
	id_venta BIGINT UNSIGNED NOT NULL,
	PRIMARY KEY(id),
	FOREIGN KEY(id_producto) REFERENCES productos(id) ON DELETE CASCADE,
	FOREIGN KEY(id_venta) REFERENCES ventas(id) ON DELETE CASCADE
) ENGINE = InnoDB DEFAULT CHARACTER SET = utf8;


CREATE TABLE rol(
  id_rol BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
  tipo_rol VARCHAR(50) NOT NULL,
  PRIMARY KEY(id_rol)
) ENGINE = InnoDB DEFAULT CHARACTER SET = utf8;


CREATE TABLE usuario(
  id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
  usuario VARCHAR(150) NOT NULL,
  contraseña VARCHAR(150) NOT NULL,
  id_rol BIGINT UNSIGNED NOT NULL,
  PRIMARY KEY(id),
  FOREIGN KEY(id_rol) REFERENCES rol(id_rol) ON DELETE CASCADE
)ENGINE = InnoDB DEFAULT CHARACTER SET = utf8;



INSERT INTO rol(id_rol, tipo_rol) 
VALUES
(1, 'administrador'),
(2, 'usuario');


INSERT INTO usuario(id, usuario, contraseña, id_rol) 
VALUES
(1, 'wee', '022', 1),
(2, 'dff', '123' 2);