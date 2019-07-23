DROP PROCEDURE sp_fotos_qua_add;
DELIMITER //
	CREATE PROCEDURE sp_fotos_qua_add(
		v_Id_quarto    INT,
		v_id_perfil    INT,
		v_foto 		   VARCHAR(100)
    )
    BEGIN
    DECLARE v_id_foto_qua  INT;
    DECLARE v_estado       VARCHAR(15) DEFAULT 'Ativo';
	SELECT COUNT(id_foto_qua) + 1 FROM tb_foto_qua INTO v_id_foto_qua;
    INSERT 
		INTO tb_foto_qua(
			id_foto_qua,
			Id_quarto,
			id_perfil,
			foto,
			data_add,
			estado
        )
	VALUES(
		v_id_foto_qua,
		v_Id_quarto,
		v_id_perfil,
		v_foto,
		NOW(),
		estado
    );
    END //
DELIMITER ; 
CALL sp_fotos_qua_add(1, 1,'WDW');