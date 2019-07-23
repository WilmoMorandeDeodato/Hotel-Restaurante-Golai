DROP PROCEDURE sp_cargo_alt;
DELIMITER //
	CREATE PROCEDURE sp_cargo_alt(
		v_id_cargo 	INT,
		v_cargo 	VARCHAR(100),
		v_estado 	ENUM('Ativo', 'Inativo')
    )
    BEGIN
    UPDATE 
		tb_cargo
	SET
		cargo     = v_cargo,
		estado    = v_estado
	WHERE
		id_cargo  = v_id_cargo;
    END //
DELIMITER ; 
CALL sp_cargo_alt(1, 'De limpá', 'Ativo');