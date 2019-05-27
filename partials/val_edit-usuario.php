<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

// Buscar los datos del usuario.
$UsuariosEnJSON = file_get_contents('json/usuarios.json');    // Traigo los datos del JSON
$UsuariosEnArray = json_decode($UsuariosEnJSON, true);        // Convierto JSON a Array

$nombre = "";
$apellido = "";
$foto = "";

// var_dump($_SESSION);
// exit;

$indice = 0; // Para saber a qué usuario le actualizo los datos
if(isset($UsuariosEnArray) || count($UsuariosEnArray) > 0){
  foreach ($UsuariosEnArray as $usuario) {
    if($usuario['email'] == $_SESSION["emailGuardado"]) {
      $nombre = $usuario['nombre'];
      $apellido = $usuario['apellido'];
      $foto = $usuario['foto'];
      break;  // *Paulina* agrego el break para que no siga recorriendo usuarios cuando ya lo encontró
    }
    $indice++;
  }
}

//CARGO ERRORES VACIOS PARA MOSTRAR LA PRIMERA VEZ EN PANTALLA
$errorNombre = "";
$errorApellido = "";
$errorFoto = "";

$hayErrores = false;

//SI RECIBO ALGO POR POST
if($_POST){
  //TOMO LO RECIBIDO POR EL FOMRULARIO Y LO GUARDO SIN ESPACIOS
  $nombre = trim($_POST["nombre"]);
  $apellido = trim($_POST["apellido"]);
  $foto = $_FILES["foto"]["name"];

  //VALIDACION DE CADA DATO
  if ($nombre == "") {
    $errorNombre = "Completa el nombre";
    $hayErrores = true;
  }

  if ($apellido == "") {
    $errorApellido = "Completa el apellido";
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

    if(!$hayErrores){
      // Guardo los datos editados en el array de usuarios
      $UsuariosEnArray[$indice]['nombre'] = $nombre;
      $UsuariosEnArray[$indice]['apellido'] = $apellido;
      $UsuariosEnArray[$indice]['foto'] = $nombreFotoGenerado;

      // Convierto de nuevo el array con todos los usuarios a formato JSON
      $UsuariosEnJson = json_encode($UsuariosEnArray);

      $errorApellido = "OK --> Home";
      // Guardo el JSON
      file_put_contents('json/usuarios.json',$UsuariosEnJson);

      $_SESSION['nombreGuardado'] = $nombre;


      header('location: home.php');
    }
  }

}

?>
