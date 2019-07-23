/*
    Projecto da Wmd-Kernel ano de 2019
    Objectivo: Gerir e automatizar o processo de receitas no Hotel Golai
    Desenvolvedores: Wilmo Morande Deodato Velasco António
*/

CREATE  DATABASE      bd_hotel
DEFAULT CHARACTER SET utf8
DEFAULT COLLATE       utf8_general_ci;

USE bd_hotel;

CREATE TABLE tb_hotel(
	id_hotel 	INT,
    localizacao VARCHAR(1000),
    gerente 	VARCHAR(80),
    data_ina	DATE,
    data_add 	TIMESTAMP,
    estado 		ENUM('Ativo', 'Inativo') DEFAULT 'Ativo',
    CONSTRAINT PK_ID_HOTEL               PRIMARY KEY (id_hotel)
);

CREATE TABLE tb_visitante(
	id_visitante INT,
	id_hotel 	 INT,
	ip 		  	 VARCHAR(15),
	navegador 	 VARCHAR(30),
	sistema 	 VARCHAR(30),
	data_ace 	 TIMESTAMP,
	estado 		 ENUM('Ativo', 'Inativo') DEFAULT 'Ativo',
    CONSTRAINT PK_ID_VISITANTE 	  PRIMARY KEY (id_visitante),
    CONSTRAINT FK_TB_VIS_ID_HOTEL FOREIGN KEY (id_hotel)
				REFERENCES tb_hotel(id_hotel)
);

CREATE TABLE tb_avaliacao(
	id_avaliacao INT,
	id_hotel 	 INT,
	id_visitante INT,
	nome 	     VARCHAR(15),
	comentario 	 VARCHAR(100),
	data_ava 	 TIMESTAMP,
    estado 		 ENUM('Ativo', 'Inativo') DEFAULT 'Ativo',
    CONSTRAINT PK_ID_AVALIACAO 	  PRIMARY KEY (id_avaliacao),
    CONSTRAINT FK_TB_AVA_ID_HOTEL FOREIGN KEY (id_hotel)
				REFERENCES tb_hotel(id_hotel),
	CONSTRAINT FK_TB_AVA_VISITANTE FOREIGN KEY (id_visitante)
				REFERENCES tb_visitante(id_visitante)
);

CREATE TABLE tb_cargo(
	id_cargo 	INT,
	cargo 		VARCHAR(100),
	data_add 	TIMESTAMP,
    estado 		ENUM('Ativo', 'Inativo') DEFAULT 'Ativo',
    CONSTRAINT PK_ID_CARGO 	  	         PRIMARY KEY (id_cargo)
);

CREATE TABLE tb_funcionario(
	id_func     INT,
	id_hotel    INT,
	id_cargo 	INT,
	nome 		VARCHAR(80),
	nbi 		VARCHAR(80)               UNIQUE,
	tel1 		BIGINT                    UNIQUE,
	tel2 		BIGINT                    UNIQUE,
	data_nasc   DATE,
    genero      ENUM('*', 'Masculino', 'Femenino', 'Outro')  DEFAULT '*',
	data_add 	TIMESTAMP,
    estado 		ENUM('Ativo', 'Inativo')  DEFAULT 'Ativo',
    CONSTRAINT PK_ID_FUNC 	  	          PRIMARY KEY (id_func),
    CONSTRAINT FK_TB_FUN_ID_HOTEL         FOREIGN KEY (id_hotel)
				REFERENCES tb_hotel(id_hotel),
	CONSTRAINT FK_TB_FUN_ID_CARGO         FOREIGN KEY (id_cargo)
				REFERENCES tb_cargo(id_cargo)
);

CREATE TABLE tb_cliente(
	id_cliente   INT,
	id_visitante INT,
	nome 		 VARCHAR(80),
	nbi 		 VARCHAR(15)              UNIQUE,
	tel 		 BIGINT                   UNIQUE,
	email 		 VARCHAR(100)             UNIQUE,
	senha	     VARCHAR(100),
	data_nasc    DATE,
	data_add 	 TIMESTAMP,
    estado 		 ENUM('Ativo', 'Inativo') DEFAULT 'Ativo',
    CONSTRAINT PK_ID_CLIENTE 	  	      PRIMARY KEY (id_cliente),
    CONSTRAINT FK_TB_CLI_ID_VISITANTE     FOREIGN KEY (id_visitante)
				 REFERENCES tb_visitante(id_visitante)
);

