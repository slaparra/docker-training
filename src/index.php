<?php


// CONNECT TO MYSQL CONTAINER
$link = @mysqli_connect("db-mysql:3306", "root", "root", "symfony");

if (!$link) {
    echo "<p>";
    echo "Error: No se pudo conectar a MySQL.<br />" . PHP_EOL;
    echo "  errno de depuración: " . mysqli_connect_errno() . "<br />" . PHP_EOL;
    echo "  error de depuración: " . mysqli_connect_error() . "<br />" . PHP_EOL;
    echo "</p>";
    exit;
}

echo "<p>";
echo "    Éxito: Se realizó una conexión apropiada a MySQL!<br />" . PHP_EOL;
echo "    Información del host: " . mysqli_get_host_info($link) . PHP_EOL;
echo "</p>";

mysqli_close($link);

