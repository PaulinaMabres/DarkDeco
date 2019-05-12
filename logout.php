<?php
  if (session_status() == PHP_SESSION_NONE) { session_start(); }

  if( isset($_SESSION['logueado']) &&  $_SESSION['logueado'] )
  {
    $email = "";
    $recuerdame = false;
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
