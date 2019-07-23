DROP PROCEDURE sp_visitante_add;
DELIMITER //
	CREATE PROCEDURE sp_visitante_add(
		v_id_hotel 	 INT,
		v_ip 		 VARCHAR(15),
		v_navegador  VARCHAR(30),
		v_sistema 	 VARCHAR(30)
    )
    BEGIN
    DECLARE v_auto_id  INT;
	SELECT COUNT(id_visitante) + 1 FROM tb_visitante INTO v_auto_id;
    INSERT 
		INTO tb_visitante(
			id_visitante, id_hotel, ip, navegador, sistema, data_ace 	 
        )
	VALUES(
			v_auto_id, v_id_hotel, v_ip, v_navegador, v_sistema, NOW() 	 
    );
    END //
DELIMITER ; 
CALL sp_visitante_add(1,'','','');