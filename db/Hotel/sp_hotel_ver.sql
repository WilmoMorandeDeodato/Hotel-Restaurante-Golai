DROP PROCEDURE sp_hotel_ver;
DELIMITER //
CREATE PROCEDURE sp_hotel_ver(
	v_criterio TINYINT
	)
	BEGIN
	
    IF v_criterio = 1 THEN
		SELECT * FROM tb_hotel; 
	END IF;

    END //
DELIMITER ;
CALL sp_hotel_ver(1);