<?php
session_start();
#aquí aprendí operador cuaternario y ver esi está vacío
$accion = isset($_GET["accion"]) ? trim($_GET["accion"]) : '';
$nombre = isset($_GET["nombre"]) ? trim($_GET["nombre"]) : '';
#aquí aprendí a crear un array para la sessión
if (!isset($_SESSION['productos'])) {
    $_SESSION['productos'] = [];
}

$productoFiltrado = $_SESSION['productos'];

if ($accion != '') {
    if ($accion == "Agregar") {
        $_SESSION['productos'][] = $nombre;
        $productoFiltrado = $_SESSION['productos'];
    } elseif ($accion == "Buscar") {
        $productoFiltrado = array_filter($_SESSION['productos'], function ($p) use ($nombre) {
            return stripos($p, $nombre) !== false;
        });
    } elseif ($accion == "Eliminar") {
        $_SESSION['productos'] = array_values(array_filter($_SESSION['productos'], function ($p) use ($nombre) {
            return stripos($p, $nombre) === false; // dejar solo los que NO coinciden

        }));
        $productoFiltrado = $_SESSION['productos'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario de productos</title>
    <link rel="stylesheet" href="style03.css">
</head>

<body>
    <div class="container">
        <header>
            <a href="">Nosotros</a>
            <a href="">Inicio</a>
        </header>
        <div class="formulario">
            <label for="nombre">Nombre del producto</label>
            <form action="" method="get">
                <input type="search" name="nombre">
                <input type="submit" value="Buscar" name="accion">
                <input type="submit" value="Agregar" name="accion">
                <input type="submit" value="Eliminar" name="accion">
            </form>
        </div>
        <main class="productos">
            <table class="tabla" border="1">
                <tr>
                    <th>Nombre del producto</th>
                    <th>Acción</th>
                </tr>
                <?php if (empty($productoFiltrado)): ?>
                    <tr>
                        <td colspan="2">No se encontraron productos</td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($productoFiltrado as $p): ?>
                        <tr>
                            <td><?= htmlspecialchars($p) ?></td>
                            <td>
                                <form action="" method="get" style="display:inline;">
                                    <input type="hidden" name="nombre" value="<?= htmlspecialchars($p) ?>">
                                    <input type="submit" value="Eliminar" name="accion">
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </table>
        </main>

        <aside>

        </aside>
        <footer class="pie"></footer>

    </div>
</body>

</html>