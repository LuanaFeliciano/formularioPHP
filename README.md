<h1 align="center"> Formulário PHP </h1>

<p align="center">
Atividade feita para o estudo de como conectar algo em um banco de dados. Ao enviar o formulário as informações são armazenadas.<br/>
</p>

## 👩🏽‍💻 Tecnologias

Tecnologias:

- HTML
- Git e Github
- PHP
- MySQL

## 💻 Passos

- Foi criado um banco de dados
- É feita a conexão do banco no arquivo bd.php colocando o Host, Username do Banco, Senha e Nome do Banco. Guarde na variável conexão a classe mysqli com tudo acima.
- Definir o método do formulário como POST
- Verificar se houve um submit, se houver é salvo no Banco de Dados
- Pegamos cada informação do formulário com o Post
- incluimos a conexão do Banco no arquivo formulario.php com o include_once('db.php')
- Contruímos a query (INSERT INTO(as colunas do banco de dados) VALUES( as variaveis que guardamos cada informação do form ))

