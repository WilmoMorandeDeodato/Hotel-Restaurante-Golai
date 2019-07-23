DROP PROCEDURE sp_funcionario_ver;
DELIMITER //
CREATE PROCEDURE sp_funcionario_ver(
	v_criterio TINYINT,
    v_id_func  INT
	)
	BEGIN
	
    IF v_criterio = 1 THEN
		SELECT 
			t1.nome, t1.nbi, t1.tel1, t1.tel2, t1.data_nasc, t1.data_add, t1.estado,
			t2.cargo,
			t3.localizacao
		FROM tb_funcionario  AS t1
			JOIN tb_cargo    AS t2 
		ON t1.id_cargo = t2.id_cargo
			JOIN tb_hotel    AS t3
		ON t1.id_hotel = t3.id_hotel; 
	END IF;
	IF v_criterio = 2 THEN
		SELECT 
			t1.nome, t1.nbi, t1.tel1, t1.tel2, t1.data_nasc, t1.data_add, t1.estado,
			t2.cargo,
			t3.localizacao
		FROM tb_funcionario  AS t1
			JOIN tb_cargo    AS t2 
		ON t1.id_cargo = t2.id_cargo
			JOIN tb_hotel    AS t3
		ON t1.id_hotel = t3.id_hotel
			WHERE t1.id_func = v_id_func;
	END IF;
	IF v_criterio = 3 THEN
		SELECT 
			t1.nome, t1.nbi, t1.tel1, t1.tel2, t1.data_nasc, t1.data_add, t1.estado,
			t2.cargo,
			t3.localizacao
		FROM tb_funcionario  AS t1
			JOIN tb_cargo    AS t2 
		ON t1.id_cargo = t2.id_cargo
			JOIN tb_hotel    AS t3
		ON t1.id_hotel = t3.id_hotel
			WHERE t1.estado = 'Ativo';
	END IF;
    	IF v_criterio = 4 THEN
		SELECT 
			t1.nome, t1.nbi, t1.tel1, t1.tel2, t1.data_nasc, t1.data_add, t1.estado,
			t2.cargo,
			t3.localizacao
		FROM tb_funcionario  AS t1
			JOIN tb_cargo    AS t2 
		ON t1.id_cargo = t2.id_cargo
			JOIN tb_hotel    AS t3
		ON t1.id_hotel = t3.id_hotel
			WHERE t1.estado = 'Inativo';
	END IF;
    END //
DELIMITER ;
CALL sp_funcionario_ver(1,1);