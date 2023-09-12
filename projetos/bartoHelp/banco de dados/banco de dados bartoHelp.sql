DROP DATABASE if EXISTS bartohelp;
CREATE DATABASE bartohelp;

USE bartohelp;

create table if not exists `vaga`(
	id_vaga INT AUTO_INCREMENT PRIMARY key,
	
	titulo VARCHAR(100),
	descricao_vaga VARCHAR(255),
	preenchida BOOLEAN
);

create table if not EXISTS `empresa`(
	cnpj VARCHAR(20) PRIMARY key,
	nome VARCHAR(100) NOT null,
	logo BLOB,
	vaga INT NOT NULL,
	
	FOREIGN KEY(vaga) REFERENCES vaga(id_vaga)
);

create table if not exists `escolaridade`(
	id_esc INT AUTO_INCREMENT PRIMARY key,
	
	instituicao VARCHAR(255) NOT NULL,
	nivel VARCHAR(20) NOT NULL,
	concluido BOOLEAN NOT NULL,
	duracao_feito VARCHAR(100) NOT NULL,
	data_inicio VARCHAR(8) NOT NULL,
	data_final VARCHAR(8) NOT null
);

CREATE TABLE competencia(
	tipo VARCHAR(35) PRIMARY key,
	nivel INT	
);

create table if not exists `experiencia`(
	id_exp INT AUTO_INCREMENT PRIMARY KEY,
	conteudo VARCHAR(255) NOT NULL,
	duracao VARCHAR(10)
);

create table if not exists `linguas`(
	id_linguagem INT AUTO_INCREMENT PRIMARY key,
	
	lingua VARCHAR(50) NOT null,
	nivel VARCHAR(50)
);

create table if not exists `usuario`(
	email VARCHAR(255) NOT null,
	senha VARCHAR(80) not NULL,
	telefone VARCHAR(18) NOT NULL,
	
	foto blob,
	nome VARCHAR(255) NOT null,
	cpf VARCHAR(12) PRIMARY KEY,
	nascimento VARCHAR(12) NOT null,
	
	cep VARCHAR(10) NOT null,
	bairro_cidade VARCHAR(255) NOT NULL,
	
	experiencia INT,
	escolaridade INT,
	linguas INT,
	competencia VARCHAR(35),
	
	FOREIGN KEY (experiencia)  REFERENCES experiencia(id_exp),
	FOREIGN KEY (escolaridade)  REFERENCES escolaridade(id_esc),
	FOREIGN KEY (linguas)  REFERENCES linguas(id_linguagem),
	FOREIGN KEY (competencia) REFERENCES competencia(tipo)
);


create table if not exists `interesse`(
	id_usuario VARCHAR(12),
	id_vaga int,
	interessado BOOLEAN,
	
	PRIMARY KEY(id_usuario, id_vaga),
	FOREIGN KEY(id_usuario) REFERENCES `usuario`(cpf),
	FOREIGN KEY(id_vaga) REFERENCES `vaga`(id_vaga)
); 