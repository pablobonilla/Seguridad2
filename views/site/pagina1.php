<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Listado de Areas</title>
  <style>
    .tablalistado {
      border-collapse: collapse;
      box-shadow: 0px 0px 8px #000;
      margin: 20px;
    }

    .tablalistado th {
      border: 1px solid #000;
      padding: 5px;
      background-color: #ffd040;
    }

    .tablalistado td {
      border: 1px solid #000;
      padding: 5px;
      background-color: #ffdd73;
    }
  </style>
</head>

<body>

  <?php
  //                    host          user   Pass   DataBase
  //$mysql = new mysqli("localhost", "root", "", "seguridad");
  $mysql = new mysqli("localhost", "ki296803_pbonilla", "bKmHOFONGl6u", "ki296803_hpbaseguridad");
  if ($mysql->connect_error)
    die("Problemas con la conexión a la base de datos");

  $registros = $mysql->query("select * from areas") or
    die($mysql->error);

  echo '<table class="tablalistado">';
  echo '<tr><th>Area id</th><th>Nombre</th></tr>';
  while ($reg = $registros->fetch_array()) {
    echo '<tr>';
    echo '<td>';
    echo $reg['area_id'];
    echo '</td>';
    echo '<td>';
    echo $reg['area_nombre'];
    echo '</td>';
    
    echo '</tr>';
  }
  echo '<table>';

  $mysql->close();

  ?>
</body>

</html>