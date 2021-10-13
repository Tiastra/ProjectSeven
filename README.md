# ProjectSeven
**CRUD desenvolvido em PHP, PDO e W3CSS**

***

**Ambiente**

Para executar o projeto é necessário ter o MySQL e um servidor local instalado (Como o Apache por exemplo). A forma mais fácil de atender os requisitos é através da instalação do [XAMPP](https://www.apachefriends.org/download.html).

É necessário também o [Composer](https://getcomposer.org/download/), para gerenciar o autoload das classes.


**Banco de Dados**

O [script](https://github.com/Tiastra/ProjectSeven/blob/main/SQL%20ProjectSeven.sql) para a criação do Banco de Dados para a aplicação se encontra na raiz do projeto. Crie uma nova database e execute o script.

O arquivo responsável pela conexão com o Banco se chama [ConectionPS.php](https://github.com/Tiastra/ProjectSeven/blob/main/app/db/ConectionPS.php) e se encontra  na pasta app/db. A função setConnection() deste arquivo contém a string de conexão (HOST, NAME, USER e PASS) com o Banco de Dados e caso seja necessário, deve-se fazer a mudança das informações.


**Executando o Projeto**

Para rodar o Projeto é necessário ainda acessar a pasta ProjectSeven, abrir o terminal e executar:

    composer install

\* caso esteja usando o XAMPP, copie a pasta do projeto para dentro da pasta htdocs e acesse pela URL: localhost/nomeDoProjeto. 
