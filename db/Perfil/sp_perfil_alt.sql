DROP PROCEDURE sp_perfil_alt;
DELIMITER //
	CREATE PROCEDURE sp_perfil_alt(
		v_id_perfil    INT,
		v_id_categoria INT,
		v_tel 		   BIGINT,
		v_nome 		   VARCHAR(80),
		v_senha 	   VARCHAR(100),
		v_estado 	   ENUM('Ativo', 'Inativo')
    )
    BEGIN
    UPDATE 
		tb_perfil
	SET
		id_categoria = v_id_categoria,
		tel 		= v_tel,
		nome 		= v_nome,
		senha 	    = v_senha,
		estado  	= v_estado
	WHERE
		id_perfil   = v_id_perfil;
    END //
DELIMITER ; 
CALL sp_perfil_alt(1, 2, 1,'Wilmo', 'DWWWSWS323', 'Ativo');