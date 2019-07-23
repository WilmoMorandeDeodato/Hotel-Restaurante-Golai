DROP PROCEDURE sp_hotel_add;
DELIMITER //
	CREATE PROCEDURE sp_hotel_add(
		v_localizacao VARCHAR(1000),
		v_gerente 	VARCHAR(80),
		v_data_ina	DATE
    )
    BEGIN
    DECLARE v_auto_id    INT;
    DECLARE v_estado     VARCHAR(15) DEFAULT 'Ativo';
	SELECT COUNT(id_hotel) + 1 FROM tb_hotel INTO v_auto_id;
    INSERT 
		INTO tb_hotel(
			 id_hotel, 
             localizacao,
             gerente,
             data_ina,
             data_add,
             estado 		
        )
	VALUES(
		v_auto_id, 
		v_localizacao,
		v_gerente, 
		v_data_ina,
		NOW(),
		v_estado 	 	 
    );
    END //
DELIMITER ; 
CALL sp_hotel_add('','','2000-06-04');