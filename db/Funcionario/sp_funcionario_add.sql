DROP PROCEDURE sp_funcionario_add;
DELIMITER //
	CREATE PROCEDURE sp_funcionario_add(
		v_id_hotel  INT,
		v_id_cargo  INT,
		v_nome      VARCHAR(80),
		v_nbi       VARCHAR(20),
		v_tel1      BIGINT,
		v_tel2      BIGINT,
		v_data_nasc DATE,
        v_genero    VARCHAR(20)
    )
    BEGIN
    DECLARE v_id_func  INT;
    DECLARE v_estado   VARCHAR(15) DEFAULT 'Ativo';
	SELECT COUNT(id_func) + 1 FROM tb_funcionario INTO v_id_func;
    INSERT 
		INTO tb_funcionario(
				id_func,
				id_hotel,
				id_cargo,
				nome,
				nbi,
				tel1,
				tel2,
				data_nasc,
                genero,
				data_add,
				estado
        )
	VALUES(
		v_id_func,
		v_id_hotel,
		v_id_cargo,
		v_nome,
		v_nbi,
		v_tel1,
		v_tel2,
		v_data_nasc,
        v_genero,
		NOW(),
		estado
    );
    END //
DELIMITER ; 
CALL sp_funcionario_add(1, 1,'WDW','DWWWSWS323',9222222, 9233333, '2000-09-09');