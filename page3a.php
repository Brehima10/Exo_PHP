<?php
        
                if(isset($_POST['Envoyer'])){
                    $première=$_POST['première'];
                    $deuxième=$_POST['deuxième'];
                if(!empty($première) AND !empty($deuxième)){
                    echo"première valeur : ".($_POST['première']);
                    echo"</br>";
                    echo"deuxième valeur : ".($_POST['deuxième']); 
                    } 
                }else echo"infos manquant";
            ?>