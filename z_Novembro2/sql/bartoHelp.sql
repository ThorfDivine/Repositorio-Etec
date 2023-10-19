DROP DATABASE if EXISTS bartohelp;
CREATE DATABASE bartohelp;

USE bartohelp;



create table if not EXISTS `empresa`(
	cnpj VARCHAR(20) PRIMARY key,
    
	nome VARCHAR(100) NOT null,
   gmail varchar(100),
   senha varchar(80),
   telefone varchar(12),
	logo VARCHAR(200)
);

create table if not exists `vaga`(
	id_vaga INT AUTO_INCREMENT PRIMARY key,
    
	titulo VARCHAR(100),
    requisitos text(1000),
    responsabilidades text(1000),
    beneficios text(1000),
    data_pub VARCHAR(20),
    data_max VARCHAR(20),
    aberta BOOLEAN, -- se esta aberta --
    cnpj_empresa varchar(20),
    
    foreign key (cnpj_empresa) references empresa(cnpj)
);

create table if not exists `usuario`(
	email VARCHAR(255) NOT null,
	senha VARCHAR(80) not NULL,
	telefone VARCHAR(18) NOT NULL,
	
	foto VARCHAR(200),
	nome VARCHAR(255) NOT null,
	cpf VARCHAR(12) PRIMARY KEY,
	nascimento VARCHAR(12) NOT null,
	
	cep VARCHAR(10) NOT null,
	bairro_cidade VARCHAR(255) NOT NULL
	
);


create table if not exists `escolaridade`(
	id_esc INT AUTO_INCREMENT PRIMARY key,
	cpf_cliente VARCHAR(12),
	
	instituicao VARCHAR(255) NOT NULL,
   tipo varchar(50),
	concluido BOOLEAN NOT NULL,
	data_inicio VARCHAR(8) NOT NULL,
	data_final VARCHAR(8) NOT null,
	
	FOREIGN KEY(cpf_cliente) REFERENCES `usuario`(cpf)
);

CREATE TABLE competencia(
	id_competencia int primary key auto_increment,
    
	tipo VARCHAR(35),
	nivel INT,
	descricao TEXT(500)
);

create table if not exists `experiencia`(
	id_exp INT AUTO_INCREMENT PRIMARY KEY,
	cpf_cliente VARCHAR(12),
    
	tipo VARCHAR(255) NOT NULL,
    instituicao varchar(255),
    descricao text(1000),
    ano_inicio varchar(4),
    ano_conclusao varchar(4),
	
	FOREIGN KEY(cpf_cliente) REFERENCES `usuario`(cpf)
	
);

create table if not exists `idiomas`(
	id_linguagem INT AUTO_INCREMENT PRIMARY key,
	cpf_cliente VARCHAR(12),
	
	idioma VARCHAR(50) NOT null,
	nivel VARCHAR(50),
	
	FOREIGN KEY(cpf_cliente) REFERENCES `usuario`(cpf)
);

create table if not exists `vaga`(
	id_vaga INT AUTO_INCREMENT PRIMARY key,
	cnpj_emp VARCHAR(20),
	
	titulo VARCHAR(100),
	descricao_vaga VARCHAR(255),
	preenchida BOOLEAN,
	
	FOREIGN KEY(cnpj_emp) REFERENCES empresa(cnpj)
);


create table if not exists `interesse`(
	id_interesse int primary key AUTO_INCREMENT,

	id_usuario VARCHAR(12),
	id_vaga int,
	interessado BOOLEAN,
	
	FOREIGN KEY(id_usuario) REFERENCES `usuario`(cpf),
	FOREIGN KEY(id_vaga) REFERENCES `vaga`(id_vaga)
); 


CREATE TABLE if NOT EXISTS `competencia_vaga`(
	id_competencia_vaga INT PRIMARY KEY AUTO_INCREMENT,
		
	id_vaga INT,
	id_competencia INT,
	
	FOREIGN KEY (id_vaga) REFERENCES vaga(id_vaga),
	FOREIGN KEY (id_competencia) REFERENCES competencia(id_competencia)
);

CREATE TABLE if NOT EXISTS `competencia_usuario`(

	id_competencia_usuario INT PRIMARY KEY AUTO_INCREMENT,
	
	cpf_usuario VARCHAR(12),
	id_competencia INT,
	
	FOREIGN KEY (cpf_usuario) REFERENCES usuario(cpf),
	FOREIGN KEY (id_competencia) REFERENCES competencia(id_competencia)
);

INSERT INTO 