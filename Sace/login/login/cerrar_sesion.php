<?php
session_start();
session_destroy();
if ($varsesion == null || $varsesion='') {
header("Location:../index.html");
die();
}


header("../index.html");
?>