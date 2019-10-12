# Especificação de Casos de Uso

## Sumário

- [CDU 01 - Cadastro](#cdu-01---cadastro)
- [CDU 02 - Log in do aluno](#cdu-02---log-in-do-aluno)
- [CDU 03 - Log in do professor](#cdu-03---log-in-do-professor)
- [CDU 04 - Calendário de aulas](#cdu-04---calendário-das-aulas)
- [CDU 05 - Exercícios fixos](#cdu-05---exercícios-fixos)
- [CDU 06 - Exercícios Quinzenais](#cdu-06---exercícios-quinzenais)
- [CDU 07 - Notificações](#cdu-07---notificações)
- [CDU 08 - Biblioteca de palavras](#cdu-08---biblioteca-de-palavras)
- [CDU 09 - Marcação de Aulas](#cdu-09---marcação-de-aulas)
- [CDU 10 - Atualizando os exercícios](#cdu-10---atualizando-os-exercícios)
- [CDU 11 - Palavras para as notificações](#cdu-11---palavras-para-as-notificações)

## Descrição
### CDU 01 - Cadastro
**Atores:** Usuário(aluno) e sistema

**Pré-condições:** Ter instalado o aplicativo

**Fluxo principal:**
1. O usário clica em cadastro na página inicial.
2. O sistema o redireciona para a página de cadastro
3. O usuário seleciona o tipo de usuário que ele é.
4. O usuário preenche as lacunas nome, endereço, data de nascimento, telefone,  email e senha.
5. Sistema exibe uma lacuna solicitando o número de matrícula.
6. O usuário preenche a lacuna.
7. O sistema redireciona o usuário para a página incial.

**Fluxo alternativo:**
1. O usuário preenche alguma das lacunas(nome, endereço, data de nascimento, telefone, cpf, email e senha) com uma informação errada.
2. O sistema exibe a mensagem de que há algo de errado com a resposta do usuário.
3. O usário preenche todas as lacuna corretamente.
4. Continua o fluxo principal.

**Fluxo alternativo:**
1. O usuário marca visitante na página de cadastro.
2. O usuário preenche as lacunas nome, endereço, data de nascimento, telefone,  email e senha.
3. O sistema redireciona o usuário para a página incial.

**Fluxo alternativo:**
1. O usuário insere um número de matrículas que não consta no banco de dados.
2. O sistema exibe a mensagem de o número de matrícula dele não consta no banco de dados.
3. O usuário preeenche a lacuna do número de matrícula corretamente ou marca não quando os istema pergunta novamente se ele é aluno do curso.
4. O sistema o redireciona para a página inicial.
   
### CDU 02 - Log in do aluno
**Atores:** Usuário(aluno) e sistema

**Pré-condições:** Ter feito o cadastro.

**Fluxo principal:**
1. Clicar em log in na página incial.
2. O sistema redireciona o usuário para a página de login.
3. O usuário escolhe a opção aluno.
4. O usuário insere email e senha.
5. O sistema redireciona o usuário para a página do aluno.

**Fluxo alternativo:**
1. O usuário insere email ou senha errados.
2. O sistema exibe a mensagem de o email ou senha inseridos está incorreto.
3. O usuário preeenche email e senha corretamente.
4. O sistema o redireciona para a página do aluno.

### CDU 03 - Log in do professor
**Atores:** Usuário(professor) e sistema

**Pré-condições:** Ter sido cadastrado no sistema.

**Fluxo principal:**
1. Clicar em log in na página incial.
2. O sistema redireciona o usuário para a página de login.
3. O usuário escolhe a opção professor.
4. O usuário insere email e senha.
5. O sistema redireciona o usuário para a página do professor.

**Fluxo alternativo:**
1. O usuário insere email ou senha errados.
2. O sistema exibe a mensagem de o email ou senha inseridos está incorreto.
3. O usuário preeenche email e senha corretamente.
4. O sistema o redireciona para a página do professor.

### CDU 04 - Calendário das aulas
**Atores:** Usuário(aluna) e sistema

**Pré-condições:** Ser aluno do curso e ter feito o log in.

**Fluxo principal:**
1. O aluno clica em calendário, na página do aluno.
2. O sistema redireciona o aluno para o calendário onde as datas estão marcadas.

### CDU 05 - Exercícios Fixos
**Atores:** Usuário(aluno) e sistema

**Pré-condições:** Ter feito o log in.

**Fluxo principal:**
1. O usuário clica em exercícios fixos.
2. O sistema redireciona o usuário para a página dos exercícios(que é em formato de quiz).
3. O usuário responde as questões.
4. O sistema mostra o gabarito e quais resposas estão certas e erradas.
5. O sistema armazena as palavras apredindas com aquele exercício na biblioteca.

**Fluxo alternativo:**
1. O usuário deixa uma resposta vazia.
2. O ssitema emite uma mensagem avisando o usuário.
3. O usuário marca uma resposta.
4. Retorno ao fluxo principal.

### CDU 06 - Exercícios quinzenais
**Atores:** Usuário(aluno) e sistema

**Pré-condições:** Ter feito o log in e ser aluno do curso.

**Fluxo principal:**
1. O usuário clica em exercícios do curso.
2. O sistema o redireciona para a página dos exercícios quinzenais.
3. O usuário escolhe o nível dos exercícios que pretende fazer.
4. O sistema o redireciona para os exercícios referentes ao nível escolhido.
5. O usuário preenche os campos de resposta ou marca as opções.
6. O sistema envia as respostas para o email do professor e armazena na biblioteca as palavras aprendidas com aquele exercício.

**Fluxo alternativo:**
1. O usuário deixa algum campo vazio ou não marca alguma resposta.
2. O sistema notifica o usuário sobre isso.
3. O usuário preenche todos os campos.
4. Retorno ao fluxo principal.

### CDU 07 - Notificações
**Atores:** Usuário(aluno) e sistema

**Pré-condições:** Estar logado.

**Fluxo principal:**
1. O sistema manda uma notificação com uma palavra nova.
2. O usuário clica na notificação.
3. O sistema o redireciona para o aplicativo onde ele pode ver sinonimos, significados possíveis e exemplos do uso daquela palavra.
4. O sistema armazena aquela palavra na biblioteca.

### CDU 08 - Biblioteca de palavras
**Atores:** Usuário(aluno) e sistema

**Pré-condições:** Ter feito o log in.

**Fluxo principal:**
1. O usuário clica em Bibliteca de palavras.
2. O sistema o redireciona para a página da biblioteca.
3. O sistema mostra todas as palavras armazenadas na biblioteca co seus sinonimos, significados e exemplos de uso.

### CDU 09 - Marcação de Aulas
**Atores:** Usuário(professor) e sistema

**Pré-condições:** Ter feito o log in

**Fluxo principal:**
1. O usuário clica aulas.
2. O sistema o redireciona para a página das aulas.
3. O usuário escolhe com qual do curso será a aula.
4. O sistema o redireciona para o calendário de aulas daquele aluno.
5. O usuário marca os dias de aula daquele aluno.
6. O sistema armazena a data e marca no clendário daquele aluno a aula marcada.

### CDU 10 - Atualizando os exercícios
**Atores:** Usuário(professor) e sistema

**Pré-condições:** Ter feito o log in

**Fluxo principal:**
1. O usuário clica exercícios.
2. O sistema o redireciona para a página dos exercícios quinzenais.
3. O usuário escolhe o nível dos exercícios.
4. O sistema o redireciona para os exercícios referentes a aquele nível.
5. O usuário insere as questões que quer mostrar, selecionando o tipo de questão(objetiva ou discursiva) e as palavras que serão aprendidas com cada questão.
6. O usuário clica em savar.
7. O sistema salva e disponibiliza para os alunos do curso.

### CDU 11 - Palavras para as notificações
**Atores:** Usuário(professor) e sistema

**Pré-condições:** Ter feito o log in

**Fluxo principal:**
1. O usuário clica palavras novas.
2. O sistema o redireciona para a página das palavras.
3. O usuário insere as palavras a serem enviadas nas notificações co seus significados, sinonimos e exemplos de uso.
4. O usuário clica em salvar.
5. O sistema salva e passa a enviar para os alunos uma palavra por dia.
