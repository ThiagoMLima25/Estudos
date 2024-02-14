USE dbphp7;

CREATE TABLE tb_usuarios (
	idUsuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    loginUsuario VARCHAR(64) NOT NULL,
    senhaUsuario VARCHAR(256) NOT NULL,
    dataCadastroUsuario TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()
);

INSERT INTO tb_usuarios (loginUsuario, senhaUsuario) VALUES ('root', '123456');

SELECT * FROM tb_usuarios;

UPDATE tb_usuarios SET senhaUsuario = 123 WHERE idUsuario = 1;

DELETE FROM tb_usuarios WHERE idUsuario = 1;

TRUNCATE TABLE tb_usuarios;