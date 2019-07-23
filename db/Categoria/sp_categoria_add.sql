DROP PROCEDURE sp_categoria_add;
DELIMITER //
	CREATE PROCEDURE sp_categoria_add(
		v_categoria	 VARCHAR(100)
    )
    BEGIN
    DECLARE v_id_categoria  INT;
    DECLARE v_estado        VARCHAR(15) DEFAULT 'Ativo';
	SELECT COUNT(id_categoria) + 1 FROM tb_categoria INTO v_id_categoria;
    INSERT 
		INTO tb_categoria(
			id_categoria,
			categoria,
			data_add,
			estado
        )
	VALUES(
		v_id_categoria,
		v_categoria,
		NOW(),
		v_estado
    );
    END //
DELIMITER ; 
CALL sp_categoria_add('DWWWSWS323');