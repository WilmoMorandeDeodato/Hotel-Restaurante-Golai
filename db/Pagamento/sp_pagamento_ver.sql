DROP PROCEDURE sp_pagamento_ver;
DELIMITER //
CREATE PROCEDURE sp_pagamento_ver(
	v_criterio      TINYINT,
    v_id_pagamento  INT
	)
	BEGIN

    IF v_criterio = 1 THEN
		SELECT 
			t1.*,
			t2.id_reserva
		FROM tb_pagamento      AS t1
			JOIN tb_reserva    AS t2 
		ON t1.id_reserva = t2.id_reserva; 
	END IF;

    END //
DELIMITER ;
CALL sp_pagamento_ver(1,1);