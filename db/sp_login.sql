DROP PROCEDURE sp_login;
DELIMITER //
CREATE PROCEDURE sp_login(
	v_tel_email   VARCHAR(80),
    v_senha 	  VARCHAR(100),
    v_criterio    TINYINT
)
	BEGIN
    
		DECLARE  v_conta_resultado TINYINT;
        
		IF v_criterio = 1 THEN
			SELECT *
				FROM tb_cliente
			WHERE    tel=v_tel_email   AND senha=v_senha AND estado='Ativo'
				OR   email=v_tel_email AND senha=v_senha AND estado='Ativo'; 
		END IF;
        
        
		IF v_criterio = 2 THEN
			SELECT 
				*
				FROM tb_perfil
			WHERE    tel=v_tel_email AND senha=v_senha AND estado='Ativo'; 
		END IF;
        
    END //
DELIMITER ;
CALL sp_login('','', 1);