DROP PROCEDURE sp_categoria_ver;
DELIMITER //
CREATE PROCEDURE sp_categoria_ver(
	v_criterio      TINYINT,
    v_id_categoria  INT
	)
	BEGIN
	
    IF v_criterio = 1 THEN
		SELECT * FROM tb_categoria; 
	END IF;
    
	IF v_criterio = 2 THEN
		SELECT * 
			FROM tb_categoria
		WHERE id_categoria = v_id_categoria; 
	END IF;
    
	IF v_criterio = 3 THEN
		SELECT * 
			FROM tb_categoria
		WHERE estado = 'Ativo'; 
	END IF;
    
	IF v_criterio = 4 THEN
		SELECT * 
			FROM tb_categoria
		WHERE estado = 'Inaivo'; 
	END IF;

    END //
DELIMITER ;
CALL sp_categoria_ver(1,1);