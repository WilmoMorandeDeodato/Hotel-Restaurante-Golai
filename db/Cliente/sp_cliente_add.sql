DROP PROCEDURE sp_cliente_add;
DELIMITER //
	CREATE PROCEDURE sp_cliente_add(
		v_nome 		   VARCHAR(80),
		v_tel 		   BIGINT,
		v_senha	       VARCHAR(100),
		v_ip 		   VARCHAR(15)
    )
    BEGIN
        DECLARE v_data_add   TIMESTAMP;
		DECLARE v_estado     VARCHAR(5) DEFAULT 'Ativo';
        DECLARE v_auto_id, v_id_visitante	 INT;

        SELECT COUNT(id_cliente) + 1 FROM tb_cliente INTO v_auto_id;
        SELECT id_visitante FROM tb_visitante WHERE ip=v_ip INTO v_id_visitante;
		INSERT INTO tb_cliente(
					id_cliente, id_visitante, nome, nbi, tel, 
					email, senha, data_nasc, data_add, estado
		) VALUES (
					v_auto_id, v_id_visitante, v_nome, nbi, v_tel,
					email, v_senha, data_nasc, NOW(), v_estado
			);			
	END //
DELIMITER ;
CALL sp_cliente_add('', 8752, '', '');