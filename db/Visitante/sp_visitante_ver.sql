DROP PROCEDURE sp_visitante_ver;
DELIMITER //
	CREATE PROCEDURE sp_visitante_ver(
		v_criterio TINYINT
    )
    BEGIN

	IF v_criterio = 1 THEN
		SELECT * FROM tb_visitante; 
	END IF;
        
	IF v_criterio = 2 THEN
		SELECT MAX(id_visitante) AS idV FROM tb_visitante; 
	END IF;
    
    END //
DELIMITER ; 
CALL sp_visitante_ver(2);