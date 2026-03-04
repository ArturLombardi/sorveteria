# SORVETERIA
Um estudo simples em Laravel aplicado a uma loja online ficticia de vendas de sorvetes. Estou reaproveitando uma simples estrutura de login que fiz e estou reaproveitando para corrigir e a melhorar. 

## Etapas
- [x] Descrição geral;
- [ ] Definir estruturas lógicas (diagramas);
    - [x] Casos de uso;
    - [ ] Banco de dados;
    - [ ] Classe e objeto;
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

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Observação
Os sistemas de ordens de produção e de acompanhamentos podem ser excluídos.