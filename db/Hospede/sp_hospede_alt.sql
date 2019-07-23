DROP PROCEDURE sp_hospede_alt;
DELIMITER //
	CREATE PROCEDURE sp_hospede_alt(
		v_id_hospede   INT,
		v_estado 	   VARCHAR(15)
    )
    BEGIN
    UPDATE 
		tb_hospede
	SET
		estado     = v_estado
	WHERE
		id_hospede = v_id_hospede;
    END //
DELIMITER ; 
CALL sp_hospede_alt(1, 'Ativo');