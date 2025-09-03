<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- 25. Dame el volumen de la esfera sabiendo su radio.-->
    <!-- <form action="cajanegra.php" method="GET">
        <label for="radio">Radio:</label>
        <input type="number" name="radio" id="radio" step="any" required min="0">
        <input type="submit" value="Calcular">
    </form> -->

    <!-- 26. Saca la tabla del 8 con el ciclo while. -->

    <!-- <?php
            for ($i = 0; $i < 10; $i++) {
                echo ($i * 8 . "<br>");
            }
            ?> -->

    <!-- 30. Conociendo x sacar x^4,x^6,x^-5,x^-1 usando ciclo for. -->

    <!-- <form  method="get">
    <label> Introduzca X</label>
    <input type="number" id = "variable" name = "variable">
    <input type="submit" value="enviar">
    <br>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["variable"])) {
        $x = floatval($_GET["variable"]);
        $exponentes = [4, 6, -5, -1];

        foreach ($exponentes as $exp) {
            echo "$x ^ $exp = " . pow($x, $exp) . "<br>";
        }
    }
    ?> -->
    <!-- 
1. Ejercicios de validacion
 Escribe una script que devuelva un mensaje en caso
  de que el usuario escriba números en el campo de entrada de 
  nombre y apellidos o en el de ciudad
-->
    <!--  <form method="get">
    <label for="nombre">Ingrese su nombre</label>
    <input type="text" name = "nombre" id ="nombre"> <br>
    <label for="telefono">Ingrese su telefono</label>
    <input type="tel" name = "telefono" id = "telefono"> <br>
    <label for="postal">Ingrese su código postal</label>
    <input type="number" name = "postal" id = "postal"> <br>
    <label for="correo">Correo</label>
    <input type="text" name = "correo" id = "correo"><br>
    <input type="submit" value="Submit">  
  </form>
 --><!-- 
  <?php

    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["nombre"]) && isset($_GET["telefono"]) && isset($_GET["postal"])) {
        $nombre = trim($_GET["nombre"]);
        $telefono = $_GET["telefono"];
        $number = $_GET["postal"];
        $email = $_GET["correo"];

        if (!noNumbers($nombre) || !isOnlyNumbers($telefono) || !isOnlyNumbers($number) || strlen($telefono) <= 9) {
            echo "<p style = 'color: red'; 'font-wigth:bold'> verifique que su nombre no esté con numero
            y que su telefono y código postal no esté con letras </p>";
            return;
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "tu email no es válido";
            return;
        }
        if ($nombre == "") {
            echo "<p style = 'color: red'> El nombre no puede estar vacío. </p> ";
            return;
        } elseif (!noNumbers($nombre)) {
            echo "<p style = 'color: red'> El nombre no debe contenedor numeros. </p> ";
            return;
        } else {
            echo "<p style = 'color: green'> El nombre es valido y el teléfono y el código postal son válidos. </p> " . htmlspecialchars($nombre);
            echo "<p style = 'color: green'> tu nombre $nombre y tu telefono $telefono, también tu postal $number y tu $email son validos";
            return;
        }
    }
    function noNumbers(string $s): bool
    {
        return !preg_match('/\d/', $s);
    }
    function isOnlyNumbers(string $s): bool
    {
        return preg_match('/^\d+$/', $s) == 1;
    }

    ?> -->

    <!-- <form method="get">
        <label for="vocal">Escriba una palabra</label>
        <input type="text" name="palabra">
        <input type="submit" value="submit">
    </form>
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["palabra"])) {
        $palabra = $_GET["palabra"];
        $palabra = strtolower($palabra);
        $a = 0;
        $e = 0;
        $i = 0;
        $o = 0;
        $u = 0;
    
        for ($contador=0; $contador < strlen($palabra); $contador++) { 
            if($palabra[$contador] === "a"){
                $a += 1;
            }
            if($palabra[$contador] == "e"){
                $e += 1;
            }
            if($palabra[$contador] == "i"){
                $i += 1;
            }
            if($palabra[$contador] == "o"){
                $o += 1;
            }
            if($palabra[$contador] == "u"){
                $u += 1;
            }
            else{
                continue;
            }
        }
        echo "a: $a, e: $e, i: $i, o: $o, u:$u";
    }
    ?> -->
<!-- 
Desarrolla un script que pida un nombre de usuario por POST. Al enviar el formulario, debe establecer una cookie de modo que al cerrar el navegador y volver a entrar en la página ésta devuelva "Hola nombre". -->



</body><!--  -->

</html>