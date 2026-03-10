# SORVETERIA
Um estudo simples em Laravel aplicado a uma loja online ficticia de vendas de sorvetes. Estou reaproveitando uma simples estrutura de login que fiz e estou reaproveitando para corrigir e a melhorar. 

## Etapas
- [x] Descrição geral;
- [ ] Definir estruturas lógicas (diagramas);
    - [x] Casos de uso;
    - [ ] Banco de dados;
    - [ ] Classe(model) e objeto;
    - [ ] Rotas;
    - [ ] Modelo semântico;
    - [ ] Desenho da arquitetura de funcionamento geral;
- [ ] Criar as migrations e conectar ao SQLServer (OLTP);
- [ ] Criar as rotas da aplicação;
- [ ] Configurar sistema de hash e, armazenamento de imagens;
- [ ] Sistema de login;
- [ ] Sistema de gerencimento de produtos simples;
- [ ] Simular um sistema de compra simples;
- [ ] Histórico;
- [ ] Acompanhar pedido;
- [ ] Preparar script ETL para um (OLAP) e criar um BD OLAP;
- [ ] Sistema de relatórios;
- [ ] Sistema de ordens de produção.

## Descrição geral

Loja online fictícia especializada na venda de sorvetes, o nome da loja é Sorveteria. Um cliente pode ser tanto uma pessoa física quanto jurídica, ambos para serem registrados devem inserir e-mail e senha. O primeiro deve informar também nome, sobrenome, nome de perfil, cpf e data de aniversário para criar uma conta na aplicação. O segundo deve informar o nome fantasia, cnpj e endereço para criar a conta. Um cliente deve ser capaz de realizar um pedido, verificar histórico de compras e acompanhar o pedido. 

Imagem de perfil e gênero são informações opcionais para clientes, mas obrigatórias para gerentes. Estes que são responsáveis pelo gerenciamento das vendas. 

Um pedido é composto de 1 ou mais produtos, estes que possuem nome, descrição, preço unitário, categoria e, status.

## Casos de uso

![Casos de uso](out/plantuml/useCases/Use%20Case%20Online%20System.png)

## Banco de dados operacional

![Banco de dados](out/plantuml/db/Data%20base.png)

<!-- ## Classes

![Diagrama de classes v1](out/plantuml/class/Class%20Diagram%20Online%20System.png)

## Objetos

![Diagrama de objetos v1](out/plantuml/object/Object%20Diagram%20Online%20System.png) -->

## Rotas

|AÇÃO|URL|METODO|NOME|DESCRIÇÃO|
|---|---|---|---|---|
|GET|/home-page|index()|home-page.index|Home Page|
|GET|/catalog|index()|catalog.index|mostra a lista de produtos à venda|
|GET|/catalog/{product}|show()|catalog.show|mostra um produto|
|POST|/catalog|store()|catalog.store|submissão do formulário do novo produto|
|GET|/catalog/create|create()|catalog.create|mostra o fomulario para adicionar produtos|
|GET|/catalog/{product}/edit|edit()|catalog.edit|edita um produto|
|PUT/PATH|/catalog/{product}|update()|catalog.update|update de um produto|
|DELETE|/catalog/{product}|delete()|catalog.delete|apaga um produto| 
|GET|/cart/{id}|edit()|cart.edit|mostra os produtos adicionados ao carrinho|
|PUT/PATH|/cart/{id}|update()|cart.update|submissão do formulário dos produtos comprados|
|DELETE|/cart/{id}|delete()|cart.delete|apaga um produto do carrinho| 
|GET|/fake-payment/{id}|index()|fake-payment.index|mostra o fomulário de pagamento|
|POST|/fake-payment/{id}|post|edit()|fake-payment.edit|submissão do formulário de pagamento|
|GET|/history/{id}|index()|history.index|mostra o histórico de compras de um usuário|



## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Observação
Os sistemas de ordens de produção e de acompanhamentos podem ser excluídos.
