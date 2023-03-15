create database helpaqui;

use helpaqui;

	-- CREATE table cursos_fav ( --
	--	id int primary key auto_increment,
	--	nome varchar(20) null default null,
	--	duracao VARCHAcursos_favR(10) NULL DEFAULT NULL, 
	--	imagem VARCHAR (40) null default null
   -- ); 
	   
   CREATE TABLE icones (
   	id INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
   	icone VARCHAR(40) DEFAULT NULL
	);

	-- CREATE TABLE pri_lugar(
	--	nome VARCHAR(25) NOT NULL PRIMARY KEY,
	--	pontos INT(1) NULL default null	
	-- );
	
	-- CREATE TABLE seg_lugar(
	-- nome VARCHAR(25) NOT NULL PRIMARY KEY,
	--	pontos INT(1) NULL default null	
	-- );

   CREATE table usuarios (
		id INT(6) primary key auto_increment,
		nome VARCHAR(15) null default null,
		sobrenome VARCHAR(32) null DEFAULT NULL,
		email varchar(32) null default null,
		senha VARCHAR(16) null default null,
		idade int(2) null default null,
		atividade TINYINT(1) DEFAULT NULL, 
		id_img INT null default NULL,
		FOREIGN KEY (id_img) REFERENCES icones (id)
   );
    
	INSERT INTO icones(icone) VALUES ('imagens/perfil/iconemen1.png');
	INSERT INTO icones(icone) VALUES ('imagens/perfil/iconemenina1.png');
   INSERT INTO icones(icone) VALUES ('imagens/perfil/iconemen2.png');
   INSERT INTO icones(icone) VALUES ('imagens/perfil/iconemenina2.png');
   INSERT INTO icones(icone) VALUES ('imagens/perfil/iconemen3.png');   
   INSERT INTO icones(icone) VALUES ('imagens/perfil/iconemenina3.png');
   
	INSERT INTO usuarios(nome, sobrenome, email, senha, atividade, id_img) values ('anthony', 'emanuel', 'anthony@gmail.com', 'vivilinda', 1, 1);
	INSERT INTO usuarios(nome, sobrenome, email, senha, atividade, id_img) VALUES ('viviane', 'santos', 'viviane@gmail.com', '12345678', 1, 6);
	INSERT INTO usuarios(nome, sobrenome, email, senha, atividade, id_img) VALUES ('Pablo', 'Fernandes', 'pablo@gmail.com', 'amorock', 1, 1);
	
	-- INSERT INTO pri_lugar(nome) VALUES ('Engenharia');
	-- INSERT INTO pri_lugar(nome) VALUES ('Administração');
	-- INSERT INTO pri_lugar(nome) VALUES ('Informática');
	-- INSERT INTO pri_lugar(nome) VALUES ('Atleta');
	-- INSERT INTO pri_lugar(nome) VALUES ('Eletrotécnica');
	-- INSERT INTO pri_lugar(nome) VALUES ('Logística');
	-- INSERT INTO pri_lugar(nome) VALUES ('Recursos Humanos');
	-- INSERT INTO pri_lugar(nome) VALUES ('Segurança do Trabalho');
	-- INSERT INTO pri_lugar(nome) VALUES ('Artes');
	-- INSERT INTO pri_lugar(nome) VALUES ('Jornalismo');
	
	-- INSERT INTO seg_lugar(nome) VALUES ('Engenharia');
	-- INSERT INTO seg_lugar(nome) VALUES ('Administração');
	-- INSERT INTO seg_lugar(nome) VALUES ('Informática');
	-- INSERT INTO seg_lugar(nome) VALUES ('Atleta');
	-- INSERT INTO seg_lugar(nome) VALUES ('Eletrotécnica');
	-- INSERT INTO seg_lugar(nome) VALUES ('Logística');
	-- INSERT INTO seg_lugar(nome) VALUES ('Recursos Humanos');
	-- INSERT INTO seg_lugar(nome) VALUES ('Segurança do Trabalho');
	-- INSERT INTO seg_lugar(nome) VALUES ('Artes');
	-- INSERT INTO seg_lugar(nome) VALUES ('Jornalismo');
	
	
