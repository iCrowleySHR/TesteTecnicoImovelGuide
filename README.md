# Teste Técnico Imovel Guide

Este projeto é uma aplicação simples para gerenciar o cadastro de corretores, incluindo funcionalidades para adicionar, editar, excluir e listar corretores. A aplicação valida o CPF dos corretores antes de permitir o cadastro ou a atualização dos dados.

## Funcionalidades
- **Cadastro de Corretores**: Permite adicionar novos corretores ao sistema, validando o CPF antes do envio do formulário.
- **Edição de Corretores**: Permite editar os dados de um corretor existente.
- **Exclusão de Corretores**: Permite excluir um corretor da lista.
- **Validação de CPF**: Valida o CPF dos corretores utilizando uma função JavaScript no front-end para garantir que o CPF seja válido antes do envio do formulário.

## Tecnologias Utilizadas
- **Laravel 8.x** (ou versão correspondente): Framework PHP para desenvolvimento da API e controle de dados.
- **Bootstrap 5.x**: Framework CSS para o design responsivo da aplicação.
- **JavaScript**: Para validar o CPF no lado do cliente.

## Instalação

### Requisitos
- PHP >= 7.4
- Composer
- Laravel 8.x ou superior
- Banco de dados MySQL (ou outro compatível)

### Passos para Instalação
1. Clone o repositório:
    ```
    https://github.com/iCrowleySHR/TesteTecnicoImovelGuide.git
    ```
2. Instale as dependências do projeto:
    ```
    composer install
    ```
3. Crie um arquivo `.env` a partir do arquivo `.env.example`:
    ```
    cp .env.example .env
    ```
4. Configure o arquivo `.env` com as credenciais do seu banco de dados.
5. Gere a chave de aplicação:
    ```
    php artisan key:generate
    ```
6. Execute as migrações para criar as tabelas no banco de dados:
    ```
    php artisan migrate
    ```
7. (Opcional) Para popular a tabela de corretores com dados de teste, você pode rodar o seeder:
    ```
    php artisan db:seed
    ```
8. Inicie o servidor de desenvolvimento:
    ```
    php artisan serve
    ```

Agora, você pode acessar a aplicação no seu navegador em [http://localhost:8000](http://localhost:8000).

## Estrutura de Diretórios
- **app/Http/Controllers**: Contém os controladores que gerenciam as requisições para cadastrar, editar, excluir e listar corretores.
- **app/Models**: Contém o modelo `Corretor`, que interage com a tabela no banco de dados.
- **resources/views**: Contém as views da aplicação, incluindo a tela de cadastro e a lista de corretores.
- **public/js**: Contém o arquivo `cpfValidator.js`, que é responsável pela validação do CPF no lado do cliente.
