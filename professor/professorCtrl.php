<?php        
    
    session_start();
    
    if ($_SESSION["tipo"] == 1) {
        $erro = "You're not a teacher";
        $_SESSION["erro"] = $erro;
        header("Location: loginView.php");
        exit();
    }
?>