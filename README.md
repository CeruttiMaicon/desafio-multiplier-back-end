# Criando um projeto Laravel

- [X] composer create-project laravel/laravel Multiplier 

# Entrando na pasta do projeto 

- [X] cd multiplier

# Rodando o projeto inicial(laravel)

- [x] php artisan serve

* http://127.0.0.1:8000

# Acessando o DB Localmente

- [x] hhttp://localhost/phpmyadmin/index.php?route=/server/databases

- [x] Crie o Banco de Dados 

* multiplieron

# Criando as Migrations

- [x] php artisan make:migration create_progress_table --create=progress
- [x] php artisan make:migration create_cardapio_table --create=cardapio
- [x] php artisan make:migration create_mesas_table --create=mesas
- [x] php artisan make:migration create_clientes_table --create=clientes
- [x] php artisan make:migration create_pedidos_table --create=pedidos
- [x] php artisan make:migration create_permission_table --create=permission

* -> Rodando as Migrations -> php artisan migrate

# Criando as Seeders

- [x] php artisan make:seeder MesasSeeder
- [x] php artisan make:seeder ClientesSeeder 
- [x] php artisan make:seeder CardapioSeeder 
- [x] php artisan make:seeder NivelSeeder
- [x] php artisan make:seeder PedidosSeeder
- [x] php artisan make:seeder ProgressSeeder
- [x] php artisan make:seeder UsersSeeder

* -> Rodando a Seeder -> php artisan db:seed

# Criando os Controllers 

* -> php artisan make:controller AuthController
* -> php artisan make:controller MesasController 
* -> php artisan make:controller ClientesController
* -> php artisan make:controller CardapioController
* -> php artisan make:controller NivelController 
* -> php artisan make:controller PedidosController
* -> php artisan make:controller ProgressController
* -> php artisan make:controller GarcomOrdersController
* -> php artisan make:controller FogaoOrdersController

<p align="center">
  <img src="https://multiplier.com.br/assets/multiplier.svg" width="320" alt="Nest Logo" />
</p>


# Desafio Back-end Multiplier

O intuito deste teste é avaliar seus conhecimentos técnicos de back-end.

O teste consiste em fazer um sistema para um restaurante.

Este desafio deve ser feito por você em sua casa. Gaste o tempo que você quiser, mas nos conte o tempo que levou para realizar o desafio.

# Instruções de entrega do desafio

1. Primeiro, faça um fork deste projeto para sua conta no Github (crie uma se você não possuir).
2. Em seguida, implemente o projeto conforme as instruções a seguir, em seu clone local.
3. Por fim, envie via e-mail com o link do desafio, avisando quanto tempo levou para faze-lo.

# Descrição do projeto

Precisamos que você crie uma API REST-FULL para a utilização de restaurante, que poderá ser utilizada para mobile ou um SPA.

**Sua aplicação DEVE:**

1. Fazer login funcionario(garçom):
- Deve apenas visualizar seus pedidos

2. Fazer login funcionario(cozinheiro).
- Deve visualizar todos os pedidos em andamento e há fazer

> Não precisa ter login cliente

3. Cadastro de Clientes (nome, CPF)
4. Fazer o cadastro das mesas do restaurante (número da mesa).
5. Fazer o cadastro de cardapios (cardapios com os itens do cardapio).
6. Fazer o pedido para a mesa do cliente.
7. Listar todos os pedidos (filtros: dia, semana, mês, por mesa, por cliente).
8. Listar pedidos em andamento, (para o garçom).
9. Listar pedidos há fazer e em andamento, (para o cozinheiro).
10. Listar por cliente, maior pedido, primeiro pedido, último pedido.

11. População de dados:
 - Deve possuir uma base com 10K clientes
 - 50 cardapios
 - 400K pedidos

> Dica: Utilize a biblioteca [faker](https://github.com/fakerphp/faker) para gerar os dados 😄

**Sua aplicação web NÃO PRECISA:**

1. Não precisa estar hospedada em nenhum servidor.
2. Testes unitários (pontos extras se fizer)
3. Testes integrados (pontos extras se fizer)

# Tecnologias que deve estar presentes no desafio

- Laravel (obrigatório)
- MySQL ou MariaDB
- PHP

**Não necessário mas se tiver será um diferencial**

- Testes Unitários
- Testes integrados

# Avaliação

Seu projeto será avaliado de acordo com os seguintes critérios.

1. Sua aplicação preenche os requerimentos básicos?
2. Você documentou a maneira de configurar o ambiente e rodar sua aplicação?
3. Você seguiu as instruções de envio do desafio?
4. Boas práticas RestFull
5. Boas práticas Laravel
6. Clean Code
7. SOLID
8. Performance consultas

Adicionalmente, tentaremos verificar sua experiência com programação funcional a partir da estrutura de seu projeto.

---

## Boa sorte!
