<?php


include('conexionv.php');

if (isset($_POST['insertadocente'])) {
  $Identificacion = $_POST['Identificacion'];
  $PrimerNombre = $_POST['PrimerNombre'];
  $SegundoNombre = $_POST['SegundoNombre'];
  $PrimerApellido = $_POST['PrimerApellido'];
  $SegundoApellido = $_POST['SegundoApellido'];
  $FechaNacimiento = $_POST['FechaNacimiento'];
  $Sexo = $_POST['Sexo'];
  $Celular = $_POST['Celular'];
  $Correo = $_POST['Correo'];
  $Direccion = $_POST['Direccion'];
  $Ciudad = $_POST['Ciudad'];
  $Departamento = $_POST['Departamento'];
  $Pais = $_POST['Pais'];


  $query = "INSERT INTO docente(Identificacion,PrimerNombre,SegundoNombre, PrimerApellido, SegundoApellido, FechaNacimiento, Sexo, Celular, Correo, Direccion, Ciudad, Departamento, Pais) VALUES ('$Identificacion', '$PrimerNombre', '$SegundoNombre', '$PrimerApellido', '$SegundoApellido', '$FechaNacimiento', '$Sexo', '$Celular', '$Correo', '$Direccion', '$Ciudad', '$Departamento', '$Pais')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Ocurrio un error, verifique los datos registrados.");
  }

  $_SESSION['message'] = 'Docente Registrado exitosamente!';
  $_SESSION['message_type'] = 'success';
  header('Location: GestionDocente.php');

}

?>
