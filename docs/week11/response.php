<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="./css/style.css" rel="stylesheet">
        <title>Document</title>
    </head>
    <body>
        <article class="articulo flex-column">
            <h3>Respuesta</h3>
            <section class="seccion flex-row">
                <output id="response2">
                    Welcome <?php echo $_GET["amount"] * ((($_GET["apr"]/12)*(1+($_GET["apr"]/12))**$_GET["term"]*12) / (((1+($_GET["apr"]/12))**$_GET["term"]*12)-1)); ?>
                </output>
            </section>
        </article>
    </body>
</html> 