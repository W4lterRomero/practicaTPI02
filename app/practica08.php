<!-- Enunciado: Desarrolla un catálogo de productos que permita 
filtrar por categoría. Los productos deben mostrarse en cards con imagen,
nombre, precio y categoría. Incluye botones para filtrar. -->
<?php
$productos = [
    ["id" => 1, "nombre" => "Laptop", "precio" => 800, "categoria" => "tecnologia", "imagen" => "img02/laptop.png"],
    ["id" => 2, "nombre" => "Smartphone", "precio" => 400, "categoria" => "tecnologia", "imagen" => "img02/phone.png"],
    ["id" => 3, "nombre" => "Camiseta", "precio" => 25, "categoria" => "ropa", "imagen" => "img02/shirt.png"],
    ["id" => 4, "nombre" => "Zapatos", "precio" => 60, "categoria" => "ropa", "imagen" => "img02/shoes.png"]
];


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica08</title>
    <link rel="stylesheet" href="styles08.css">
</head>

<body>
    <div class="container">
        <header>
            <a href="">Inicio</a>
            <a href="">About us</a>
            <a href="">Documentacion</a>
        </header>
        <div class="formulario">
            <form method="get">
                <input type="search" name="Categoria">
                <input style='background-color: red' name="buscar" type="submit" value="Filtrar">
            </form>
        </div>
        <div class="productos">
            <div class="productos_nofiltrados">

            <?php
            for ($i = 0; $i < count($productos); $i++) {
                echo "
                <div class='producto'>
                    <div class='id'> Id: {$productos[$i]['id']}</div>
                    <div class='nombre'> Nombre: {$productos[$i]['nombre']}</div>
                    <div class = 'categoria'> Precio: {$productos[$i]['precio']}</div>
                    <div class = 'categoria'> Categoria: {$productos[$i]['categoria']}</div>
                    <div class='imagen'> <img src='{$productos[$i]['imagen']}'> </div>
                    
                </div>

                ";
            }
            ?>
        
            <br><br>
            <div class="productos_filtrados">
                <h1>Productos filtrados</h1>
                <?php
                   if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["Categoria"])) {
                $productoFiltrar = $_GET["Categoria"] ? trim($_GET["Categoria"]) : '';
                $categoria = array_column($productos, "categoria"); #ia, no sabía
                #que esto se podía hacer con array_column
                if ($productoFiltrar !== '') {
                   if (in_array($productoFiltrar, $categoria)) {
                     foreach ($productos as $producto) {
                    if ($producto["categoria"] === $productoFiltrar) {
                        echo "
                        <div class='productoFilter'>
                            <div class='id'> Id: {$producto['id']}</div>
                            <div class='nombre'> Nombre: {$producto['nombre']}</div>
                            <div class='precio'> Precio: {$producto['precio']}</div>
                            <div class='categoria'> Categoria: {$producto['categoria']}</div>
                            <div class='imagen'> <img src='{$producto['imagen']}'> </div>
                        </div>
                        ";
                    }

                }
            } 
                }
            }
                ?>

            </div>

        </div>
        </div>
        <aside>

        </aside>
    </div>
    <footer class="pie"></footer>

</body>

</html>