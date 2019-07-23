DROP PROCEDURE sp_quarto_add;
DELIMITER //
	CREATE PROCEDURE sp_quarto_add(
		v_id_tipo_qua    INT,
		v_id_perfil 	 INT, 
		v_id_andar 	     INT, 
		v_nporta		 INT
    )
    BEGIN
    DECLARE v_id_quarto  INT;
    DECLARE v_estado     VARCHAR(15) DEFAULT 'Ativo';
	SELECT COUNT(id_quarto) + 1 FROM tb_quarto INTO v_id_quarto;
    INSERT 
		INTO tb_quarto(
			id_quarto,
			id_tipo_qua,
			id_perfil, 
			id_andar, 
			nporta,
			data_add,
			estado_qua,
			estado
        )
	VALUES(
		v_id_quarto,
		v_id_tipo_qua,
		v_id_perfil, 
		v_id_andar, 
		v_nporta,
		NOW(),
		estado_qua,
		estado
    );
    END //
DELIMITER ; 
CALL sp_quarto_add(1, 1, 1, 1);