CREATE DATABASE encuestas;
USE encuestas;

CREATE TABLE departamentos
(
	iddepartamento		INT AUTO_INCREMENT PRIMARY KEY,
    departamento		VARCHAR(40) 	NOT NULL,
    constraint uk_departamento_dep UNIQUE (departamento)
)ENGINE = INNODB;

CREATE TABLE cultivos
(
	idcultivo 			INT AUTO_INCREMENT PRIMARY KEY,
    cultivo 			VARCHAR(40) 	NOT NULL,
    constraint uk_cultivo_clt UNIQUE (cultivo)
)ENGINE = INNODB;

CREATE TABLE empresas
(
	idempresa			INT AUTO_INCREMENT PRIMARY KEY,
    ruc 				CHAR(11) 		NOT NULL,
    razonsocial 		VARCHAR(250) 	NOT NULL,
    nombrecomercial		VARCHAR(100) 	NOT NULL,
    registro 			DATETIME 		NOT NULL DEFAULT NOW(),
    CONSTRAINT uk_ruc_emp UNIQUE (ruc)
)ENGINE = INNODB;

CREATE TABLE zonas
(
	idzona 				INT AUTO_INCREMENT PRIMARY KEY,
    idempresa 			INT 			NOT NULL,
    iddepartamento		INT 			NOT NULL,
    CONSTRAINT fk_idempresa_zon FOREIGN KEY (idempresa) REFERENCES empresas (idempresa),
    CONSTRAINT fk_iddepartamento_zon FOREIGN KEY (iddepartamento) REFERENCES departamentos (iddepartamento)
)ENGINE = INNODB;

CREATE TABLE listacultivos
(
	idlistacultivo		INT AUTO_INCREMENT PRIMARY KEY,
    idempresa 			INT 			NOT NULL,
    idcultivo			INT 			NOT NULL,
    CONSTRAINT fk_idempresa_lst FOREIGN KEY (idempresa) REFERENCES empresas (idempresa),
    CONSTRAINT fk_idcultivo_lst FOREIGN KEY (idcultivo) REFERENCES cultivos (idcultivo)
)ENGINE = INNODB;

CREATE TABLE puestos
(
	idpuesto			INT AUTO_INCREMENT PRIMARY KEY,
    idempresa 			INT 			NOT NULL,
    infopuestos 		ENUM('Área agrícola', 'Área Industrial', 'Transversales'),
    grupo 				ENUM('Operario calificado', 'Técnico calificado'),
    nombrepuesto 		VARCHAR(100) 	NOT NULL,
    disponibilidad 		ENUM('Crítico', 'Muy crítico', 'Altamente crítico'),
    numpuestos 			SMALLINT 		NOT NULL,
    indice 				TINYINT 		NOT NULL,
    CONSTRAINT fk_idempresa_pst FOREIGN KEY (idempresa) REFERENCES empresas (idempresa)
)ENGINE = INNODB;


INSERT INTO departamentos (departamento) VALUES
('Amazonas'),
('Áncash'),
('Apurímac'),
('Arequipa'),
('Ayacucho'),
('Cajamarca'),
('Callao'),
('Cusco'),
('Huancavelica'),
('Huánuco'),
('Ica'),
('Junín'),
('La Libertad'),
('Lambayeque'),
('Lima'),
('Loreto'),
('Madre de Dios'),
('Moquegua'),
('Pasco'),
('Piura'),
('Puno'),
('San Martín'),
('Tacna'),
('Tumbes'),
('Ucayali');

INSERT INTO cultivos (cultivo) VALUES 
('Arándono'),
('Palta'),
('Espárrago'),
('Uva'),
('Mango');