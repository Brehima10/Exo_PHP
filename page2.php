<?php
 
?>
<!doctype html>
    <html>
        <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>projet1</title>
        </head>
        <body>
            <form method="post">
                <input type="text" name="pseudo" placeholder="Saisissez une valeur" required><br><br>
                <input type="submit" name="Envoyer">
            </form>
            <?php
        
                if(isset($_POST['Envoyer'])){
                    $pseudo=$_POST['pseudo'];
                if(!empty($pseudo)){
                    echo"valeur saisie : ".($_POST['pseudo']); 
                    } 
                }else echo"";
            ?>
        </body>
        
    </html>