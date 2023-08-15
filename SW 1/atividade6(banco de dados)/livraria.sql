create database livraria;
use livraria;

create table Usuario(
	id int  primary key auto_increment,
    Nome Varchar(25) not null,
    Sobrenome varchar(40) not null,
    Tipo int not null
);

create table livro(
	ISBN varchar(20) primary key not null,
    Titulo varchar(40) not null,
    Autor varchar(40) not null,
    Categoria varchar(20) not null,
    editora varchar(20) not null,
    Paginas int not null,
    Descricao text not null
);