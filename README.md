# Projeto Portfólio Back-end

Bem-vindo ao meu projeto de portfólio!<br>
Este projeto foi desenvolvido usando PHP e o framework Laravel(9.19) para apresentar meus trabalhos, habilidades e experiências.<br>
Esta é a parte back-end do projeto, a parte front-end esta no repositorio: https://github.com/guiarduino/projeto_portfolio_front.<br>

## Tecnologias Utilizadas

- **PHP**: Linguagem de programação usada para o desenvolvimento da lógica de back-end.
- **Laravel**: Framework PHP para desenvolvimento de aplicações web robustas e seguras.

## Funcionalidades

Este projeto é uma aplicação de Back-End desenvolvida para fornecer a lógica e os serviços necessários para suportar a interação com o front-end de uma aplicação.<br>
Ele é responsável pelo gerenciamento de dados, autenticação de usuários, execução de processos em segundo plano e muito mais.<br>
A comunicação entre o front-end e o back-end é realizada por meio de uma API RESTful, garantindo uma estrutura eficiente e escalável para a troca de dados.

## Instalação

Siga os passos abaixo para rodar o projeto localmente:

1. Clone o repositório:
    ```bash
    git clone https://github.com/guiarduino/projeto_portfolio_back

2. Navegue até o diretório do projeto:
    ```bash
    cd projeto_portifolio_back

3. Instale as dependências:
    ```bash
    composer install

4. Configure o arquivo env.php
    - Copie o arquivo ".env.example" na raiz do projeto e renomeie para ".env" e preencha os dados com as informações do seu baco de dados.
        - DB_CONNECTION=mysql
        - DB_HOST={ip_da_maquina_do_banco_de_dados}
        - DB_PORT={porta_do_banco_de_dados}
        - DB_DATABASE={nome_da_base_de_dados}
        - DB_USERNAME={nome_do_usuario_do_banco_de_dados}
        - DB_PASSWORD={senha_do_usuario}

5. Realize a migração do banco de dados:
    ```bash
    php artisan migrate

6. Inicie o servidor de desenvolvimento:
    ```bash
    php -S localhost:8000

## Comandos Uteis

1. Comando para mostrar as rotas do projeto
    ```bash
    php artisan route:list

## Contato

Se você tiver alguma dúvida ou sugestão, pode me contatar em guibarlatti@gmail.com<br>
Obrigado por visitar meu portfólio!