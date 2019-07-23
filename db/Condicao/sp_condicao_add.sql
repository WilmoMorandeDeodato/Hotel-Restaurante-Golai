DROP PROCEDURE sp_condicao_add;
DELIMITER //
	CREATE PROCEDURE sp_condicao_add(
		v_id_perfil   INT,
		v_condicao	  VARCHAR(100)
    )
    BEGIN
    DECLARE v_id_condicao  INT;
    DECLARE v_estado       VARCHAR(15) DEFAULT 'Ativo';
	SELECT COUNT(id_condicao) + 1 FROM tb_condicao INTO v_id_condicao;
    INSERT 
		INTO tb_condicao(
			id_condicao,
			id_perfil,
			condicao,
			data_add,
			estado
        )
	VALUES(
		v_id_condicao,
		v_id_perfil,
		v_condicao,
		NOW(),
		v_estado
    );
    END //
DELIMITER ; 
CALL sp_condicao_add(1, 'WDW');