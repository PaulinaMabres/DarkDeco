<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

//CARGO ERRORES VACIOS PARA MOSTRAR LA PRIMERA VEZ EN PANTALLA
$nombre = "";
$apellido = "";
$email = "";
$foto = "";
$contrasenia = "";
$confirmarcontrasenia = "";
$preguntaSecreta = "";
$respuestaSecreta = "";

$errorNombre = "";
$errorApellido = "";
$errorEmail = "";
$errorFoto = "";
$errorContrasenia = "";
$errorRespuestaSecreta = "";
$hayErrores = false;
// $errores = 0;
//SI RECIBO ALGO POR POST
if($_POST){

  //TOMO LO RECIBIDO POR EL FOMRULARIO Y LO GUARDO SIN ESPACIOS
  $nombre = trim($_POST["nombre"]);
  $apellido = trim($_POST["apellido"]);
  $email = trim($_POST["email"]);
  $foto = $_FILES["foto"]["name"];
  $contrasenia = trim($_POST["contrasenia"]);
  $confirmarcontrasenia = trim($_POST["contraseniaConfirmar"]);
  $preguntaSecreta = $_POST["preguntaSecreta"];
  $respuestaSecreta = trim($_POST["respuestaSecreta"]);;

  //VALIDACION DE CADA DATO
  if ($nombre == "") {
    $errorNombre = "Completa el nombre";
    $hayErrores = true;
    //$errores++;
  }

  if ($apellido == "") {
    $errorApellido = "Completa el apellido";
    $hayErrores = true;
  }

  if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errorEmail = "Email no válido";
    $hayErrores = true;
  }

  if ($contrasenia ==""){
    $errorContrasenia = "Completa la contraseña";
    $hayErrores = true;
  } else if (strlen($contrasenia)<4) {
    $errorContrasenia = "La contraseña debe tener al menos 4 caracteres";
    $hayErrores = true;
  } else if($contrasenia != $confirmarcontrasenia){
    $errorContrasenia = "Las contraseñas no coinciden";
    $hayErrores = true;
  }

  if ($respuestaSecreta ==""){
    $errorRespuestaSecreta = "Completa la respuesta secreta";
    $hayErrores = true;
  }

  if (!$hayErrores) {
    // FOTO
    $nombreFotoGenerado = ''; // Si no ponen foto da error al armar el array del usuario
    if(isset($_FILES["foto"])){
      //si el dato de error es OK...
      if($_FILES["foto"]["error"] === UPLOAD_ERR_OK){
        $nombreFoto = $_FILES["foto"]["name"]; //guardo el nombre del archivo
        $origen = $_FILES["foto"]["tmp_name"]; //guardo el nombre temporal del archivo
        $ext = pathinfo($nombreFoto,PATHINFO_EXTENSION); //uso la informacion del path que es la url, para tomar y guardar la extension

        // $nombreFotoGenerado = $usuario."fotoPerfil.".$ext;
        $nombreFotoGenerado = $email.".".$ext;
        $destino = "fotos/".$nombreFotoGenerado; //genero la ruta donde guardo el archivo

        //guardo el archivo con esta funcion
        move_uploaded_file($origen,$destino);
        // $errorFoto = "archivo subido con exito";
        $errorFoto = "";
      }
    }else{
      $errorFoto = "error con la foto";
      $hayErrores = true;
    }

    $UsuariosEnJSON = file_get_contents('json/usuarios.json');    // Traigo los datos del JSON
    $UsuariosEnArray = json_decode($UsuariosEnJSON, true);        // Convierto JSON a Array
    $existe = false;                                              // Variable para guardar si existe el usuario

    // Recorro usuario por usuario a partir del array que cree
    foreach ($UsuariosEnArray as $usuario) {
      if(!$existe && $usuario['email'] == $email) {
        $existe = true;
        break;  // *Paulina* agrego el break para que no siga recorriendo usuarios cuando ya lo encontró
      }
    }

    if ($existe) {
      $errorEmail = "Email existente.";
      $hayErrores = true;
    }

    if(!$hayErrores){
      //ARMO UN ARRAY ASOCIATIVO DEL USUARIO CON SUS DATOS YA VALIDADOS
      $UsuarioNuevo = [
        "nombre"=> $nombre,
        "apellido" => $apellido,
        "email"=> $email,
        "foto" => $nombreFotoGenerado,
        // Cambio a la palabra "contrasenia" porque con la ñ
        // el JSON se guarda mal.
        "contrasenia" => password_hash($contrasenia, PASSWORD_DEFAULT),
        "preguntaSecreta" => $preguntaSecreta,
        "respuestaSecreta" => password_hash($respuestaSecreta, PASSWORD_DEFAULT)
      ];

      // Agrego mi usuario nuevo al array de todos los usuarios
      $UsuariosEnArray[] = $UsuarioNuevo;

      // Convierto de nuevo el array con todos los usuarios a formato JSON
      $NuevosUsuariosEnJson = json_encode($UsuariosEnArray);

      // Guardo el JSON
      file_put_contents('json/usuarios.json',$NuevosUsuariosEnJson);

      $_SESSION['emailGuardado'] = $email;
      $_SESSION['recuerdame'] = "";
      $_SESSION['logueado'] = false;

      header('location: login.php');
    }
  }

  if($hayErrores){
    $_POST["contrasenia"] = '';
    $_POST["contraseniaConfirmar"] = '';
  }
}

?>
