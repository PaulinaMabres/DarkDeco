<?php
  if (session_status() == PHP_SESSION_NONE) {
      session_start();
  }
  //CARGO ERRORES VACIOS PARA MOSTRAR LA PRIMERA VEZ EN PANTALLA
  $email = "";
  $contrasenia = "";
  $error = "";
  $recuerdame = false;
  $hayErrores = false;

  //SI RECIBO ALGO POR POST
  if($_POST){
    $email = trim($_POST["email"]);
    $contrasenia = trim($_POST["contrasenia"]);
    if( isset($_POST['record']) && $_POST['record'] == "si"){
      $recuerdame = true;
    }
    $UsuariosEnJSON = file_get_contents('json/usuarios.json');    // Traigo los datos del JSON
    $UsuariosEnArray = json_decode($UsuariosEnJSON, true);        // Convierto JSON a Array
    $existe = false;                                              // Variable para guardar si existe el usuario
    $contrasenia_json = "";

    // Variable para guardar contrasenia que viene del JSON
    // Recorro usuario por usuario a partir del array que cree
    if(isset($UsuariosEnArray) || count($UsuariosEnArray) > 0){
      foreach ($UsuariosEnArray as $usuario) {
        if(!$existe && $usuario['email'] == $email) {
          // Marco que el usuario existe
          $existe = true;
          // Leo el campo "contrasenia" del JSON
          $contrasenia_json = $usuario['contrasenia'];
          break;  // *Paulina* agrego el break para que no siga recorriendo usuarios cuando ya lo encontró
        }
      }
    }

    if (!$existe) {
      $error = "Usuario y/o contrasenia incorrecto.";
      $hayErrores = true;
    }
    else if (!password_verify($contrasenia, $contrasenia_json)) {
      // Solo verifico las contrasenia en caso de que el usuario exista
      // La funcion password_verify compara la contrasenia que ingresa
      // el usuario con la contrasenia que está en el JSON
      $error = "Usuario y/o contrasenia incorrecto.";
      $hayErrores = true;
    }

    // Si no hay errores, aca va la parte
    // En donde hay que poner lo que debe hacer la pagina
    // En este ejemplo, muestro como que se logueo correctamente
    // Para que se vea que está todo OK.
    if (!$hayErrores) {
      $_SESSION['emailGuardado'] = $email;
      if ($recuerdame) {
        $_SESSION['recuerdame'] = $recuerdame;
      }else{
        $_SESSION['recuerdame'] = "";
      }
      $_SESSION['logueado'] = true;

      // Ir al home
      header('location: home.php');
      exit;
    }
  }
  else{
    // Esto corre cuando entro a la pagina de login.php
    if( isset($_SESSION['recuerdame'] ) )
    {
      $email = $_SESSION['emailGuardado'];
      $recuerdame = $_SESSION['recuerdame'];
    }
  }

?>
