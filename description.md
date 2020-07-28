Processo seletivo IbiJus - Desenvolvimento de uma aplicação
Seja bem-vinda(o) a mais uma etapa do processo seletivo do IbiJus :)

Nesta etapa, finalmente vamos colocar a mão no código!

Siga atentamente às instruções do projeto (a compreensão das instruções também faz parte do processo seletivo) e boa sorte!

#Projeto - Meus locais

Você deverá criar um projeto para salvar os locais que você já visitou (ou que gostaria de visitar) no Brasil.
Caso você não saiba nenhum CEP da cidade que já visitou ou que quer visitar pesquise no google.

Sua aplicação deverá ter as seguintes funcionalidades:

- Listar todos os locais
- Cadastrar um novo local com a opção de pesquisa pelo CEP
- Editar um local (com a pesquisa por CEP também disponível)
- Apagar um local

Sua aplicação deverá fazer uso da linguagem PHP e utilizar o MySQL para salvar os dados na seguinte tabela:

Nome da tabela:
Locais

Campos:
- id [int 10] autoincrement
- nome [varchar(100)]
- cep [varchar(8)]
- logradouro [varchar(150)]
- complemento [varchar(100)]
- numero [varchar(6)]
- bairro [varchar(100)]
- uf [varchar(2)]
- cidade [varchar(100)]
- data [date]

A tela inicial da sua aplicação será uma tabela HTML com a listagem dos locais. 
Para cada local exibir apenas o nome e a data da visita. Deverá estar disponível a opção de editar e apagar o local.

O botão de criar novo local também deve estar disponível nesta página.

Ao clicar em criar novo local o usuário será direcionado para um formulário com os campos para o cadastro.

Todos os campos do formulário são obrigatórios e devem ser apresentados na ordem dos campos da tabela descrita acima.

O campo cep deverá ser validado via javascript se foi preenchido, caso esteja em branco deverá ser exibida a mensagem: "Favor informar o CEP para a consulta." e a submissão do formulário deve ser interrompida.

Uma vez preenchido o campo cep do formulário o seu projeto deverá consultar o CEP informado utilizando o serviço web: https://viacep.com.br/.

Você deve adicionar o projeto (https://github.com/rjarouche/buscaviacep) via composer ao seu projeto para facilitar o uso do serviço ViaCEP.

Após receber a resposta (no formato JSON), você deverá tratar o resultado e preencher os outros campos automaticamente.
Caso o CEP não seja encontrado o usuário poderá preencher todos os campos manualmente.

Regras de negócio:

Todos os botões de envio de formulário deverão ter o fundo na cor #cc9933 e o texto na cor #ffffff;

Na listagem dos locais, caso o UF do local seja MG, a toda a linha deverá ser exibida com a cor de fundo azul (#2f7fae) e a cor do texto branca (#ffffff). Utilize um arquivo css externo e uma classe para aplicar esta formatação. Não utilize css inline.
