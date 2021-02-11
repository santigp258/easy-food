<?php
require_once('../../../connection/conn.php');
require_once('../../models/AuthModel.php');
$userClass = new Auth();

$errorMsgReg = '';
$errorMsgLogin = '';
/* Login Form */
if (!empty($_POST['loginSubmit'])) {
    $usernameEmail = $_POST['usernameEmail'];
    $password = $_POST['password'];
    if (strlen(trim($usernameEmail)) > 1 && strlen(trim($password)) > 1) {
        $uid = $userClass->userLogin($usernameEmail, $password);
        if ($uid) {
            echo "done";
        } else {
            echo "error";
        }
    }
}