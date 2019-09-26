<html>
    <head>
        <title>Schedule class</title>
        <link rel="shortcut icon" href="../../ico.ico" type="image/x-icon" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="jumbotron text-center">
        <h1>Schedule class</h1>
        </div>
        <center>
        <div>
            <h2>Select student: </h2>
            <input id="idaluno" name="Aluno" type="text" list="listaalunos">
                <datalist id="listaalunos">
                    <select name="estiloaluno" id="estiloaluno">
                        <option value="Aluno 1">
                            <?php
                                require_once('marcaraulaCtrl.php');

                                $alunos = exibiraluno();

                                foreach ($alunos as $usuario) {
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
        </div></center>
    </body>
</html>