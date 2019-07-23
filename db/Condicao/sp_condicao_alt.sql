DROP PROCEDURE sp_condicao_alt;
DELIMITER //
	CREATE PROCEDURE sp_condicao_alt(
		v_id_condicao  INT,
		v_condicao	   VARCHAR(100),
		v_estado 	   ENUM('Ativo', 'Inativo')
    )
    BEGIN
    UPDATE 
		tb_condicao
	SET
		condicao    = v_condicao,
		estado 	    = v_estado	 
	WHERE
		id_condicao = v_id_condicao;
    END //
DELIMITER ; 
CALL sp_condicao_alt(1, 'Wilmo Mondiu', 'Ativo');