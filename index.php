<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h2>cerca l'utente</h2>
        <form method="GET" action="view/user_index.php">

            <div class="input-group mb-3">

                <div class="form-floating">
                    <input type="text" name="name" class="form-control" id="floatingInputGroup1"
                        placeholder="Nominativo" required>
                    <label for="floatingInputGroup1" id="floatingInputGroup1">Nominativo</label>
                </div>
            </div>
            <button type="submit">cerca</button>
        </form>


    </div>
</body>

</html>