CREATE DATABASE db_etec;
USE db_etec;

CREATE TABLE tb_aluno (
	cd_rm INT(5) ZEROFILL PRIMARY KEY NOT NULL,
	nm_nome VARCHAR(100),
	nr_idade INT
);

CREATE TABLE tb_usuario (
	cd_usuario INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	ds_login VARCHAR(30),
	ds_senha VARCHAR(16),
	nr_nivel INT
);

INSERT INTO tb_aluno (cd_rm, nm_nome, nr_idade) VALUES
	(20218, "Pedro Gil", 17),
	(21114, "Adriana do Nascimento", 17),
	(21115, "Gabriella Cassillas", 17),
	(21135, "Carla Merelis", 33),
	(20012, "Raylla Silva", 16),
	(20142, "Maria Silva", 17),
	(20116, "Nardes", 17);

INSERT INTO tb_usuario (cd_usuario, ds_login, ds_senha, nr_nivel) VALUES
	(null, 'user', '1234', '1'),
	(null, 'admin', '@ypedro', '2');