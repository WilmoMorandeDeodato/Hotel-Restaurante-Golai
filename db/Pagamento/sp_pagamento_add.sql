DROP PROCEDURE sp_pagamento_add;
DELIMITER //
	CREATE PROCEDURE sp_pagamento_add(
		v_id_reserva   INT,
		v_Valor        DECIMAL(6,2),
		v_via          VARCHAR(80)
    )
    BEGIN
    DECLARE v_id_pagamento INT;
    DECLARE v_estado       VARCHAR(15) DEFAULT 'Ativo';
	SELECT COUNT(id_pagamento) + 1 FROM tb_pagamento INTO v_id_pagamento;
    INSERT 
		INTO tb_pagamento(
			id_pagamento,
			id_reserva,
			Valor,
			via,
			data_pag,
			estado
        )
	VALUES(
		v_id_pagamento,
		v_id_reserva,
		v_Valor,
		v_via,
		NOW(),
		estado
    );
    END //
DELIMITER ; 
CALL sp_pagamento_add(1, 100.60,'Paypal');