DROP PROCEDURE sp_reserva_ver;
DELIMITER //
CREATE PROCEDURE sp_reserva_ver(
	v_criterio   TINYINT,
    v_id_reserva INT,
    v_id_cliente  INT
	)
	BEGIN
	
    IF v_criterio = 1 THEN
		SELECT 
			t1.id_reserva,
            t2.id_quarto,
            t3.id_cliente, t3.nome,
			t4.Valor, t4.via, t4.data_pag
		FROM tb_reserva       AS t1
			JOIN tb_quarto    AS t2 
		ON t1.id_quarto = t2.id_quarto
			JOIN tb_cliente   AS t3
		ON t1.id_cliente = t3.id_cliente
			JOIN tb_pagamento AS t4
		ON t1.id_reserva = t4.id_reserva; 
	END IF;
    
	IF v_criterio = 2 THEN
		SELECT id_reserva, id_cliente, id_quarto, data_res, estado_res, estado 
			FROM tb_reserva
            WHERE id_cliente = v_id_cliente; 
	END IF;
    
    END //
DELIMITER ;
CALL sp_reserva_ver(2, 1, 2);