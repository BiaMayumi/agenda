
DROP DATABASE IF EXISTS ClinicaVeterinaria; -- apagar o banco de dados

CREATE DATABASE ClinicaVeterinaria;

USE ClinicaVeterinaria;

CREATE TABLE Cliente(
	CodCliente INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Nome VARCHAR(100) NOT NULL,
    Endereco VARCHAR(100),
    Telefone VARCHAR(10),
    Celular CHAR(11),
    CPF CHAR(11) NOT NULL
);

CREATE UNIQUE INDEX IDX_CPF ON
	Cliente(CPF);

CREATE INDEX IDX_Nome ON
	Cliente(Nome);

CREATE TABLE Animal(
	CodAnimal INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    CodCliente INT NOT NULL,
    Nome CHAR(50),
    Tipo CHAR(50), 
    Raca CHAR (20),
    Idade CHAR(3),
    Alergico BIT
);

ALTER TABLE Animal ADD
	CONSTRAINT FK_Cliente_Animal FOREIGN KEY (CodCliente)
    REFERENCES Cliente(CodCliente);
    
    
CREATE TABLE Veterinario(
    CRMV CHAR (5) NOT NULL PRIMARY KEY,
	Nome VARCHAR (50) NOT NULL,
    Endereco VARCHAR(100),
    Telefone CHAR(10),
    Celular CHAR(11)
);

CREATE UNIQUE INDEX IDX_CRMV ON
	Veterinario(CRMV);

CREATE INDEX IDX_Nome ON
	Veterinario(Nome);

CREATE TABLE GrandePorte(
	CodAnimal INT NOT NULL,
	AlturaM DOUBLE, -- Altura em Métros
    PesoT DOUBLE -- Peso em Toneladas
);

ALTER TABLE GrandePorte ADD
	CONSTRAINT FK_Animal_GrandePorte FOREIGN KEY (CodAnimal)
    REFERENCES Animal(CodAnimal);

CREATE TABLE Consulta(
	CodConsulta INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    CRMV VARCHAR (5) NOT NULL,
    CodAnimal INT NOT NULL,
    DataHoraConsulta DATETIME,
    Valor DOUBLE, 
    Diagnostico TEXT
);

ALTER TABLE Consulta ADD
	CONSTRAINT FK_Veterinario_Consulta FOREIGN KEY (CRMV)
    REFERENCES Veterinario(CRMV);

ALTER TABLE Consulta ADD
	CONSTRAINT FK_Animal_Consulta FOREIGN KEY (CodAnimal)
    REFERENCES Animal(CodAnimal);