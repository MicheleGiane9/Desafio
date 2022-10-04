Ferramenta de desenvolvimento - Visual Studio Code
bootstrap@5.2.2
jquery@3.6.0

Banco de Dados utilizaado - Mysql - XAMPP

Criação banco e tabela.

CREATE DATABASE pessoa;
USE pessoa;
CREATE TABLE cliente (
 idcliente int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
 nome varchar(55) NOT NULL,
 cpf varchar(11) NOT NULL,
 telefone varchar(13) NOT NULL,
 dtaNasc DATE NOT NULL,
 genero char(1) NOT NULl
);
 
 