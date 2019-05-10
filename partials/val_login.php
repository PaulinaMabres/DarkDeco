<?php

  session_start();
  //CARGO ERRORES VACIOS PARA MOSTRAR LA PRIMERA VEZ EN PANTALLA
  $email = "";
  $contraseña = "";
  $recuerdame = "";

  $error = "";
  $hayErrores = false;

  //SI RECIBO ALGO POR POST
  if($_POST){

    $email = trim($_POST["email"]);
    $contraseña = trim($_POST["contraseña"]);
    $recuerdame = $_POST["record"];

    $UsuariosEnJSON = file_get_contents('json/usuarios.json');    // Traigo los datos del JSON
    $UsuariosEnArray = json_decode($UsuariosEnJSON, true);        // Convierto JSON a Array
    $existe = false;                                              // Variable para guardar si existe el usuario
    $contraseña_json = "";                                        // Variable para guardar contraseña que viene del JSON

    // Recorro usuario por usuario a partir del array que cree
    foreach ($UsuariosEnArray as $usuario) {
      if(!$existe && $usuario['email'] == $email) {
        // Marco que el usuario existe
        $existe = true;
        // Leo el campo "contrasenia" del JSON
        $contraseña_json = $usuario['contrasenia'];
      }
    }

    if (!$existe) {
      $error = "Usuario y/o contraseña incorrecto.";
      $hayErrores = true;
    }

    // Solo verifico las contraseña en caso de que el usuario exista
    // La funcion password_verify compara la contraseña que ingresa
    // el usuario con la contraseña que está en el JSON
    if ($existe && !password_verify($contraseña, $contraseña_json)) {
      $error = "Usuario y/o contraseña incorrecto.";
      $hayErrores = true;
    }

    // Si no hay errores, aca va la parte
    // En donde hay que poner lo que debe hacer la pagina
    // En este ejemplo, muestro como que se logueo correctamente
    // Para que se vea que está todo OK.
    if (!$hayErrores) {
      // Ir a la pagina login
      if ($recuerdame == "si") {
        $_SESSION['emailGuardado'] = $email;
      }

      header('Location:Home.php');
    }

  }

?>