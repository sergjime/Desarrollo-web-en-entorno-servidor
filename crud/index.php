<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<title>CLIENTES</title>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark pt-2">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <form class="form-inline my-2 my-lg-0 mr-3">
            <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-success my-2 my-sm-0" type="submit">Buscar</button>
        </form>
    </div>
</nav>
<?php
	include 'conexion.php';
	$registros = $conexion->query("SELECT * FROM cliente")->fetchAll(PDO::FETCH_OBJ);
?>
<div class="container mt-4">
    <div class='mb-4'>
        <button type="button" class="btn btn-success">Crear nuevo cliente</button>
    </div>
    <table class="table table-striped table-bordered">
        <thead class="text-white bg-dark">
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Email</th>
                <th scope="col">Teléfono</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($registros as $cliente): ?>
            <tr>
                <td scope="row"><?php echo $cliente->Nombre ?></td>
                <td scope="row"><?php echo $cliente->Email ?></td>
                <td scope="row"><?php echo $cliente->Telf ?></td>
                <td scope="row">
                    <button type="button" class="btn btn-primary" onclick="location.href='form.php?id=<?php echo $cliente->Id_Cliente ?> & nombre=<?php echo $cliente->Nombre ?> & email=<?php echo $cliente->Email ?> & telf=<?php echo $cliente->Telf ?> & edit=edit'" name="editar">Editar</button>
                </td>
                <td scope="row">
                    <button type="button" class="btn btn-danger" onclick="location.href='eliminar.php?id=<?php echo $cliente->Id_Cliente ?>'" name="eliminar">Eliminar</button>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>