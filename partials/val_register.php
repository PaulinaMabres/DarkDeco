<?php

  //CARGO ERRORES VACIOS PARA MOSTRAR LA PRIMERA VEZ EN PANTALLA
  $nombre = "";
  $apellido = "";
  $email = "";
  $foto = "";
  $contraseña = "";
  $confirmarcontraseña = "";

  $errorNombre = "";
  $errorApellido = "";
  $errorEmail = "";
  $errorFoto = "";
  $errorContraseña = "";
  $hayErrores = false;
  // $errores = 0;
  //SI RECIBO ALGO POR POST
  if($_POST){

    //TOMO LO RECIBIDO POR EL FOMRULARIO Y LO GUARDO SIN ESPACIOS
    $nombre = trim($_POST["nombre"]);
    $apellido = trim($_POST["apellido"]);
    $email = trim($_POST["email"]);
    $foto = $_FILES["foto"];
    $contraseña = trim($_POST["contraseña"]);
    $confirmarcontraseña = trim($_POST["contraseñaConfirmar"]);

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

    if ($contraseña ==""){
      $errorContraseña = "Completa la contraseña";
      $hayErrores = true;
    }
    else if (strlen($contraseña)<4)
    {
      $errorContraseña = "La contraseña debe tener al menos 4 caracteres";
      $hayErrores = true;
    }else if($contraseña != $confirmarcontraseña){
      $errorContraseña = "Las contraseñas no coinciden";
      $hayErrores = true;
    }

    if (!$hayErrores) {
      if(isset($_FILES["foto"])){
        //si el dato de error es OK...
        if($_FILES["foto"]["error"] === UPLOAD_ERR_OK){
          //guardo el nombre del archivo
          $nombreFoto = $_FILES["foto"]["name"];
          //guardo el nombre temporal del archivo
          $origen = $_FILES["foto"]["tmp_name"];
          //uso la informacion del path que es la url, para tomar y guardar la extension
          $ext = pathinfo($nombreFoto,PATHINFO_EXTENSION);

          $destino = "";
          $destino = $destino."fotos/";
          //genero la ruta donde guardo el archivo
          $destino = $destino."foto_".$email.".".$ext;

          //$destino = "archivos/".$nombre."_fotodeperfil.".$ext;

          //guardo el archivo con esta funcion
          move_uploaded_file($origen,$destino);
          $errorFoto = "archivo subido con exito";
        }
      }else{
          $errorFoto = "error con la foto";
          $hayErrores = true;
      }
    }

    $UsuariosEnJSON = file_get_contents('json/usuarios.json');    // Traigo los datos del JSON
    $UsuariosEnArray = json_decode($UsuariosEnJSON, true);        // Convierto JSON a Array
    $existe = false;                                              // Variable para guardar si existe el usuario

    // Recorro usuario por usuario a partir del array que cree
    foreach ($UsuariosEnArray as $usuario) {
      if(!$existe && $usuario['email'] == $email) {
        $existe = true;
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
      "foto" => $nombre."fotodeperfil.".$ext,
      // Cambio a la palabra "contrasenia" porque con la ñ
      // el JSON se guarda mal.
      "contrasenia" => password_hash($contraseña, PASSWORD_DEFAULT)];

      // Agrego mi usuario nuevo al array de todos los usuarios
      $UsuariosEnArray[] = $UsuarioNuevo;

      // Convierto de nuevo el array con todos los usuarios a formato JSON
      $NuevosUsuariosEnJson = json_encode($UsuariosEnArray);

      // Guardo el JSON
      file_put_contents('json/usuarios.json',$NuevosUsuariosEnJson);

      header('Location:Login.php');
    }

}

?>
