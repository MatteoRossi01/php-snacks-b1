<?php
    $testo = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed sint, ipsum asperiores impedit doloremque quos 
    officiis quam possimus iste ratione veniam veritatis iure cumque. Explicabo necessitatibus omnis nemo blanditiis quis!
    Lorem ipsum dolor sit. amet consectetur adipisicing elit. Nam sunt minus obcaecati facilis, quia commodi dolorum est nulla.';
    $testoDiviso = explode(".",$testo);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Testo:</h1>
    <p><?php echo $testo ?></p>
    <h1>Testo in paragrafi:</h1>
    <p><?php for($i=0; $i < count($testoDiviso); $i++){echo $testoDiviso[$i] . '<br>';}?></p>
</body>
</html>