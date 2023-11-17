USE ClinicaVeterinaria;


-- Verifica o conteúdo da tabela
select * from cliente;

-- Verifica a estrutura da tabela
DESCRIBE Cliente;


-- Preenchimento da tabela Cliente
INSERT INTO Cliente(Nome, Endereco, Celular, Telefone, CPF)
VALUES ('João da Silva', 'Rua Dez, 20 - Vila Verde', '11933445565', '1144556677', '12234456678');

INSERT INTO Cliente(Nome, Endereco, Celular, Telefone, CPF) 
VALUES ('Maria dos Santos', 'Rua Onze, 12 - Parque Paulada', '11988765432', '1199876543', '23345567789');

INSERT INTO Cliente(Nome, Endereco, Celular, Telefone, CPF) 
VALUES ('Roberto Borges', 'Rua Doze, 13 - Vila Velha', '11977543211', '114567890', '34456678890');

INSERT INTO Cliente(Nome, Endereco, Celular, Telefone, CPF) 
VALUES ('Paula Margareth', 'Rua Treze, 14 - Parque Pan', '11933334456', '114444556', '45567789901');

INSERT INTO Cliente(Nome, Endereco, Celular, Telefone, CPF) 
VALUES ('Mario Castilho', 'Rua Catorze, 15 - Vila Vento', '11933323212', '1144434323', '56678890012');

INSERT INTO Cliente(Nome, Endereco, Celular, Telefone, CPF) 
VALUES ('Adriano Braulio', 'Rua Quinze, 16 - Jardim Júpter', '11985667800', '1196778901', '67789901123');

INSERT INTO Cliente(Nome, Endereco, Celular, Telefone, CPF) 
VALUES ('Henrique Romeu Pinto', 'Rua Dezesseis, 17 - Vila Vergalhão', '11932211265', '1144333223', '78890012234');


-- Verifica o conteúdo da tabela animal    
select * from Animal;


-- Preenchimento da tabela Animal
INSERT INTO Animal(Nome, Tipo, Raca, Idade, Alergico, CodCliente) 
VALUES ('Borges', 'Girafa', 'Pretoriana', 20, 0, 1);

INSERT INTO Animal(Nome, Tipo, Raca, Idade, Alergico, CodCliente) 
VALUES('Ralf', 'Cachorro', 'Pastor-Alemão', 5, 1, 2);

INSERT INTO Animal(Nome, Tipo, Raca, Idade, Alergico, CodCliente) 
VALUES ('Jhamal', 'Elefante', 'Africano', 16, 0, 1);

INSERT INTO Animal(Nome, Tipo, Raca, Idade, Alergico, CodCliente) 
VALUES ('Girurume', 'Hamster', 'Comaga', 3, 0, 4);

INSERT INTO Animal(Nome, Tipo, Raca, Idade, Alergico, CodCliente) 
VALUES ('Max', 'Cachorro', 'Labrador', 30, 0,  5);

INSERT INTO Animal(Nome, Tipo, Raca, Idade, Alergico, CodCliente) 
VALUES ('Bolt', 'Gato', 'Persa', 4, 1, 6);

/*
-- Verifica o conteúdo da tabela Veterinário
select * from Veterinario;
*/

-- Preenchimento da tabela Veterinario
INSERT INTO Veterinario(Nome, CRMV, Endereco, Telefone, Celular) 
VALUES ('Rodolfo','98654','Rua Drive, 465 - Jardim do HD','1146852398','15996587412');

/*
-- Verifica o conteúdo da tabela Herbívoro
select * from AnimalGrande;

-- Verifica a estrutura da tabela Herbívoro
DESCRIBE AnimalGrande;
*/

-- Preenchimento da tabela Herbivoro
INSERT INTO GrandePorte(AlturaM, PesoT, CodAnimal) 
VALUES (3, 2.7, 3);

INSERT INTO GrandePorte(AlturaM, PesoT, CodAnimal) 
VALUES (5.7, 1.2, 1);

/*
select * from Consulta;
-- Preenchimento da tabela Consulta
*/

INSERT INTO Consulta(CRMV, CodAnimal, DataHoraConsulta, Valor, Diagnostico) 
VALUES ('98654', 3, '2019-04-19 15:58', 65, 'Pulgas');

INSERT INTO Consulta(CRMV, CodAnimal, DataHoraConsulta, Valor, Diagnostico) 
VALUES ('98654', 6, '2019-04-20 15:00', 100, 'Câncer');

