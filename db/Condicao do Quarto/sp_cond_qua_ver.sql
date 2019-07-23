DROP PROCEDURE sp_cond_qua_ver;
DELIMITER //
CREATE PROCEDURE sp_cond_qua_ver(
	v_criterio TINYINT,
    v_id_func  INT
	)
	BEGIN
	
    IF v_criterio = 1 THEN
		SELECT 
			t1.id_cond_qua, t1.Id_quarto, t1.data_add, t1.estado,
			t2.condicao,
			t3.id_quarto,
			t4.nome
		FROM tb_cond_qua        AS t1
			JOIN tb_condicao    AS t2 
		ON t1.id_condicao = t2.id_condicao
			JOIN tb_quarto   	AS t3
		ON t1.Id_quarto   = t3.Id_quarto
			JOIN tb_perfil      AS t4
		ON t1.id_perfil   = t4.id_perfil; 
	END IF;

    END //
DELIMITER ;
CALL sp_cond_qua_ver(1,1);