CREATE TABLE tb_categoria(
	id_categoria INT,
	categoria	 VARCHAR(100),
	data_add 	 TIMESTAMP,
    estado 		 ENUM('Ativo', 'Inativo') DEFAULT 'Ativo',
    CONSTRAINT PK_ID_CATEGORIA 	          PRIMARY KEY (id_categoria)
);

CREATE TABLE tb_perfil(
	id_perfil    INT,
	id_func      INT,
	id_categoria INT,
	tel 		 BIGINT                   UNIQUE,
	nome 		 VARCHAR(80),
	senha 		 VARCHAR(100),
	data_cri	 TIMESTAMP,
    estado 		 ENUM('Ativo', 'Inativo') DEFAULT 'Ativo',
    CONSTRAINT PK_ID_PERFIL 	  	      PRIMARY KEY (id_perfil),
    CONSTRAINT FK_TB_PER_ID_FUNC 	      FOREIGN KEY (id_func)
				 REFERENCES tb_funcionario(id_func),
	CONSTRAINT FK_TB_PER_ID_CATEGORIA     FOREIGN KEY (id_categoria)
				 REFERENCES tb_categoria(id_categoria)
);

CREATE TABLE tb_condicao(
	id_condicao  INT,
	id_perfil    INT,
	condicao	 VARCHAR(100),
	data_add 	 TIMESTAMP,
    estado 		 ENUM('Ativo', 'Inativo') DEFAULT 'Ativo',
    CONSTRAINT PK_ID_CONDICAO	  	      PRIMARY KEY (id_condicao),
    CONSTRAINT FK_TB_CON_ID_PERFIL        FOREIGN KEY (id_perfil)
				 REFERENCES tb_perfil(id_perfil)
);

CREATE TABLE tb_tipo_qua(
	id_tipo_qua  INT,
	id_perfil    INT,
	tipo_qua 	 VARCHAR(80),
	data_add     TIMESTAMP,
    estado 		 ENUM('Ativo', 'Inativo') DEFAULT 'Ativo',
    CONSTRAINT PK_ID_TIPO_QUA	  	      PRIMARY KEY (id_tipo_qua),
    CONSTRAINT FK_TB_TQ_ID_PERFIL        FOREIGN KEY (Id_perfil)
				 REFERENCES tb_perfil(Id_perfil)
);

CREATE TABLE tb_andar(
	id_andar     INT,
	id_perfil    INT,
	data_add     TIMESTAMP,
    estado 		 ENUM('Ativo', 'Inativo') DEFAULT 'Ativo',
    CONSTRAINT PK_ID_ANDAR	  	          PRIMARY KEY (id_andar),
    CONSTRAINT FK_TB_AND_ID_PERFIL        FOREIGN KEY (Id_perfil)
				 REFERENCES tb_perfil(Id_perfil)
);

CREATE TABLE tb_quarto(
	id_quarto 	 INT,
	id_tipo_qua  INT,
	id_perfil 	 INT, 
	id_andar 	 INT, 
	nporta		 INT NOT NULL             UNIQUE,
	data_add 	 TIMESTAMP,
	estado_qua 	 ENUM('Livre', 'Ocupado') DEFAULT 'Livre',
    estado 		 ENUM('Ativo', 'Inativo') DEFAULT 'Ativo',
    CONSTRAINT PK_ID_QUARTO	  	          PRIMARY KEY (id_quarto),
    CONSTRAINT FK_TB_QUA_ID_QT            FOREIGN KEY (id_tipo_qua)
				 REFERENCES tb_tipo_qua(id_tipo_qua),
    CONSTRAINT FK_TB_QUA_ID_PERFIL        FOREIGN KEY (id_perfil)
				 REFERENCES tb_perfil(id_perfil),
    CONSTRAINT FK_TB_QUA_ID_ANDAR         FOREIGN KEY (id_andar)
				 REFERENCES tb_andar(id_andar)
);

