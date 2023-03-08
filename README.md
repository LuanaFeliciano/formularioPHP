<img width="150px" height="100px" align="right" src="https://user-images.githubusercontent.com/98564118/223809453-76cc9406-89ee-462f-846a-c471f7e961dc.png">  <h1 align="center"> Formulário - PHP </h1>

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
- Foi feita a conexão do banco no arquivo bd.php colocando o Host, Username do Banco, Senha e Nome do Banco. Guarde na variável conexão a classe mysqli com tudo acima.
- Defini o método do formulário como POST
- Verifiquei se houve um submit, se houve é salvo no Banco de Dados
- Peguei cada informação do formulário com o Post
- Incluí a conexão do Banco no arquivo formulario.php com o include_once('db.php')
- Construí a query (INSERT INTO(as colunas do banco de dados) VALUES( as variaveis que guardamos cada informação do form ))

