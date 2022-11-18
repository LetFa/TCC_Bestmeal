create database bestmeal;
use bestmeal;

CREATE TABLE usuario (
   id int NOT NULL AUTO_INCREMENT,
   nome varchar(50) NOT NULL,
   email varchar(255) NOT NULL,
   senha varchar(60) NOT NULL,
   ativo tinyint NOT NULL DEFAULT '0',
   adm  tinyint NOT NULL DEFAULT '0',
   PRIMARY KEY (id)  
);


