<!DOCTYPE html>
<html lang="en">

<?php  
// require_once __DIR__ . '/../model/user.php'

$user_id = $_GET['id'];

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
        <h2>I campi constrassegnati con "*" sono obbligatori</h2>
        <form action="../model/add_receipt.php?<?= http_build_query(['id' => $user_id]) ?>" method="POST"
            class="row g-3 mt-3">
            <div class="col-md-3">
                <label for="number" class="form-label">Numero Fattura*</label>
                <input type="text" class="form-control" id="number" name="number" required>
            </div>
            <div class="col-md-2">
                <label for="date" class="form-label">Data ricevuta*</label>
                <input type="date" class="form-control" id="date" name="date" required>
            </div>

            <div class="col-md-2">
                <label for="tax_rate" class="form-label">Aliquota*</label>
                <select id="tax_rate" class="form-select" name="tax_rate" required>
                    <option value="" selected>Scegli aliquota</option>
                    <option value="1.24">24%</option>
                    <option value="1.27">27%</option>
                </select>
            </div>

            <div class="col-4">
                <label for="amount" class="form-label">Importo*</label>
                <input type="number" step="0.01" min="0" max="999.99" class="form-control" id="amount" name="amount"
                    required>
            </div>

            <div class="col-12">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Aggiungi ricevuta</button>
            </div>
        </form>

        <a href="../index.php" class="btn btn-success mt-3">Torna alla ricerca</a>


    </div>
</body>

</html>