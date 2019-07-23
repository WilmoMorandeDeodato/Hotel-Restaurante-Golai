DROP PROCEDURE sp_tipo_quarto_add;
DELIMITER //
	CREATE PROCEDURE sp_tipo_quarto_add(
		v_id_perfil    INT,
		v_tipo_qua 	   VARCHAR(80)
    )
    BEGIN
    DECLARE v_id_tipo_qua  INT;
    DECLARE v_estado       VARCHAR(15) DEFAULT 'Ativo';
	SELECT COUNT(id_tipo_qua) + 1 FROM tb_tipo_qua INTO v_id_tipo_qua;
    INSERT 
		INTO tb_tipo_qua(
				id_tipo_qua,
				id_perfil,
				tipo_qua,
				data_add,
				estado
        )
	VALUES(
		v_id_tipo_qua,
		v_id_perfil,
		v_tipo_qua,
		NOW(),
		v_estado
    );
    END //
DELIMITER ; 
CALL sp_tipo_quarto_add(1, 'Solteiro');