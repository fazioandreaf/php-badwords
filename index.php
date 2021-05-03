<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- parentesi quadre  -->
    <!-- Creare una variabile con un paragrafo di
    testo.
    Visualizzare a schermo il paragrafo con la
    relative lunghezza e sostituire la
    badword passata in GET con tre *. -->
    <div>
    <h1>Versione originale</h1>
    <?php
    $name ='Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem natus voluptates cumque praesentium vel blanditiis omnis modi repudiandae dolore? Omnis optio odio eaque fuga praesentium soluta, dignissimos ut impedit deserunt.';
    echo $name;
    ?>
    </div>
    <div>
    <h1>Versione tradotta</h1>

    <?php
    $realName = str_replace('Lorem','  ***  ',$name);
    echo $realName;
    ?>
    </div>
    <div>
    <h1>lunghezza</h1>
    <?php
    $lunghezza = strlen($name);
    echo $lunghezza;
    ?>
    </div>



</body>
</html>