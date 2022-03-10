<?php

    if (!empty($_GET['name']) && !empty($_GET['email']) && !empty($_GET['age'])) {
        
        $email = $_GET['email'];
        $name = $_GET['name'];
        $age = $_GET['age'];
        
        if(strlen($name) > 3 && strpos($email, '@') !== false && strpos($email, '.') !== false && is_numeric($age) === true){
            echo "Accesso riuscito <br>";
        } else {
            echo "Accesso negato <br>";
        }
    } else {
        echo "Inserisci i tuoi dati di accesso! <br>";
    }

?>