<?php  
require_once __DIR__ . '/../model/receipt.php'
?>


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
        <form method="GET" action="user_index.php">

            <div class="input-group mb-3">

                <div class="form-floating">
                    <input type="text" name="name" class="form-control" id="floatingInputGroup1"
                        placeholder="Nominativo">
                    <label for="floatingInputGroup1" id="floatingInputGroup1">Nominativo</label>
                </div>
            </div>
            <button>cerca</button>
        </form>
        <?php  
        foreach($data as $ele){
            echo "<div class='card mt-5' style='width: 18rem;'>
                <div class='card-header'>
                    {$ele['full_name']}
                </div>
                <ul class='list-group list-group-flush'>";
                foreach($ele as $_ele => $value){
                    if($ele !== 'id' && $ele !== 'full_name'){
                        echo "<li class='list-group-item'><strong>$_ele</strong> : $value</li>";
                    }
                }
               echo "</ul>
            </div>";

        }
        ?>



    </div>
</body>

</html>