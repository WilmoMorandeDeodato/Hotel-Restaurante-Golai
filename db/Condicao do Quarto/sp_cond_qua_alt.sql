DROP PROCEDURE sp_cond_qua_alt;
DELIMITER //
	CREATE PROCEDURE sp_cond_qua_alt(
		v_id_cond_qua  INT,
		v_id_condicao  INT,
		v_Id_quarto    INT,
		v_estado 	   VARCHAR(15)
    )
    BEGIN
    UPDATE 
		tb_cond_qua
	SET
		id_condicao  = v_id_condicao,
		Id_quarto    = v_Id_quarto,
		estado 		 = v_estado
	WHERE
		id_cond_qua  = v_id_cond_qua;
    END //
DELIMITER ; 
CALL sp_cond_qua_alt(1, 2, 1,'Ativo');