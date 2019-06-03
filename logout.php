<?php
  if (session_status() == PHP_SESSION_NONE) { session_start(); }

  if( isset($_SESSION['logueado']) &&  $_SESSION['logueado'] )
  {
    $email = "";
    $recuerdame = false;

    // Borrar cookie
    $_COOKIE['UsuarioLogueado']  = false;
    setcookie("UsuarioLogueado", false, time() - 3600 , "/");

    if( isset($_SESSION['recuerdame']) && $_SESSION['recuerdame'] ){
      $email = $_SESSION['emailGuardado'];
      $recuerdame = true;
    }
    session_destroy();
    if( $recuerdame ){
      session_start();
      $_SESSION['emailGuardado'] = $email;
      $_SESSION['recuerdame'] = true;
    }
    header('Location:home.php');
  }else{
    header('Location:login.php');
  }
?>
