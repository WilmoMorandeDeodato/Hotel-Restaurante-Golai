DROP PROCEDURE sp_pagamento_alt;
DELIMITER //
	CREATE PROCEDURE sp_pagamento_alt(
		v_id_pagamento INT,
		v_estado 	   VARCHAR(15)
    )
    BEGIN
    UPDATE 
		tb_pagamento
	SET
		estado 	     = v_estado   
	WHERE
		id_pagamento = v_id_pagamento;
    END //
DELIMITER ; 
CALL sp_pagamento_alt(1, 'Ativo');