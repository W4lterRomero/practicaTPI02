<?php
$compras = [
    ["producto" => "Arroz", "precio" => 2.50, "cantidad" => 3],
    ["producto" => "Leche", "precio" => 1.20, "cantidad" => 2],
    ["producto" => "Pan", "precio" => 0.80, "cantidad" => 5],
    ["producto" => "Huevos", "precio" => 3.00, "cantidad" => 1]
];
$total = 0;


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style05.css">
</head>

<body>
    <table border="2">
        <tr>
            <td> Producto</td>
            <td>Precio</td>
            <td>Cantidad</td>
        </tr>
        <tr>
            <?php
            for ($i = 0; $i < count($compras); $i++) {
                echo "<tr>
                    <td>{$compras[$i]['producto']}</td>
                    <td>{$compras[$i]['precio']}</td>
                    <td>{$compras[$i]['cantidad']}</td>
                </tr>";
                $total += $compras[$i]['precio'] * $compras[$i]['cantidad'];
            }

            ?>
        </tr>
        <tr>
            <td>Total a pagar</td>
            <td></td>
            <td>
                <?php
                    echo "<strong>$total";
                ?>
            </td>
        </tr>
    </table>
    
    <?php echo "Total: $total"; ?>
</body>

</html>