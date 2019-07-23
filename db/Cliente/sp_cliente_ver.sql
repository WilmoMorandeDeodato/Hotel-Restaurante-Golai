DROP PROCEDURE sp_cliente_ver;
DELIMITER //
CREATE PROCEDURE sp_cliente_ver(
	v_criterio TINYINT,
    id_cliente INT
	)
	BEGIN
	
    IF v_criterio = 1 THEN
		SELECT * FROM tb_cliente;
	END IF;
    
    END //
DELIMITER ;
CALL sp_cliente_ver(1,1);