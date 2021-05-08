<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-5">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-2">
        <form method="post">
            <button type="button" class="btn btn-primary" onclick="displayData();">Consultar</button>
        </form>
        </div>
        <table class="table table-bordered" id="table-1">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Type</th>
                    <th scope="col">Color</th>
                </tr>
            </thead>
            <tbody>
            
            </tbody>
        </table>
    </div>
</body>

<script src="script.js"></script>
</html>
