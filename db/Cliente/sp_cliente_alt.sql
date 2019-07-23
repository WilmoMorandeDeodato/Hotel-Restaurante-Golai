DROP PROCEDURE sp_cliente_alt;
DELIMITER //
	CREATE PROCEDURE sp_cliente_alt(
			v_id_cliente INT,
			v_nome 		 VARCHAR(80),
			v_nbi 		 VARCHAR(15),
			v_tel 		 BIGINT,
			v_email 	 VARCHAR(100),
			v_senha	     VARCHAR(100)
			#v_estado 	 ENUM('Ativo', 'Inativo')
    )
    BEGIN
    UPDATE 
		tb_cliente
	SET
		nome 		 = v_nome,
		nbi 		 = v_nbi,
		tel 		 = v_tel,
		email 	     = v_email,
		senha	     = v_senha
		#estado 	     = v_estado
	WHERE
		id_cliente   = v_id_cliente;
    END //
DELIMITER ; 
CALL sp_cliente_alt(1, 'Wilmo Mondiu', 'DWWWSWS323',9222222, '', '');