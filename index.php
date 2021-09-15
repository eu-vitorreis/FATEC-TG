<?php
    require_once "vendor/autoload.php";
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <title>LicitaTudo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- link Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Link JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
        <!-- Custom styles for this template -->
        <link href="src/scripts/utils/style.css" rel="stylesheet">
    </head>

    <body>
        <a href="src/Cadastro/Privado/novoCadastro.php">Criar conta privada</a>
        <br>
        <a href="src/Cadastro/Publico/novoCadastro.php">Criar conta pública</a>
        <?php
        if(isset($_SESSION['login'])) {
            echo "<p>Logado como " . $_SESSION['login'] . " </p>";
        }      
        ?>
    </body>

</html>
