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
  foreign key (Conductor_Rut) references Conductor(Rut) on update cascade on delete cascade
  );