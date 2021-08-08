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


CREATE TABLE aplicaciones (
    IdApp INT(10) NOT NULL,
    Cod_Cliente VARCHAR(20) NOT NULL,
    Nombre_App VARCHAR(50) NOT NULL
);

ALTER TABLE aplicaciones
    ADD PRIMARY KEY(IdApp);

ALTER TABLE aplicaciones
    MODIFY  IdApp INT(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 2;

CREATE TABLE colaboradores (
    IdColaborador INT(10) NOT NULL,
    Nombre_Completo VARCHAR(50) NOT NULL,
    Cargo VARCHAR(50) NOT NULL
);

ALTER TABLE colaboradores
    ADD PRIMARY KEY(IdColaborador);

ALTER TABLE colaboradores
    MODIFY  IdColaborador INT(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 2;

    show tables;