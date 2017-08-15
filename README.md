# README #

Projeto de CMS simples como desafio técnico para a Just Digital

### Como executa-lo? ###

1. Requisitos:
	- PHP 7 ou superior
	- MySQL

2. Acesse a classe de configuração do banco de dados em:
	- justcms > app > dao > Database.php
	- Altere os 'define' conforme as configs de acesso do seu MySQL 

3. Importe o banco justcms.sql que se encontra na raiz do projeto

4. Dê o comando para iniciar o server na raiz do projeto:
	- php -S localhost:8080

5. Acesso de administrador:
	- admin/admin
	
### O que foi feito? ###

* Front-end
	- Área Pública
	- Painel Administrativo
		
* Back-end
	- CRUD de Posts, Categorias, Páginas, Usuários
	- Listagem de publicações

### Como foi feito? ###

Foi feito um projeto simples com uma estruturação de pastas mais legivel possivel,
foi utilizado o conceito de MVC com uma camada de dados para melhor abstração e manutenção do código.
	
	Estruturação de pastas:
		- justcms
			- app
				- controllers  	//Contém a regra de negócio da aplivação e faz a ponte entre a camada de dados e a view
				- models  		//Camada de modelo para objetos da aplicação
				- dao  			//Camada de dados responsavel por conectar e manipular o banco de dados
			- public  			//Contém arquivos públicos, como arquivos estáticos de css, javascript e imagens
			- template  		//Camada de visualização contedo os arquivos de layout da aplicação
			- vendor  			//Pasta vendor do Composer responsável por gerar os autoloads da aplicação
			
### Ferramentas e bibliotecas ###
	- IDE PhpStorm
	- Composer
	- Git
	- Bootstrap 4 para o frontend
	- Lib bramus/router para o roteamento