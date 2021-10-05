<!doctype html>
<html lang="es">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>

<body>
  <div class="container">
    <h2>Lista de Clientes</h2>
    <?php
    require_once '../class/clientes.php';

    $cli = new Clientes();
    $listclientes = $cli->getClientes();
    ?>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">Correo</th>
          <th scope="col">Nombre</th>
          <th scope="col">Edad</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($listclientes as $value) { ?>
          <tr>
            <td>
              <?php echo $value['correo']; ?>
            </td>
            <td>
              <?php echo $value['nombre']; ?>
            </td>
            <td>
              <?php echo $value['edad']; ?>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
</body>

</html>