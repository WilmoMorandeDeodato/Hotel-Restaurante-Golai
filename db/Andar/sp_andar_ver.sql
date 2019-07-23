DROP PROCEDURE sp_andar_ver;
DELIMITER //
CREATE PROCEDURE sp_andar_ver(
	v_criterio TINYINT,
    v_id_func  INT
	)
	BEGIN
	
    IF v_criterio = 1 THEN
		SELECT 
			t1.id_andar,  t1.data_add, t1.estado,
			t2.nome
		FROM tb_andar        AS t1
			JOIN tb_perfil   AS t2 
		ON t1.id_perfil = t2.id_perfil; 
	END IF;

    END //
DELIMITER ;
CALL sp_andar_ver(1,1);