<?php
session_start();
session_destroy();
echo "Cerrando sesión";
header("Location:index.html");
?>