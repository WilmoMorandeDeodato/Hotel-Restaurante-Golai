DROP PROCEDURE sp_quarto_alt;
DELIMITER //
	CREATE PROCEDURE sp_quarto_alt(
		v_id_quarto 	 INT,
		v_id_tipo_qua    INT,
		v_id_andar 	     INT, 
		v_estado_qua 	 VARCHAR(20),
		v_estado 		 VARCHAR(15)
    )
    BEGIN
    UPDATE 
		tb_quarto
	SET
		id_tipo_qua = v_id_tipo_qua,
		id_andar 	= v_id_andar, 
		estado_qua 	= v_estado_qua,
		estado 		= v_estado
	WHERE
		id_quarto   = v_id_quarto;
    END //
DELIMITER ; 
CALL sp_quarto_alt(2, 2, 1, 'Ocupado',  'Ativo');