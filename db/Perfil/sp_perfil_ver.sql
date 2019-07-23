DROP PROCEDURE sp_perfil_ver;
DELIMITER //
CREATE PROCEDURE sp_perfil_ver(
	v_criterio  TINYINT,
    v_id_perfil INT
	)
	BEGIN
	
    IF v_criterio = 1 THEN
		SELECT 
			t1.*,
			t2.nome,
            t3.categoria
		FROM tb_perfil          AS t1
			JOIN tb_funcionario AS t2
		ON t1.id_perfil    = t2.id_func
			JOIN tb_categoria   AS t3
		ON t1.id_categoria = t3.id_categoria;
	END IF;

    END //
DELIMITER ;
CALL sp_perfil_ver(1,1);