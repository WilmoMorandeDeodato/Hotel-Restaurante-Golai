DROP PROCEDURE sp_fotos_qua_alt;
DELIMITER //
	CREATE PROCEDURE sp_fotos_qua_alt(
		v_id_foto_qua  INT,
		v_foto 		   VARCHAR(100),
		v_data_add     TIMESTAMP,
		v_estado 	   VARCHAR(15)
    )
    BEGIN
    UPDATE 
		tb_foto_qua
	SET
		foto 	    = v_foto,
		data_add    = v_data_add,
		estado 	    = v_estado   
	WHERE
		id_foto_qua = v_id_foto_qua;
    END //
DELIMITER ; 
CALL sp_fotos_qua_alt(1, '','2000-09-09', 'Ativo');