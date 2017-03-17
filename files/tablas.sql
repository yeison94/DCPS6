CREATE TABLE granjero (
	id   				INT UNSIGNED NOT NULL,
	nombre           	VARCHAR(30)  NOT NULL,
	sexo             	VARCHAR(1)   NOT NULL,
	edad			 	INT	UNSIGNED NOT NULL,
	PRIMARY KEY (id),
	CONSTRAINT sexo_valido CHECK (sexo IN ('M', 'F'))
) ENGINE = InnoDB;



CREATE TABLE finca (
	id               	INT UNSIGNED NOT NULL AUTO_INCREMENT,
	granjero         	INT UNSIGNED NOT NULL,
	nombre          	VARCHAR(20)  NOT NULL,
	valor_propiedad     VARCHAR(100) NOT NULL,
	cantidad_vacas      INT UNSIGNED NOT NULL,
	cantidad_gallinas 	INT UNSIGNED NOT NULL,
	PRIMARY KEY (id),
	CONSTRAINT granjero_finca FOREIGN KEY (granjero) REFERENCES granjero (id)
) ENGINE = InnoDB;
