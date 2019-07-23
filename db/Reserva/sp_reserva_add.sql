DROP PROCEDURE sp_reserva_add;
DELIMITER //
	CREATE PROCEDURE sp_reserva_add(
		v_id_cliente   INT,
		v_id_quarto    INT,
		v_Valor        DECIMAL(6,2),
		v_via          VARCHAR(80)
    )
    BEGIN
        DECLARE v_data_res   timestamp;
		DECLARE v_estado_res VARCHAR(10) DEFAULT 'Pendente';
		DECLARE v_estado     VARCHAR(5)  DEFAULT 'Ativo';
        DECLARE v_auto_id, v_auto_id2	 INT;

        SELECT COUNT(id_reserva)   + 1 FROM tb_reserva   INTO v_auto_id;
        SELECT COUNT(id_pagamento) + 1 FROM tb_pagamento INTO v_auto_id2;
		
        START TRANSACTION;
			INSERT INTO tb_reserva(
					id_reserva, 
					id_cliente,
					id_quarto,
					data_res,
					estado_res,
					estado
			) VALUES (
				v_auto_id,
                v_id_cliente,
                v_id_quarto,
                NOW(),
                v_estado_res,
                v_estado
				);
			IF ROW_COUNT() >= 1 THEN
			INSERT INTO tb_pagamento(
					id_pagamento,
					id_reserva,
					Valor,
					via,
					data_pag,
					estado 		
			) VALUES (
				v_auto_id2,
				v_auto_id,
				v_Valor,
				v_via,
				NOW(),
				v_estado 	
				);
                COMMIT;
            ELSE
				ROLLBACK;
            END IF;
	END //
DELIMITER ;
CALL sp_reserva_add(1, 101, 800.00, 'PayPal');