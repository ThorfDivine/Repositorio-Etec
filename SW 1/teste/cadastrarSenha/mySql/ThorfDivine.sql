CREATE DATABASE thorfdivine;

USE thorfdivine;
CREATE TABLE usuario(
  id_user INT PRIMARY KEY AUTO_INCREMENT,
  cpf VARCHAR(15) NOT null, 
  nome VARCHAR(100) NOT null,
  gmail VARCHAR(100) NOT null,  
  senha VARCHAR(30) NOT null, 
  data_nascimento VARCHAR(11) NOT null, 
  telefone VARCHAR(15) NOT null
	 );
	 
	 