CREATE TABLE tb_cond_qua(
	id_cond_qua  INT,
	id_condicao  INT,
	Id_quarto    INT,
	id_perfil    INT,
	data_add 	 TIMESTAMP,
    estado 		 ENUM('Ativo', 'Inativo') DEFAULT 'Ativo',
    CONSTRAINT PK_ID_CONQ_QUA	  	      PRIMARY KEY (id_cond_qua),
    CONSTRAINT FK_TB_CONQ_ID_CONDICAO     FOREIGN KEY (id_condicao)
				 REFERENCES tb_condicao(id_condicao),
    CONSTRAINT FK_TB_CONQ_ID_QUARTO       FOREIGN KEY (Id_quarto)
				 REFERENCES tb_quarto(Id_quarto),
    CONSTRAINT FK_TB_CONQ_ID_PERFIL       FOREIGN KEY (id_perfil)
				 REFERENCES tb_perfil(id_perfil)
);

CREATE TABLE tb_reserva(
	id_reserva   INT,
	id_cliente   INT,
	id_quarto    INT,
	data_res     TIMESTAMP,
    estado_res 	 ENUM('Pendente', 'Efectuada') DEFAULT 'Pendente',
    estado 		 ENUM('Ativo', 'Inativo')      DEFAULT 'Ativo',
    CONSTRAINT PK_ID_RESERVA	  	           PRIMARY KEY (id_reserva),
    CONSTRAINT FK_TB_RES_ID_CLIENTE            FOREIGN KEY (id_cliente)
				 REFERENCES tb_cliente(id_cliente),
    CONSTRAINT FK_TB_RES_ID_QUARTO             FOREIGN KEY (id_quarto)
				 REFERENCES tb_quarto(Id_quarto)
);

CREATE TABLE tb_hospede(
	id_hospede   INT,
	id_cliente   INT,
	id_reserva   INT,
	id_quarto    INT,
	Id_perfil	 INT,
	data_ent	 DATETIME,
	data_sai 	 DATETIME,
    estado 		 ENUM('Ativo', 'Inativo') DEFAULT 'Ativo',
    CONSTRAINT PK_ID_HOSPEDE	  	      PRIMARY KEY (id_hospede),
    CONSTRAINT FK_TB_HOS_ID_CLIENTE       FOREIGN KEY (id_cliente)
				 REFERENCES tb_cliente(id_cliente),
	CONSTRAINT FK_TB_HOS_ID_RESERVA       FOREIGN KEY (id_reserva)
				 REFERENCES tb_reserva(id_reserva),
    CONSTRAINT FK_TB_QUA_ID_QUARTO        FOREIGN KEY (id_quarto)
				 REFERENCES tb_quarto(id_quarto),
    CONSTRAINT FK_TB_HOS_ID_PERFIL        FOREIGN KEY (Id_perfil)
				 REFERENCES tb_perfil(Id_perfil)
);

CREATE TABLE tb_foto_qua(
	id_foto_qua  INT,
	Id_quarto    INT,
	id_perfil    INT,
	foto 		 VARCHAR(100),
	data_add     TIMESTAMP,
    estado 		 ENUM('Ativo', 'Inativo') DEFAULT 'Ativo',
    CONSTRAINT PK_ID_FOTO_QUA	  	      PRIMARY KEY (id_foto_qua),
	CONSTRAINT FK_TB_FQ_ID_QUARTO         FOREIGN KEY (id_quarto)
				 REFERENCES tb_quarto(id_quarto),
    CONSTRAINT FK_TB_FQ_ID_PERFIL         FOREIGN KEY (Id_perfil)
				 REFERENCES tb_perfil(Id_perfil)
);

CREATE TABLE tb_pagamento(
	id_pagamento INT,
	id_reserva   INT,
	Valor        DECIMAL(6,2),
	via          VARCHAR(80),
	data_pag     DATETIME,
    estado 		 ENUM('Ativo', 'Inativo') DEFAULT 'Ativo',
    CONSTRAINT PK_ID_PAGAMENTO	  	      PRIMARY KEY (id_pagamento),
    CONSTRAINT FK_TB_PAG_ID_RESERVA       FOREIGN KEY (id_reserva)
				 REFERENCES tb_perfil(Id_perfil)
);
