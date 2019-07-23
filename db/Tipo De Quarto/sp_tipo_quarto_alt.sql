DROP PROCEDURE sp_tipo_quarto_alt;
DELIMITER //
	CREATE PROCEDURE sp_tipo_quarto_alt(
		v_id_tipo_qua INT,
		v_tipo_qua 	  VARCHAR(80),
		v_estado 	  ENUM('Ativo', 'Inativo')
    )
    BEGIN
    UPDATE 
		tb_tipo_qua
	SET
		id_perfil   = id_perfil,
		tipo_qua    = tipo_qua,
		estado      = estado
	WHERE
		id_tipo_qua = id_tipo_qua;
    END //
DELIMITER ; 
CALL sp_tipo_quarto_alt(1, 'Mondiu', 'Ativo');