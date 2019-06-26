int idaluno, idAtual; //id é a tabela dos ids no banco de dados. idAtual é o novo id gerado pelo código
int erroRegistroId = 0; //Caso haja um erro no registo, essa variável vai receber um número e código não vai rodar.

idAtual= (id.idaluno + 1); //a ideia é ser o ultimo id do bd +1 só q a gent n sabe como fazer
foreach(int idaluno in id){
    if(idaluno!=0){
        if(idAtual == idaluno){
            Console.Write("erro bla bla bla");
            erroRegistroId = 1;
            break;
        }
    }
}
if(erroRegistroId>0){
    Console.Write("n foi possivel devido a erro blablabla");
}else
{
id.idaluno = idAtual;
    Console.Write("registrado com sucesso, o id do aluno é {0} e ele é estudante do curso.",idAtual);
}



/* não considere, eh outra coisa
int erro = 0;
write("login blabla bla: ");
read(loginTentativa);

for(int i;i > numDeIds;i++){
if (login == loginIdAnterior){write("erro bla bla bla"); erro = 1; break;}
}
if(erro<1){gerarId();}
if(erro>0){erro bla bla bla}
