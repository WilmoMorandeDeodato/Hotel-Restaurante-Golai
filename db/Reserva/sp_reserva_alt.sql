DROP PROCEDURE sp_reserva_alt;
DELIMITER //
	CREATE PROCEDURE sp_reserva_alt(
		v_id_reserva   INT,
	    v_estado_res   ENUM('Pendente', 'Efectuada'),
		v_estado 	   ENUM('Ativo', 'Inativo')
    )
    BEGIN
    UPDATE 
		tb_reserva
	SET
		estado_res   = v_id_hotel,
		estado       = v_estado
	WHERE
		id_reserva = v_id_reserva;
    END //
DELIMITER ; 
CALL sp_reserva_alt(1, 'Efectuada','Inativo');