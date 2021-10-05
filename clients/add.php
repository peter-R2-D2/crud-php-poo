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

  <?php 
    if(isset($_POST['registrar'])){
      $correo = $_POST['correo'];
      $nombre = $_POST['nombre'];
      $edad = $_POST['edad'];

      require_once "../class/clientes.php";
      $cli = new Clientes();
      $cli->insertClientes($correo, $nombre, $edad);
    }
  ?>

  <div class="container">
    <h2>Agregar Cliente</h2>
    <div class="row">
      <div class="col-md-5">
        <form>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Ingresar Correo</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="correo">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Ingresar Nombre</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="nombre">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Ingresar Edad</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="edad">
          </div>
          <button type="submit" class="btn btn-primary" name="registrar">Submit</button>
        </form>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
</body>

</html>