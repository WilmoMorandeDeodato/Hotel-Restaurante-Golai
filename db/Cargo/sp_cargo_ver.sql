DROP PROCEDURE sp_cargo_ver;
DELIMITER //
CREATE PROCEDURE sp_cargo_ver(
	v_criterio TINYINT
	)
	BEGIN
	
    IF v_criterio = 1 THEN
		SELECT * FROM tb_cargo; 
	END IF;

    END //
DELIMITER ;
CALL sp_cargo_ver(1);