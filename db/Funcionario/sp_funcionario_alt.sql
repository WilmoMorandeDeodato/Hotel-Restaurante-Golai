DROP PROCEDURE sp_funcionario_alt;
DELIMITER //
	CREATE PROCEDURE sp_funcionario_alt(
		v_id_func     INT,
		v_id_hotel    INT,
		v_id_cargo    INT,
		v_nome 		  VARCHAR(80),
		v_nbi 		  VARCHAR(80),
		v_tel1 		  BIGINT,
		v_tel2 		  BIGINT,
		v_data_nasc   DATE,
		v_estado      VARCHAR(15)
    )
    BEGIN
    UPDATE 
		tb_funcionario
	SET
		id_hotel  = v_id_hotel,
		id_cargo  = v_id_cargo,
		nome      = v_nome,
		nbi       = v_nbi,
		tel1      = v_tel1,
		tel2      = v_tel2,
		data_nasc = v_data_nasc,
		estado    = v_estado
	WHERE
		id_func   = v_id_func;
    END //
DELIMITER ; 
CALL sp_funcionario_alt(1, 2, 1,'Wilmo Mondiu','DWWWSWS323',9222222, 9233333, '2000-09-09', 'Ativo');