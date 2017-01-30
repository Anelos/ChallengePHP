<?php
session_start();
session_destroy();
header("location:/challengePHP/index.php");
exit;
 ?>
