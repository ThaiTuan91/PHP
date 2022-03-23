<?php

session_start();

unset($_SESSION['currentuser']);
setcookie('token', '', time()- 5*24*60*60, '/');

header('Location: login.php');