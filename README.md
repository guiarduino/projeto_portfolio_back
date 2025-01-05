# Projeto Portfólio Back-end

Bem-vindo ao meu projeto de portfólio!<br>
Este projeto foi desenvolvido usando PHP e o framework Laravel(9.19) para apresentar meus trabalhos, habilidades e experiências.<br>
Esta é a parte back-end do projeto, a parte front-end esta no repositorio: https://github.com/guiarduino/projeto_portfolio_front.<br>

## Tecnologias Utilizadas

- **PHP**: Biblioteca JavaScript para construção de interfaces de usuário.
- **Laravel**: Framework CSS para estilização e design responsivo.

## Funcionalidades

- Exibição de projetos com detalhes e links.
- Curriculum Vitae.
- Minhas redes sociais.

## Instalação

Siga os passos abaixo para rodar o projeto localmente:

1. Clone o repositório:
    ```bash
    git clone https://github.com/guiarduino/projeto_portfolio_front

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

5. Inicie o servidor de desenvolvimento:
    ```bash
    php -S localhost:8000

## Comandos Uteis

1. Comando para mostrar as rotas do projeto
    ```bash
    php artisan route:list

## Contato

Se você tiver alguma dúvida ou sugestão, pode me contatar em guibarlatti@gmail.com<br>
Obrigado por visitar meu portfólio!