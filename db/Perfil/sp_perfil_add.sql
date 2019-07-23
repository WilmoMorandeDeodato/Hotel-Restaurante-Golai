DROP PROCEDURE sp_perfil_add;
DELIMITER //
	CREATE PROCEDURE sp_perfil_add(
		v_id_func      INT,
		v_id_categoria INT,
		v_tel 		   BIGINT,
		v_nome 		   VARCHAR(80),
		v_senha 	   VARCHAR(100)
    )
    BEGIN
    DECLARE v_id_perfil  INT;
    DECLARE v_estado     VARCHAR(15) DEFAULT 'Ativo';
	SELECT COUNT(id_perfil) + 1 FROM tb_perfil INTO v_id_perfil;
    INSERT 
		INTO tb_perfil(
			id_perfil,
			id_func,
			id_categoria,
			tel,
			nome,
			senha,
			data_cri,
			estado
        )
	VALUES(
		v_id_perfil,
		v_id_func,
		v_id_categoria,
		v_tel,
		v_nome,
		v_senha,
		NOW(),
		v_estado
    );
    END //
DELIMITER ; 
CALL sp_perfil_add(1, 1, 1, 'WDW', 'DWWWSWS323');