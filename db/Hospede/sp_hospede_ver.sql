DROP PROCEDURE sp_hospede_ver;
DELIMITER //
CREATE PROCEDURE sp_hospede_ver(
	v_criterio    TINYINT,
    v_id_hospede  INT
	)
	BEGIN
	
    IF v_criterio = 1 THEN
		SELECT 
			t1.id_hospede,  t1.data_ent, t1.data_sai, t1.estado,
			t2.nome,
			t3.id_reserva,
			t4.id_quarto,
			t5.nome
            
		FROM tb_hospede        AS t1
			JOIN tb_cliente    AS t2 
		ON t1.id_cliente  = t2.id_cliente
        
			JOIN tb_reserva    AS t3
		ON t1.id_reserva  = t3.id_reserva
        
			JOIN tb_quarto     AS t4
		ON t1.id_quarto   = t4.id_quarto
        
			JOIN tb_perfil     AS t5
		ON t1.Id_perfil   = t5.Id_perfil; 
	END IF;
    
    
    
    
	IF v_criterio = 2 THEN
		SELECT 
			t1.id_hospede,  t1.data_ent, t1.data_sai, t1.estado,
			t2.nome,
			t3.id_reserva,
			t4.id_quarto,
			t5.nome
            
		FROM tb_hospede        AS t1
			JOIN tb_cliente    AS t2 
		ON t1.id_cliente  = t2.id_cliente
        
			JOIN tb_reserva    AS t3
		ON t1.id_reserva  = t3.id_reserva
        
			JOIN tb_quarto     AS t4
		ON t1.id_quarto   = t4.id_quarto
        
			JOIN tb_perfil     AS t5
		ON t1.Id_perfil   = t5.Id_perfil
			WHERE id_hospede = v_id_hospede; 
	END IF;

    END //
DELIMITER ;
CALL sp_hospede_ver(1,1);