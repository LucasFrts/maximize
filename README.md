<h2>Passos para execução do projeto</h2>
<p>Primeiramente, é essencial conectar o seu banco de dados no .env seguindo o seguinte padrão:</p>
<code>
DB_CONNECTION=mysql 
DB_HOST=127.0.0.1 
DB_PORT=3306 
DB_DATABASE=seu_banco_de_dados 
DB_USERNAME=seu_usuario 
DB_PASSWORD=sua_senha
</code>

<p>Caso você não possua um banco de dados para realizar a conexão,segue o passo a passo para criação do banco de dados mysql no ambiente ubuntu 22.04</p>

<strong>Requisitos:</strong>
<ul>
    <li>S.O. Ubuntu 22.04</li>
    <li>Mysql instalado</li>
</ul>

<h3>Passo 1</h3>
<code>mysql -u root -p</code>
<p>Vamos utiliar o seguinte comando para acessar o mysql utilizando o usuário root. Ao executar esse comando, será necessário preencher a senha para continuar</p>
<h2>Uma vez no ambiente do Mysql, podemos digitar o seguinte comando para criar nosso banco de dados</h2>
<code>
CREATE DATABASE nome_do_seu_banco_de_dados;
</code>
<p>E pronto, agora você pode preencher o env com as informaçõse como nome do banco que criou e senha, e não se esqueça, caso tenha criado um banco de dados utilizando outro SGBD, trocar 'mysql' em DB_CONNECTION pelo SGBD utilizado, além das portas e host caso necessário</p>

<h2>Rodando o projeto</h2>
<h3>Passo 1 </h3>
<p>Para iniciar vamos rodar o </p>
<code>composer install</code>
<p>Lembrando que o projeto foi feito utilizando o php8.3 e todas as extensões do php requeridas para projetos laravel</p>
<p>Crie um arquivo .env com base no .env.example</p>
<p>Uma vez com as dependencias do composer instalado e o .env, você pode rodar os comandos:</p>
<code>php artisan key:generate</code>
<code>php artisan migrate</code>
<p>Pronto as tabelas foram criadas na sua database</p>
<p>Agora devemos popular as tabelas, sendo assim vamos rodar o comando:</p>
<code>php artisan db:seed</code>
<h3>Passo 2</h3>
<p>Agora vamos instalar as dependencias da node modules e rodar gerar a build do projeto, lembrando que nosso projeto está rodando a versão v20.11.0 do node. para isso você pode rodar o comando:</p>
<code>npm run prod</code>
<h3>Passo 3</h3>
<p>Agora podemos rodar nosso projeto laravel:</p>
<code>php artisan serve</code>
<h3>Passo 4</h3>
<p>Com isso tudo feito, podemos rodar alguns outros commandos optativos para gerar a documentação do swagger e para realizar o teste dos nosso endpoints, os comandos são os a seguir:</p>
<strong>gerando a documentação</strong>
<code>php artisan l5-swagger:generate</code>
<p>Se tudo ocorrer bem a documentação deve ser encontrada ao acessar o /api/documentation</p>
<strong>rodando os testes</strong>
<code>php artisan test</code>
<h2>Finalização</h2>
<p>Neste ponto seu projeto deve estar rodando normalmente, ao acessar a roda "/" podemos encontrar o consumo dos endpoints nas features do frontend, é isto e até mais :)</p>
