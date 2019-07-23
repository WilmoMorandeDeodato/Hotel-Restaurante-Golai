DROP PROCEDURE sp_avaliacao_ver;
DELIMITER //
	CREATE PROCEDURE sp_avaliacao_ver(

    )
    BEGIN

	SELECT *
		FROM tb_avaliacao;
    END //
DELIMITER ; 
CALL sp_avaliacao_ver();