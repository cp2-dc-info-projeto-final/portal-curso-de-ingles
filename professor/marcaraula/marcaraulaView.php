<html>
    <head>
        <title>Marcar aula</title>
    </head>
    <body>
        <div><h1>Marcar aula</h1></div>
        <div>
            <h2>Selecione o aluno:</h2>
            <input id="idaluno" name="Aluno" type="text" list="listaalunos">
                <datalist id="listaalunos">
                    <select name="estiloaluno" id="estiloaluno">
                        <option value="Aluno 1">
                            <?php
                                require_once('marcaraulaCtrl.php');

                                $alunos = exibiralunos();

                                foreach ($alunos as $aluno) {
                                    echo "<h3>" . $aluno['nome'] . "</h3>";
                                }
                            ?>
                        </option>
                        <option value="Aluno 2">
                            <?php
                                require_once('marcaraulaCtrl.php');

                                $alunos = exibiralunos();

                                foreach ($alunos as $aluno) {
                                    echo "<h3>" . $aluno['nome'] . "</h3>";
                                }
                            ?>
                        </option>
                        <option value="Aluno 3">
                            <?php
                                require_once('marcaraulaCtrl.php');

                                $alunos = exibiralunos();

                                foreach ($alunos as $aluno) {
                                    echo "<h3>" . $aluno['nome'] . "</h3>";
                                }
                            ?>
                        </option>
                        <option value="Aluno 4">
                            <?php
                                require_once('marcaraulaCtrl.php');

                                $alunos = exibiralunos();

                                foreach ($alunos as $aluno) {
                                    echo "<h3>" . $aluno['nome'] . "</h3>";
                                }
                            ?>
                        </option>
                        <option value="ALuno 5">
                            <?php
                                require_once('marcaraulaCtrl.php');

                                $alunos = exibiralunos();

                                foreach ($alunos as $aluno) {
                                    echo "<h3>" . $aluno['nome'] . "</h3>";
                                }
                            ?>
                        </option>
                        <option value="Aluno 6">
                            <?php
                                require_once('marcaraulaCtrl.php');

                                $alunos = exibiralunos();

                                foreach ($alunos as $aluno) {
                                    echo "<h3>" . $aluno['nome'] . "</h3>";
                                }
                            ?>
                        </option>
                        <option value="Aluno 7">
                            <?php
                                require_once('marcaraulaCtrl.php');

                                $alunos = exibiralunos();

                                foreach ($alunos as $aluno) {
                                    echo "<h3>" . $aluno['nome'] . "</h3>";
                                }
                            ?>
                        </option>
                        <option value="Aluno 8">
                            <?php
                                require_once('marcaraulaCtrl.php');

                                $alunos = exibiralunos();

                                foreach ($alunos as $aluno) {
                                    echo "<h3>" . $aluno['nome'] . "</h3>";
                                }
                            ?>
                        </option>
                    </select>
                </datalist>    
        </div>
    </body>
</html>