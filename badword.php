<?php 

$paragraph = $_GET["paragraph_user"];
$badword = $_GET["badword_user"];

?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">*
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP BADWORDS</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
</html>
<body>
    <main>
        <div class="container">
            <h1>Bentornato!!</h1>
            <h2>Il tuo paragrafo è:
                <?php echo $paragraph; ?>
                è la sua lungezza è 
                <?php echo strlen($paragraph); ?>
            </h2>
        </div>
    </main>
</body>