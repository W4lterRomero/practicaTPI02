<?php
        session_start();
    #aquí aprendí operador cuaternario y ver esi está vacío
        $accion = isset($_GET["accion"]) ? trim($_GET["accion"]) : '';
        $nombre = isset($_GET["nombre"]) ? trim($_GET["nombre"]) : '';
        #aquí aprendí a crear un array para la sessión
        if(!isset($_SESSION['productos'])){
            $_SESSION['productos'] = [];
        }
        if ($accion != '') {
            if ($accion == "Agregar") {
                $_SESSION['productos'][] = $nombre;
                $productoFiltrado = $_SESSION['productos'];
            } elseif ($accion = "Buscar") {
                $productoFiltrado = array_filter( $_SESSION['productos'], function($p) use ($nombre){
                    return stripos($p,$nombre) !== false;
                });
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
            </form>
        </div>
        <main class="productos">
            <table class="tabla">
                <tr>
                    <th>Nombre del producto</th>
                </tr>
                <?php foreach ($productoFiltrado as $p): ?>
                    <tr>
                        <td><?= htmlspecialchars($p) ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </main>
        <aside>

        </aside>
        <footer class="pie"></footer>
        
    </div>
</body>

</html>