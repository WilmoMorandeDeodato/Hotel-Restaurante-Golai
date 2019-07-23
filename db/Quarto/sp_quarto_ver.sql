DROP PROCEDURE sp_quarto_ver;
DELIMITER //
CREATE PROCEDURE sp_quarto_ver(
	v_criterio   TINYINT,
    v_id_quarto  INT
	)
	BEGIN
	
    IF v_criterio = 2 THEN
		SELECT 
			t1.id_quarto, t1.id_andar, 
            t1.nporta, t1.data_add, t1.estado_qua, t1.estado, 
			t2.tipo_qua,
			t3.nome
		FROM tb_quarto       AS t1
			JOIN tb_tipo_qua AS t2 
		ON t1.id_tipo_qua = t2.id_tipo_qua
			JOIN tb_perfil    AS t3
		ON t1.id_perfil = t3.id_perfil; 
	END IF;
    
        IF v_criterio = 1 THEN
		SELECT 
			t1.id_quarto, t1.id_andar, 
            t1.nporta, t1.data_add, t1.estado_qua, t1.estado, 
			t2.tipo_qua,
			t3.nome
		FROM tb_quarto       AS t1
			JOIN tb_tipo_qua AS t2 
		ON t1.id_tipo_qua   = t2.id_tipo_qua
			JOIN tb_perfil    AS t3
		ON t1.id_perfil     = t3.id_perfil
			WHERE id_quarto = v_id_quarto; 
	END IF;

    END //
DELIMITER ;
CALL sp_quarto_ver(1,1);