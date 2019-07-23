DROP PROCEDURE sp_hotel_alt;
DELIMITER //
	CREATE PROCEDURE sp_hotel_alt(
		v_id_hotel 	  INT,
		v_localizacao VARCHAR(1000),
		v_gerente     VARCHAR(80),
		v_data_ina	  DATE,       
		v_estado 	  ENUM('Ativo', 'Inativo')
    )
    BEGIN

    UPDATE 
		tb_hotel
	SET
		localizacao  = v_localizacao,
		gerente      = v_gerente,
		data_ina     = v_data_ina,
		estado       = v_estado
	WHERE
		id_hotel     = v_id_hotel;
    END //
DELIMITER ; 
CALL sp_hotel_alt(1, 'Ramirus', 'Aquele pai', '2000-09-09', 'Ativo');