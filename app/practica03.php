<?php
$imagenes = [
    "img/foto1.png",
    "img/foto2.png", 
    "img/foto3.png",
    "img/foto4.png",
    "img/foto5.png"
];

$nombre = "Walter";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galería de imágenes</title>
    <style>
        .galeria {
            display: grid;
            grid-template-columns: repeat(3, 1fr); 
            max-width: 900px;
            margin: 0 auto;
        }
        .galeria img {
            width: 90%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>
    <h1 style="text-align:center;">Galería de imágenes</h1>
    <div class="galeria">
        <?php foreach ($imagenes as $img):?>
            <div>
                <img src="<?= htmlspecialchars($img) ?>" alt="Imagen">
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
