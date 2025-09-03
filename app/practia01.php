<!-- Crea un sistema que calcule 
 el promedio, nota más alta y más 
 baja de un grupo de estudiantes. -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica01</title>
    <link rel="stylesheet" href="style01.css">
 </head>
 <body>
    <div class="container">
        <header>
            <nav class = "barra">
            <a href="Inicio">Inicio</a>
            <a href="About us">Nosotros</a>
            <a href="Documentacion">Documentacion</a>
            </nav>
        </header>
        <main class = "main">
            <form method="get" class = "formulario">
                <label for="nota">nota 1</label>
                <input type="number" name="numero[]" id="numero" required>
                
                <label for="nota">nota 2</label>
                <input type="number" name="numero[]" id="numero" required>
                <br><br><br>
                
                <label for="nota">nota 1</label>
                <input type="number" name="numero[]" id="numero" required>
                
                <label for="nota">nota 2</label>
                <input type="number" name="numero[]" id="numero" required>
                <input type="submit" >
            </form>
            <?php
            if($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["numero"])){
                $nota = $_GET["numero"];
                $contador = 0;
                $nota_mayor = max($nota);
                $nota_menor = min($nota);
                foreach($nota as $not){
                    $contador += $not;
                }

                $resultado = $contador/count($nota);
                echo "<p style = 'color: green' />la nota promedio es: $resultado <br> nota menor: $nota_menor <br> nota mayor: $nota_mayor</p> ";
            }
            ?>
        </main>
        <aside class="aside">

        </aside>
        <footer>

        </footer>
    </div>
 </body>
 </html>