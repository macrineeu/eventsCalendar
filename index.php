<?php require_once("calendario.php");?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="calendario.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calendario - PHP + JAVASCRIPT</title>
    </head>

    <body>

        <div class="calendario">
            <?php montaCalendario();?>
        </div>

        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/function.js"></script>    
    </body>
</html>
