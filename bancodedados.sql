use portaldoaluno;

CREATE TABLE exercicio(
idexercicio INT,
nome VARCHAR(50),
PRIMARY KEY (idexercicio)
)

CREATE TABLE questao(
idquestao INT,
enunciado VARCHAR(500),
gabarito VARCHAR(500),
PRIMARY KEY(idquestao)
)

CREATE TABLE questao_exercicio(
idexercicio int,
idquestao int,
PRIMARY KEY(idexercicio, idquestao),
FOREIGN KEY (idexercicio) REFERENCES exercicio(idexercicio),
FOREIGN KEY (idquestao) REFERENCES questao(idquestao)
)

CREATE TABLE professor(
email VARCHAR(50),
senha VARCHAR(8),
nome VARCHAR(50),
datanasc DATE,
telefone VARCHAR(12),
PRIMARY KEY (email)
)

CREATE TABLE palavra(
palavra VARCHAR(50),
idpalavra int,
sinonimo VARCHAR(200),
significado varchar(200),
PRIMARY KEY(idpalavra)
)

CREATE TABLE mensagem(
idmensagem INT,
mensagem VARCHAR(200),
palavra INT,
PRIMARY KEY(idmensagem),
FOREIGN KEY(palavra) REFERENCES palavra(idpalavra)
)

CREATE TABLE palavra_questao(
idpalavra INT,
idquestao INT,
PRIMARY KEY (idpalavra,idquestao),
FOREIGN KEY(idpalavra) REFERENCES palavra(idpalavra),
FOREIGN KEY(idquestao) REFERENCES questao(idquestao)
)

CREATE TABLE aluno(
email VARCHAR(50),
senha VARCHAR(8),
telefone VARCHAR(11),
nome VARCHAR(60),
datanasc DATE,
PRIMARY KEY(email)
)

CREATE TABLE idaluno(
idaluno INT,
aluno VARCHAR(50),
PRIMARY KEY(idaluno),
FOREIGN KEY(aluno) REFERENCES aluno(email)
)

CREATE TABLE palavra_aluno(
idpalavra INT,
idaluno INT,
PRIMARY KEY(idaluno, idpalavra),
FOREIGN KEY (idaluno) REFERENCES idaluno(idaluno),
FOREIGN KEY (idpalavra) REFERENCES palavra(idpalavra)
)

CREATE TABLE aluno_exercicio(
aluno INT,
exercicio INT,
PRIMARY KEY(aluno,exercicio),
FOREIGN KEY (aluno) REFERENCES idaluno(idaluno),
FOREIGN KEY(exercicio) REFERENCES exercicio(idexercicio)
)

CREATE TABLE aula(
idaula INT,
data_aula DATE,
aluno INT,
professor VARCHAR(50),
PRIMARY KEY(idaula),
FOREIGN KEY(aluno) REFERENCES idaluno(idaluno),
FOREIGN KEY(professor) REFERENCES professor(email)
)

ALTER TABLE aluno
ADD endereco VARCHAR(100)

ALTER TABLE aluno
ADD idaluno INT 
FOREIGN KEY(idaluno) REFERENCES idaluno(idaluno)
