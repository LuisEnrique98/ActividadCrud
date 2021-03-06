<?php
include("conexion.php");
$con = conectar();

$sql = "select * from city";
$query = mysqli_query($con, $sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title> ACTIVIDAD JULIO 6</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">ACTIVIDAD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="inicio.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="registrarCliente.php">Registrar Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="registrarCiudad.php">Registrar Ciudad</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="registrarPais.php">Registrar País</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        
            <div class="col-md-3">
                <h1>Registrar Clientes</h1>
                <form action="insertar.php" method="POST">
                    <label for="formGroupExampleInput" class="form-label">Nombre</label>
                    <input type="text" class="form-control mb-3" name="first_name" placeholder="Nombre" required>
                    <label for="formGroupExampleInput" class="form-label">Apellidos</label>
                    <input type="text" class="form-control mb-3" name="last_name" placeholder="Apellidos" required>
                    <label for="formGroupExampleInput" class="form-label">Correo Electrónico</label>
                    <input type="text" class="form-control mb-3" name="email" placeholder="Correo Electrónico" required>
                    <label for="formGroupExampleInput" class="form-label">Dirección</label>
                    <input type="text" class="form-control mb-3" name="address" placeholder="Dirección" required>
                    <label for="formGroupExampleInput" class="form-label">Ciudad</label>
                    <select name="city_id" class="form-control mb-3">
                        <?php
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <option value="<?php echo $row['city_id'] ?>"> <?php echo $row['city'] ?> </option>
                        <?php
                        }
                        ?>
                    </select>
                    <label for="formGroupExampleInput" class="form-label">Estado</label>
                    <select name="active" class="form-control mb-3">
                        <option value="1">Activo</option>
                        <option value="0">No Activo</option>
                    </select>
                    <input type="submit" class="btn btn-primary">
                </form>
            </div>
        
    </div>
</body>