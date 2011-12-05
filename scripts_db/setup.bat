drop database tubaraourbano;
create database tubaraourbano;
use tubaraourbano;
create table oferta
(nomeproduto varchar(50), descricao varchar(500), foto varchar(50), precooriginal double, precovenda double, fornecedor varchar(50), validade date, vendidos int, categoria char(1));

create table fornecedor
(nomeempresa varchar(50), cnpj char(14), endereco varchar(50), emailpagseguro varchar(50), contrato varchar(50));

create table consumidor
(email varchar(50), nome varchar(50), sexo char(1), nascimento date, senha varchar(16), interesses varchar(5));
