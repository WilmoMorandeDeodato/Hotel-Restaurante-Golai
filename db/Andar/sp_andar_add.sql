DROP PROCEDURE sp_andar_add;
DELIMITER //
	CREATE PROCEDURE sp_andar_add(
		v_id_perfil    INT
    )
    BEGIN
    DECLARE v_id_andar  INT;
    DECLARE v_estado    VARCHAR(15) DEFAULT 'Ativo';
	SELECT COUNT(id_andar) + 1 FROM tb_andar INTO v_id_andar;
    INSERT 
		INTO tb_andar(
			id_andar,
			id_perfil,
			data_add,
			estado
        )
	VALUES(
		v_id_andar,
		v_id_perfil,
		NOW(),
		estado
    );
    END //
DELIMITER ; 
CALL sp_andar_add(1);