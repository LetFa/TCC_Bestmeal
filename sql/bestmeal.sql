DROP DATABASE if exists bestmeal;
CREATE DATABASE bestmeal;
USE bestmeal;

CREATE TABLE produtos (
  id int NOT NULL AUTO_INCREMENT,
  nome varchar(255) NOT NULL,
  preco varchar(255) NOT NULL,
  ingredientes varchar(255) NOT NULL,
  foto varchar(255) NOT NULL,
  PRIMARY KEY (id)
);


CREATE TABLE usuarios (
   id int NOT NULL AUTO_INCREMENT,
   nome varchar(50) NOT NULL,
   email varchar(255) NOT NULL,
   senha varchar(60) NOT NULL,
   ativo tinyint NOT NULL DEFAULT '0',
   adm  tinyint NOT NULL DEFAULT '0',
   PRIMARY KEY (id)  
);

CREATE TABLE pedido (
   cod int NOT NULL AUTO_INCREMENT,
   cod_usuario int,
   data_hora datetime,
   PRIMARY KEY (cod)  
);


CREATE TABLE pedido_itens (
   cod_item int NOT NULL AUTO_INCREMENT,
   cod_pedido int,
   cod_produto int,
   PRIMARY KEY (cod_item)  
);


