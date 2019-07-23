DROP PROCEDURE sp_hospede_add;
DELIMITER //
	CREATE PROCEDURE sp_hospede_add(
		v_id_cliente   INT,
		v_id_reserva   INT,
		v_id_quarto    INT,
		v_Id_perfil	   INT,
		v_data_ent	   DATETIME,
		v_data_sai 	   DATETIME
    )
    BEGIN
    DECLARE v_id_hospede  INT;
    DECLARE v_estado       VARCHAR(15) DEFAULT 'Ativo';
	SELECT COUNT(id_hospede) + 1 FROM tb_hospede INTO v_id_hospede;
    INSERT 
		INTO tb_hospede(
			id_hospede,
			id_cliente,
			id_reserva,
			id_quarto,
			Id_perfil,
			data_ent,
			data_sai,
			estado
        )
	VALUES(
		v_id_hospede,
		v_id_cliente,
		v_id_reserva,
		v_id_quarto,
		v_Id_perfil,
		v_data_ent,
		v_data_sai,
		estado
    );
    END //
DELIMITER ; 
CALL sp_hospede_add(1, 1, 1, 1, '2000-09-09', '2000-09-09');