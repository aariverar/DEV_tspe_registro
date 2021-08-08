CREATE TABLE tspe_registros (
    idusuario INT(10) NOT NULL,
    usuario VARCHAR(16) NOT NULL,
    password VARCHAR(20) NOT NULL
);

ALTER TABLE tspe_registros
    ADD PRIMARY KEY(idusuario);

ALTER TABLE tspe_registros
    MODIFY  idusuario INT(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 2;

DESCRIBE tspe_registros;

INSERT INTO tspe_registros (idusuario, usuario, password)
    VALUES (1, 'abraham', 'rivera');

SELECT * FROM tspe_registros;