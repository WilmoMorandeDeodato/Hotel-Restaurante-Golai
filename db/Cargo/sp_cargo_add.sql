DROP PROCEDURE sp_cargo_add;
DELIMITER //
	CREATE PROCEDURE sp_cargo_add(
		v_cargo 	VARCHAR(100)
    )
    BEGIN
    DECLARE v_id_cargo  INT;
    DECLARE v_estado    VARCHAR(15) DEFAULT 'Ativo';
	SELECT COUNT(id_cargo) + 1 FROM tb_cargo INTO v_id_cargo;
    INSERT 
		INTO tb_cargo(
			id_cargo,
			cargo,
			data_add,
			estado
        )
	VALUES(
		v_id_cargo,
		v_cargo,
		NOW(),
		v_estado 	
    );
    END //
DELIMITER ; 
CALL sp_cargo_add('Gerente');