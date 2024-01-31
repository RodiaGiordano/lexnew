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

        <?php if(isset($data)){

            foreach($data as $ele){
                echo "<div class='card mt-5'>
                <div class='card-body'>
                <h2>
                <a href='./receipt_index.php?" . http_build_query(['id' => $ele['id']]) . "'>
                " . $ele['name'] . " " . $ele['last_name'] . "
                </a>
                </h2>
                </div>
                </div>";
            }
        } else{
            echo "<div class='alert alert-danger mt-5'>
                      $error
                      </div>";
                    }
                ?>

    </div>
    </div>
</body>

</html>