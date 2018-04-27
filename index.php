<?php
echo "Hola Mundo";
echo "<br>";
$enlace = mysqli_connect("mysql", "oscar", "Ch3Tu123", "sampledb");

if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Éxito: Se realizó una conexión apropiada a MySQL! La base de datos sampledb es genial." . PHP_EOL;
echo "Información del host: " . mysqli_get_host_info($enlace) . PHP_EOL;
echo "<br>";

$rs = mysqli_query($enlace,"SELECT * FROM db_acceso");
while ($row = $rs->fetch_object()){
    $acceso[] = $row;
}    


echo "<pre>";
print_r($acceso);
echo "</pre>";

mysqli_close($enlace);

?>

