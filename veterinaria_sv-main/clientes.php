<?php
session_start();
?>
<!doctype html>
<html lang="en">
<?php include('menu.php'); ?>
<?php include('config.php'); ?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Mascotas</title>
</head>

<body>
    <div class="container"><br>
        <div class="row">
            <div class="col-4">
                <div class="row justify-content-center">
                    <h4>Nueva Clientes</h4>
                    <hr>
                    <form class="mx-auto" method="post" id="form_cliente">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre:</label>
                            <input type="text" class="form-control" id="nombre" name="nombre">
                        </div>
                        <div class="mb-3">
                            <label for="raza" class="form-label">telefono:</label>
                            <input type="text" class="form-control" id="telefono" name="telefono">
                        </div>
                        <div class="mb-3">
                            <label for="color" class="form-label">dui:</label>
                            <input type="text" class="form-control" id="dui" name="dui">
                        </div>
                        <div class="mb-3">
                            <label for="direccion" class="form-label">direccion:</label>
                            <input type="text" class="form-control" id="direccion" name="direccion">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">email:</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="sexo" class="form-label">status:</label>
                            <select class="form-select" id="status" name="status">
                                <option value="1">1</option>
                                <option value="0">0</option>
                            </select>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>


                </div>
            </div>
            <div class="col-8">
                <input type="text" id="busqueda-cliente" placeholder="Buscar cliente...">
                <table id="tabla-cliente" class="table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Telefono</th>
                            <th>Dui</th>
                            <th>Direccion</th>
                            <th>Email</th>
                            <th>status</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- aquí se llenarán los datos de la consulta -->
                    </tbody>
                </table>

            </div>


            <!-- Optional JavaScript; choose one of the two! -->
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="js/cliente.js"></script>
            <!-- Option 1: Bootstrap Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

            <!-- Option 2: Separate Popper and Bootstrap JS -->
            <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>