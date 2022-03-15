CREATE DATABASE db_etec;
USE db_etec;

CREATE TABLE tb_aluno (
	cd_rm INT(5) ZEROFILL PRIMARY KEY NOT NULL,
	nm_nome VARCHAR(100),
	nr_idade INT
);

INSERT INTO tb_aluno (cd_rm, nm_nome, nr_idade) VALUES
	(20218, "Pedro Gil", 17),
	(21114, "Adriana do Nascimento", 17),
	(21115, "Gabriella Cassillas", 17),
	(21135, "Carla Merelis", 33),
	(20012, "Raylla Silva", 16),
	(20142, "Maria Silva", 17),
	(20116, "Nardes", 17);