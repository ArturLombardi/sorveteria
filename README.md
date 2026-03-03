# SORVETERIA
Um estudo simples em Laravel aplicado a uma loja online ficticia de vendas de sorvetes. Estou reaproveitando uma simples estrutura de login que fiz e estou reaproveitando para corrigir e a melhorar. 

## Etapas
- [ ] Descrição completa;
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


## Casos de uso

![Casos de uso](out/plantuml/useCases/Use%20Case%20Online%20System.png)

## Banco de dados operacional

![Banco de dados](out/plantuml/db/Data%20base.png)

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Observação
Os sistemas de ordens de produção e de acompanhamentos podem ser excluídos.