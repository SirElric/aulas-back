CREATE DATABASE dbcontatos20201a;

use dbcontatos20201a;

CREATE TABLE tblestados (
  idEstado int(11) NOT NULL AUTO_INCREMENT,
  sigla varchar(2) NOT NULL,
  nome varchar(100) NOT NULL,
  PRIMARY KEY (idEstado)
);

CREATE TABLE tblcontatos (
  idContato int(11) NOT NULL AUTO_INCREMENT,
  nome varchar(100) NOT NULL,
  endereco varchar(150) DEFAULT NULL,
  bairro varchar(50) DEFAULT NULL,
  cep varchar(10) DEFAULT NULL,
  idEstado int(11) NOT NULL,
  telefone varchar(14) NOT NULL,
  celular varchar(15) NOT NULL,
  email varchar(100) NOT NULL,
  dtNasc date NOT NULL,
  sexo varchar(1) DEFAULT NULL,
  obs text,
  PRIMARY KEY (idContato),
  KEY FK_estados_contatos (idEstado),
  CONSTRAINT FK_estados_contatos FOREIGN KEY (idEstado) REFERENCES tblestados (idEstado)
);