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
        <h1>
            PHP BADWORDS
        </h1>
        <div class="container">
            <form action="./badword.php" method="GET">
                <div class="mb-3">
                    <label for="paragraph-user" class="form-label">Metti qui il paragrafo che vuoi</label>
                    <input type="text" class="form-control" id="paragraph-user" name="paragraph_user">
                </div>
                <form>
                <div class="mb-3">
                    <label for="badword-user" class="form-label">Metti qui la parola da censurare</label>
                    <input type="text" class="form-control" id="badword-user" name="badword_user">
                </div>
                <button type="submit" class="btn btn-primary">Send</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </from>
        </div>
    </main>
</body>