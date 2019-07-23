DROP PROCEDURE sp_fotos_qua_ver;
DELIMITER //
CREATE PROCEDURE sp_fotos_qua_ver(
	v_criterio     TINYINT,
    v_id_foto_qua  INT
	)
	BEGIN

    IF v_criterio = 1 THEN
		SELECT 
			t1.id_foto_qua, t1.foto, t1.data_add, t1.estado,
			t2.id_quarto,
			t3.nome
		FROM tb_foto_qua      AS t1
			JOIN tb_quarto    AS t2 
		ON t1.Id_quarto = t2.Id_quarto
			JOIN tb_perfil    AS t3
		ON t1.id_perfil = t3.id_perfil
			WHERE id_foto_qua = v_id_foto_qua; 
	END IF;

    END //
DELIMITER ;
CALL sp_fotos_qua_ver(1,1);