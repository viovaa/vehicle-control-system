create database aduanas;
use aduanas;
CREATE TABLE Cargo (
  IDcargo varchar(5) NOT NULL,
  NombreCargo VARCHAR(45) NOT NULL,
  PRIMARY KEY (IDcargo)
  );
  
  CREATE TABLE Asignacion (
  ID VARCHAR(5) NOT NULL,
  Nombre VARCHAR(45) NOT NULL,
  Tarea VARCHAR(1) NOT NULL,
  cargo_IDcargo varchar(5) NOT NULL,
  PRIMARY KEY (ID),
  foreign key (cargo_IDcargo) references cargo(IDcargo) on update cascade on delete cascade
  );
  
  CREATE TABLE Funcionario(
  Rut VARCHAR(10) NOT NULL,
  Edad DATE NOT NULL,
  Nombre VARCHAR(25) NOT NULL,
  Apellido VARCHAR(25) NOT NULL,
  Email VARCHAR(45) NOT NULL,
  Telefono VARCHAR(10) NOT NULL,
  F_ingreso DATE NOT NULL,
  password VARCHAR(15) NOT NULL,
  Asignacion_ID VARCHAR(5) NOT NULL,
  PRIMARY KEY (Rut),
  foreign key (Asignacion_ID) references Asignacion(ID) on update cascade on delete cascade
  );
  CREATE TABLE IF NOT EXISTS Carga(
  PatenteCarga INT NULL,
  Peso SMALLINT NULL,
  Descripcion VARCHAR(45) NULL,
  PRIMARY KEY (PatenteCarga)
  );
  CREATE TABLE IF NOT EXISTS Conductor (
  Rut VARCHAR(45) NOT NULL,
  Nombre VARCHAR(25) NOT NULL,
  Apellido VARCHAR(25) NOT NULL,
  Celular VARCHAR(9) NOT NULL,
  Email VARCHAR(45) NOT NULL,
  PRIMARY KEY (Rut)
  );
  
  CREATE TABLE IF NOT EXISTS Registro(
  NRegistro INT NOT NULL,
  patente VARCHAR(6) NOT NULL,
  Descripcion VARCHAR(45) NOT NULL,
  Revision VARCHAR(1) NOT NULL,
  Asignacion_ID VARCHAR(5) NOT NULL,
  Carga_PatenteCarga INT NOT NULL,
  Conductor_Rut VARCHAR(45) NOT NULL,
  PRIMARY KEY (NRegistro),
  foreign key (Asignacion_ID) references Asignacion(ID) on update cascade on delete cascade,
  foreign key (Carga_PatenteCarga) references Carga(PatenteCarga) on update cascade on delete cascade,
  foreign key (Conductor_Rut) references Conductor(Rut) on update cascade on delete cascade
);


-- valores de prueba 

-- Cargo

INSERT INTO Cargo (IDcargo, NombreCargo) VALUES ('C001', 'administrador');
INSERT INTO Cargo (IDcargo, NombreCargo) VALUES ('C002', 'agenteAduanal');
INSERT INTO Cargo (IDcargo, NombreCargo) VALUES ('C003', 'oficialAduanal');
INSERT INTO Cargo (IDcargo, NombreCargo) VALUES ('C004', 'policiadeTrafico');


-- Asignación

INSERT INTO Asignacion (ID, Nombre, Tarea, cargo_IDcargo) VALUES ('A001', 'listarUsuarios', 'T', 'C001');
INSERT INTO Asignacion (ID, Nombre, Tarea, cargo_IDcargo) VALUES ('A002', 'listarTramitesVehiculoCarga', 'T', 'C002');
INSERT INTO Asignacion (ID, Nombre, Tarea, cargo_IDcargo) VALUES ('A003', 'listarVehiculoParticular', 'T', 'C003');
INSERT INTO Asignacion (ID, Nombre, Tarea, cargo_IDcargo) VALUES ('A004', 'listarVehiculoCarga', 'T', 'C004');

-- funcionario 

INSERT INTO Funcionario (Rut, Edad, Nombre, Apellido, Email, Telefono, F_ingreso, password, Asignacion_ID) 
VALUES ('12345678-9', '1990-01-01', 'John', 'Doe', 'john.doe@example.com', '1234', '2021-01-01', 'password1', 'A001');

INSERT INTO Funcionario (Rut, Edad, Nombre, Apellido, Email, Telefono, F_ingreso, password, Asignacion_ID) 
VALUES ('98765432-1', '1985-05-10', 'Jane', 'Smith', 'jane.smith@example.com', '5678', '2020-05-01', 'password2', 'A002');

INSERT INTO Funcionario (Rut, Edad, Nombre, Apellido, Email, Telefono, F_ingreso, password, Asignacion_ID) 
VALUES ('54321678-0', '1995-12-15', 'Robert', 'Johnson', 'robert.johnson@example.com', '9012', '2022-03-15', 'password3', 'A003');
