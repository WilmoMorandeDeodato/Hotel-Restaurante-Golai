DROP PROCEDURE sp_tipo_quarto_ver;
DELIMITER //
CREATE PROCEDURE sp_tipo_quarto_ver(
	v_criterio TINYINT,
    v_id_func  INT
	)
	BEGIN
	
    IF v_criterio = 1 THEN
		SELECT 
			t1.*,
			t2.nome
		FROM tb_tipo_qua     AS t1
			JOIN tb_perfil   AS t2 
		ON t1.id_perfil = t2.id_perfil; 
	END IF;

    END //
DELIMITER ;
CALL sp_tipo_quarto_ver(1,1);