<!DOCTYPE html>
<html lang="en">

<?php  
require_once __DIR__ . '/../model/user.php'

?>

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
        <form method="GET" action="user_index.php">

            <div class="input-group mb-3">

                <div class="form-floating">
                    <input type="text" name="name" class="form-control" id="floatingInputGroup1"
                        placeholder="Nominativo">
                    <label for="floatingInputGroup1" id="floatingInputGroup1">Nominativo</label>
                </div>
            </div>
            <button type="submit">cerca</button>
        </form>
        <!-- modifica -->
        <?php if(isset($data)) :  ?>
        <?php foreach($data as $ele) : ?>
        <div class='card mt-5'>
            <div class='card-body d-flex gap-5'>
                <h2><?= "{$ele['name']}  {$ele['last_name']}"?></h2>
                <a class="btn btn-primary" href='./receipt_index.php?<?= http_build_query(['id' => $ele['id']]) ?>'>
                    Visualizza le ricevute
                </a>
                <a class="btn btn-primary" href='./receipt_form.php?<?= http_build_query(['id' => $ele['id']]) ?>'>
                    Aggiungi ricevuta
                </a>
            </div>
        </div>
        <?php endforeach; ?>
        <?php else : ?>
        <div class='alert alert-danger mt-5'>
            <?= $error ?>
        </div>
        <?php endif;?>





    </div>
</body>

</html>