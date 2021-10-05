<?php
require_once "conection.php";

class Clientes extends Conection
{
  public function __construct()
  {
    // Referencia de la conexion
    parent::__construct();
  }

  // Listar sin procedimientos almacenados
  public function getClientes()
  {
    $res = $this->con->query("SELECT * FROM clientes");
    // Convertir a tipo array $res
    $listclientes = $res->fetch_all(MYSQLI_ASSOC);
    return $listclientes;
  }

  public function insertClientes($correo, $nombre, $edad)
  {
    $insertar = $this->con->query("INSERT INTO clientes values('correo', 'nombre', 'edad')");
    header("Location: list.php");
  }
}
