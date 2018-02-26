CREATE DATABASE SEVEN;

USE SEVEN;

CREATE TABLE users (
  rus int(11)  AUTO_INCREMENT,
  nome varchar(250),
  sexo varchar(1) ,
  rg   varchar(15),
  senha varchar(30) ,
  email varchar(250) ,
  situacao varchar(1) ,
  t_usuario varchar(30) ,
  t_tel1 varchar(10) ,
  ddd1 int(2) ,
  numero1 int(9) ,
  t_tel2 varchar(10) ,
  ddd2 int(2) ,
  numero2 int(9) ,
  obs varchar(250) ,
  PRIMARY KEY (rus)
);

INSERT INTO users (rus, nome, sexo, rg, senha, email, situacao, t_usuario, t_tel1, ddd1, numero1, t_tel2, ddd2, numero2, obs) VALUES
(457700, 'Administrador', 'F', '123456789', '40028922', 'semsal@gmail.com', 'A', 'Administrador', 'RES', 11, 25234526, 'CELL', 11, 965007514, 'adm');

CREATE TABLE `oldusers` (
  rus int(11)  AUTO_INCREMENT,
  nome varchar(250),
  sexo varchar(1) ,
  rg  varchar(15),
  senha varchar(30) ,
  email varchar(250) ,
  situacao varchar(1) ,
  t_usuario varchar(30) ,
  t_tel1 varchar(10) ,
  ddd1 int(2) ,
  numero1 int(9) ,
  t_tel2 varchar(10) ,
  ddd2 int(2) ,
  numero2 int(9) ,
  obs TEXT,
  PRIMARY KEY (`rus`)
);

CREATE TABLE cliente (
  id int(11)  AUTO_INCREMENT,
  nome  varchar(250),
  nomem varchar(250),
  nomep varchar(250),
 sexo varchar(1),
 dnas date,
 rg   varchar(15),
 cpf   varchar(20),
  def  varchar(1),
  t_tel1 varchar(10) ,
  ddd1 int(2) ,
  numero1 int(9) ,
  email varchar(250) ,
  endereco varchar(100),
  escola varchar(80),
  horarioe time,
  horarios time,
  obs TEXT,
  PRIMARY KEY (id)
);

CREATE TABLE `escolas` (
  `id` int(11)  AUTO_INCREMENT,
  `nome` varchar(250),
  PRIMARY KEY (`id`)
);

INSERT INTO `escolas` (`id`, `nome`) VALUES (1, 'E.M.E.F Governador Mario Covas');
