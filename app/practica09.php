<!-- Enunciado: Crea una agenda de contactos que 
muestre la información en tarjetas. Permite 
buscar contactos por nombre y filtrar por grupo 
(familia, trabajo, amigos). -->
<?php
$contactos = [
    ["nombre" => "Juan Pérez", "telefono" => "123-456-789", "email" => "juan@email.com", "grupo" => "trabajo"],
    ["nombre" => "María García", "telefono" => "987-654-321", "email" => "maria@email.com", "grupo" => "familia"],
    ["nombre" => "Carlos López", "telefono" => "555-123-456", "email" => "carlos@email.com", "grupo" => "amigos"]
];

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["nombre"]) && isset($_GET["telefono"]) && isset($_GET["email"]) && isset($_GET["grupo"]) && isset($_GET["accion"])) {
    $nombre = $_GET["nombre"] ? trim($_GET["nombre"]) : '';
    $telefono = $_GET["telefono"] ? trim($_GET["telefono"]) : '';
    $email = $_GET["email"] ? trim($_GET["email"]) : '';
    $grupo = $_GET["grupo"] ? trim($_GET["grupo"]) : '';
    $accion = $_GET["accion"] ? trim($_GET["accion"]) : '';
    if ($nombre !== '') {
        if ($accion == "Agregar") {
            $contactos[] = [
                "nombre" => $nombre,
                "telefono" => $telefono,
                "email" => $email,
                "grupo" => $grupo
            ];
        } elseif ($accion == "Eliminar") {
            $contactos = array_filter($contactos, function ($c) use ($nombre) {
                return $c !== $nombre;
            });
            $contactos = array_values($contactos);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Walt-Contactos</title>
    <link rel="stylesheet" href="style09.css">
</head>

<body>
    <div class="container">
        <div class="busqueda">
            <form method="get">
                <input type="search" name="nombre">
                <input type="search" name="telefono">
                <input type="search" name="email">
                <input type="search" name="grupo">
                <input type="submit" value="Agregar" name="accion">
                <input type="submit" value="Eliminar" name="accion">
                <input type="submit" value="Buscar" name="accion">
            </form>
        </div>
        <div class="tarjetas">
            <?php foreach ($contactos as $contact) {
                echo "
                    <div class='contacto'>
                        <div class='contacto_nombre'>
                            <b> {$contact['nombre']}</b>
                        </div>
                        <div class='contacto_telefono'>
                        <b> {$contact['telefono']}</b>
                        </div>
                        <div class='contacto_email'>
                        <b> {$contact['email']}</b>
                        </div>
                        <div class='contacto_grupo'>
                        <b> {$contact['grupo']}</b>
                        </div>
                    </div>
                    <br>
                    <br>
                ";
            } ?>

        </div>
        <div class="tarjetas_filtradas">
            <h1>Contactos filtrados</h1>
            <?php
            if ($accion == "Buscar") {
                $contactos = array_filter($contactos, function ($grup) use ($grupo) {
                    return $grup["grupo"] === $grupo;
                });
                foreach ($contactos as $contact) {
                    echo "
                    <div class='contacto'>
                        <div class='contacto_nombre'>
                            <b> {$contact['nombre']}</b>
                        </div>
                        <div class='contacto_telefono'>
                        <b> {$contact['telefono']}</b>
                        </div>
                        <div class='contacto_email'>
                        <b> {$contact['email']}</b>
                        </div>
                        <div class='contacto_grupo'>
                        <b> {$contact['grupo']}</b>
                        </div>
                    </div>
                    <br>
                    <br>
                ";
                }
            } ?>
        </div>
    </div>
</body>

</html>