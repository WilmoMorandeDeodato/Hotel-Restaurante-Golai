DROP PROCEDURE sp_categoria_alt;
DELIMITER //
	CREATE PROCEDURE sp_categoria_alt(
		v_id_categoria INT,
		v_categoria	   VARCHAR(100),
		v_estado 	   ENUM('Ativo', 'Inativo')
    )
    BEGIN
    UPDATE 
		tb_categoria
	SET
		categoria     = v_categoria,
		estado        = v_estado
	WHERE
		id_categoria  = v_id_categoria;
    END //
DELIMITER ; 
CALL sp_categoria_alt(1, 'Wilmo Mondiu', 'Ativo');