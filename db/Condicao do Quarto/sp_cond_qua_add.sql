DROP PROCEDURE sp_cond_qua_add;
DELIMITER //
	CREATE PROCEDURE sp_cond_qua_add(
		v_id_condicao  INT,
		v_Id_quarto    INT,
		v_id_perfil    INT
    )
    BEGIN
    DECLARE v_id_cond_qua  INT;
    DECLARE v_estado     VARCHAR(15) DEFAULT 'Ativo';
	SELECT COUNT(id_cond_qua) + 1 FROM tb_cond_qua INTO v_id_cond_qua;
    INSERT 
		INTO tb_cond_qua(
			id_cond_qua,
			id_condicao,
			Id_quarto,
			id_perfil,
			data_add,
			estado
        )
	VALUES(
		v_id_cond_qua,
		v_id_condicao,
		v_Id_quarto,
		v_id_perfil,
		NOW(),
		estado
    );
    END //
DELIMITER ; 
CALL sp_cond_qua_add(1, 1, 1);