<?php
session_start();
session_destroy();
header("location: /arriendo/index.php");
?>