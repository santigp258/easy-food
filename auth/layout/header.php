<?php
include_once('../enviroments.php');
//sesion exist redirect to dashboard
/* if(!empty($_SESSION['uid'])){
  $url = BASE_URL . 'login/dashboard.php';
  header('Location: ' . $url);
} */
?>
<!doctype html>
<html class="no-js" lang="es">

<head>
    <meta charset="utf-8">
    <title>Login-Mp</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->
    <!-- STYLES PERSONALIZATED -->
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/auth/resources/css/normalize.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/auth/resources/css/estilos.css">
    <!-- TOASTR -->
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/admin/views/plugins/toastr/toastr.min.css">
    <!-- JQUERY -->
    <script src="<?php echo BASE_URL ?>/admin/views/plugins/bootstrap/jquery.js"></script>
    <meta name="theme-color" content="#fafafa">
</head>

<body>