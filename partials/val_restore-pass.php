<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

// Variables para persistencia
$email = "";
$contrasenia = "";
$respuestaSecreta = "";
$preguntaSecrectaTexto = 'respuesta secreta';

//CARGO ERRORES VACIOS PARA MOSTRAR LA PRIMERA VEZ EN PANTALLA
$error = "";
$hayErrores = false;

//SI RECIBO ALGO POR POST
if($_POST){
  $email = trim($_POST["email"]);
  $contrasenia = trim($_POST["contrasenia"]);
  $confirmarcontrasenia = trim($_POST["confirmarContrasenia"]);
  $respuestaSecreta = trim($_POST["respuestaSecreta"]);

  if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $error = "Email no válido";
    $hayErrores = true;
  }

  if(!$hayErrores){
    // Verificar que el usuario exista
    $UsuariosEnJSON = file_get_contents('json/usuarios.json');    // Traigo los datos del JSON
    $UsuariosEnArray = json_decode($UsuariosEnJSON, true);        // Convierto JSON a Array
    // var_dump($UsuariosEnArray);
    $contrasenia_json = "";

    $existe = false;
    $indice = 0; // Para saber a qué usuario le actualizo los datos
    if(isset($UsuariosEnArray) || count($UsuariosEnArray) > 0){
      foreach ($UsuariosEnArray as $usuario) {
        if(!$existe && $usuario['email'] == $email) {
          $existe = true;
          $respuestaSecretaJSON = $usuario['respuestaSecreta'];
          if($usuario['preguntaSecreta'] == 'a'){
            $preguntaSecrectaTexto = 'nombre de tu escuela primaria';
          }elseif($usuario['preguntaSecreta'] == 'b'){
            $preguntaSecrectaTexto = 'nombre de tu superhéroe favorito';
          }elseif($usuario['preguntaSecreta'] == 'c'){
            $preguntaSecrectaTexto = 'año de nacimiento de tu madre';
          }
          // var_dump($usuario);
          // var_dump($preguntaSecrectaTexto);
          // exit;

          break;  // *Paulina* agrego el break para que no siga recorriendo usuarios cuando ya lo encontró
        }
        $indice++;
      }
    }

    if(!$existe){
      $error = "No existe usuario con ese mail";
      $hayErrores = true;
    }
  }

  if (!$hayErrores){
    if($respuestaSecreta == "") {
      $error = "Completa la respuesta secreta";
      $hayErrores = true;
    } elseif (!password_verify($respuestaSecreta, $respuestaSecretaJSON)) {
      $error = "La respuesta secreta es incorrecta";
      $hayErrores = true;
    }
  }

  if(!$hayErrores){
    if ($contrasenia ==""){
      $error = "Completa la contraseña";
      $hayErrores = true;
    } else if (strlen($contrasenia)<4) {
      $error = "La contraseña debe tener al menos 4 caracteres";
      $hayErrores = true;
    } else if($contrasenia != $confirmarcontrasenia){
      $error = "Las contraseñas no coinciden";
      $hayErrores = true;
    }
  }

  if (!$hayErrores) {
    // Guardo la nueva contraseña del usuario
    $UsuariosEnArray[$indice]['contrasenia'] = password_hash($contrasenia, PASSWORD_DEFAULT);

    // Convierto de nuevo el array con todos los usuarios a formato JSON
    $UsuariosEnJson = json_encode($UsuariosEnArray);

    // Guardo el JSON
    file_put_contents('json/usuarios.json',$UsuariosEnJson);

    $_SESSION['emailGuardado'] = $email;
    $_SESSION['nombreGuardado'] = $nombre;
    $_SESSION['recuerdame'] = "";
    $_SESSION['logueado'] = false;

    // Ir al login
    header('location: login.php');
  }
}

?>
