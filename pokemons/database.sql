
CREATE TABLE pokemons (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50),
	tipo VARCHAR(50),
    descricao TEXT
);

INSERT INTO pokemons (nome,tipo,descricao)
    VALUES ('Charmander', 'Fogo', 'Charmander é o pocket monster que eu mais gosto. ')
