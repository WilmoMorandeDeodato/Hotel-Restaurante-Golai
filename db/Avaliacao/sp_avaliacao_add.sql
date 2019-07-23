DROP PROCEDURE sp_avaliacao_add;
DELIMITER //
	CREATE PROCEDURE sp_avaliacao_add(
		v_id_hotel 	   INT,
		v_nome 	       VARCHAR(15),
		v_comentario   VARCHAR(100)
    )
    BEGIN
    DECLARE v_id_avaliacao, v_id_visitante  INT;
	SELECT COUNT(id_avaliacao) + 1 FROM tb_avaliacao INTO v_id_avaliacao;
    SELECT MAX(id_visitante) FROM tb_visitante INTO v_id_visitante;
    INSERT 
		INTO tb_avaliacao(
				id_avaliacao,
				id_hotel,
				id_visitante,
				nome,
				comentario,
				data_ava ,
                estado
        )
	VALUES(
			v_id_avaliacao,
			v_id_hotel,
			v_id_visitante,
			v_nome,
			v_comentario,
			NOW(),
			estado	 
    );
    END //
DELIMITER ; 
CALL sp_avaliacao_add(1, '1', 'Diogo', 'Prestação de serviços mais eficaz!');