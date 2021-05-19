![Logo Cake](https://cakephp.org/img/cake-logo.svg)

# Aprendendo Cake PHP

##Repositório destinado a quem  está começando com mvc, frameworks PHP, ler documentação básica e não entender $%#$# nenhuma. 

###Leitura recomendada:
- [x] [MVC](https://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93controller);
- [x] [Documentação Cake](http://cakephp.org/);
- [x] [Documentação Composer](https://getcomposer.org/doc/);
- [x] [Documentação PHP](https://secure.php.net/manual/pt_BR/index.php);
- [x] Saber o nome dos primeiros 150 pokémons;
- [ ] Saber o nome dos outros 9999 novos.


**Nesse exemplo eu vou usar meu Ubuntu 15.04 - Se seu S.O for diferente, não se preocupe. Nos links acima você encontra como instalar o pacote completo do seu (Não use windows, dá câncer)** 

###Instalação obrigatória:
- [x] PHP (Atualmente -  5.5.9);
- [ ] APACHE(Opcional, versões do php a partir do 5.4.0 possuem um servidor web embutido);
- [x] COMPOSER;

###Passo 1 (Instalar uma aplicação cake pelo composer)
####Vamos utilizar o Composer para baixar um projeto inicial:
>Dica: Procure como instalar ele de forma Global, facilita a vida.<br>
>Entre na sua pasta de projetos (ex: var/www/html) e em seguida cole no terminal:
```php
  composer create-project --prefer-dist cakephp/app pokemons
```
<br>
> pokemons é o nome da aplicação que vamos criar.<br>

###Passo 2 (Configurar nossa aplicação)
Se você chegou até aqui sem problemas, entre na pasta do seu projeto ```cd pokemons```<br>
Insira no terminal o comando ```bin/cake server``` <br>
Se tudo der certo, ao abrir seu navegador e digitar http://localhost:8765/ sua aplicação abrirá numa tela com suas configurações aceitáveis e pendências. Como por exemplo a conexão com banco de dados <br>
``` CakePHP is NOT able to connect to the database. ```

Abra sua aplicação com sua IDE favorita e navegue até o arquivo >Config/app.php e altere e procure por ```Datasources ```.
Configure os dados de conexão com o seu banco mysql :)<br>

Agora basta atualizar a sua página e pronto! ``` CakePHP is able to connect to the database. ```

<br>

###Passo 3 (Preparar os schemas e tabelas que iremos trabalhar)
Nesse repositorio, você vai encontrar o arquivo database.sql, com os campos a serem inseridos. Mas se estiver com preguiça(Não, nunca tenha preguiça), basta abrir sua ferramenta de banco de dados preferida(Eu gosto muito do Mysql Workbench) criar o schema que configurou no datasource e colar: <br>
>CREATE TABLE pokemons (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50),
	tipo VARCHAR(50),
    descricao TEXT
);
>INSERT INTO pokemons (nome,tipo,descricao)
    VALUES ('Charmander', 'Fogo', 'Charmander é o pocket monster que eu mais gosto. ') 

###Passo 4(Hora de assar o bolo no forninho, ETA GIOVANNA O FORNINHO CAIU !!!!)
Abra o terminal, ainda na pasta do seu projeto e digite: ``` bin/cake bake all pokemons```<br>
A mágica acontece aqui:<br>
>A partir do seu modelo criado lá no workbench o cake vai gerar os controllers, models e views da sua aplicação. É isso mesmo! <br>

Coloque seu servidor novamente no ar ```bin/cake server ```, acesse a sua url e faça o teste chamando o controller Pokemons: > [http://localhost:8765/pokemons](http://localhost:8765/pokemons)<br>

Agora você já tem um crud funcional, aproveite pra ler o código e entender como estão funcionando as coisas. É uma boa forma de aprender!

Até a próxima.




