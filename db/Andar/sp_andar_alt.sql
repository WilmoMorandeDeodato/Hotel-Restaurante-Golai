DROP PROCEDURE sp_andar_alt;
DELIMITER //
	CREATE PROCEDURE sp_andar_alt(
		v_id_andar     INT,
		v_estado 	   VARCHAR(15)
    )
    BEGIN
    UPDATE 
		tb_andar
	SET
		estado    = v_estado
	WHERE
		id_andar  = v_id_andar;
    END //
DELIMITER ; 
CALL sp_andar_alt(1, 'Ativo');