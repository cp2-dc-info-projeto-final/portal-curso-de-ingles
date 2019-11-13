# Especificação de Casos de Uso

## Sumário

- [CDU 01 - Cadastro](#cdu-01---cadastro)
- [CDU 02 - Log in](#cdu-02---log-in)
- [CDU 03 - Marcação de Aulas](#cdu-03---marcação-de-aulas)
- [CDU 04 - Calendário de Aulas](#cdu-04---calendário-de-aulas)
- [CDU 05 - Fazer Exercícios](#cdu-05---fazer-exercícios)
- [CDU 06 - Inserir questões](#cdu-10---inserir-questões)

## Descrição
### CDU 01 - Cadastro
**Atores:** Usuário(aluno) e sistema

**Pré-condições:** Estar no site

**Fluxo principal:**
1. O usário clica em sign up na home.
2. O sistema o redireciona para a página de cadastro
3. O usuário preenche as lacunas nome, data de nascimento, email e senha.
4. O sistema redireciona o usuário para a página de log in.

**Fluxo alternativo:**
1. O usuário preenche alguma das lacunas(nome, data de nascimento, email e senha) com uma informação errada.
2. O sistema exibe a mensagem de que há algo de errado com a resposta do usuário.
   
### CDU 02 - Log in
**Atores:** Usuário e sistema

**Pré-condições:** Estar cadastrado.

**Fluxo principal:**
1. Clicar em sign in na página incial.
2. O sistema redireciona o usuário para a página de log in.
3. O usuário insere email, senha e marca que está de acordo com os termos de uso.
5. O sistema redireciona o usuário para a sua página.

**Fluxo alternativo:**
1. O usuário insere email ou senha errados.
2. O sistema exibe a mensagem de o email ou senha inserido está incorreto.

### CDU 03 - Marcação de Aulas
**Atores:** Usuário(professor) e sistema

**Pré-condições:** Ter feito o log in

**Fluxo principal:**
1. O usuário clica schedule classes.
2. O sistema o redireciona para a página da marcação de aulas.
3. O usuário escolhe com qual aluno, em qual data e em qual horário será a aula.
4. O sistema armazena a data e marca no calendário daquele aluno a aula marcada.

### CDU 04 - Calendário de Aulas
**Atores:** Usuário(aluno) e sistema

**Pré-condições:** Ter feito o log in.

**Fluxo principal:**
1. O aluno clica em your classes, na página do aluno.
2. O sistema redireciona o aluno para o calendário onde as aulas estão marcadas.

### CDU 05 - Fazer Exercícios
**Atores:** Usuário(aluno) e sistema

**Pré-condições:** Ter feito o log in.

**Fluxo principal:**
1. O usuário clica em exercises.
2. O sistema redireciona o usuário para a página dos exercícios.
3. O usuário responde as questões.
4. O sistema mostra o gabarito e o número de acertos.

**Fluxo alternativo:**
1. O usuário deixa uma resposta vazia.
2. O sitema emite uma mensagem avisando o usuário.

### CDU 06 - Iserir questões
**Atores:** Usuário(professor) e sistema

**Pré-condições:** Ter feito o log in

**Fluxo principal:**
1. O usuário clica create questions.
2. O sistema o redireciona para a página de criação de exercícios.
3. O usuário insere o enunciado, as 4 opções de resposta, o gabarito e o nível dos exercícios.
4. O usuário clica em submit.
5. O sistema salva e disponibiliza para os alunos daquele nível.
