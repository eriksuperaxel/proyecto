<!doctype html>
<html>
<head>
    <title>Juego de simulacion de una partida de Ping Pong</title>
</head>
<body>
    <style>
    /* Styles */
        * {
            margin: 0;
            padding: 0;
        }
        body {
            backgronda: skyblue;
        }
        .pp_head {
            text-align: center;
        }
        .content {
            line-height: 1.5;
            position: relative;
            width: 400px;
            margin: 20px auto;
            backgronda: yellow;
            /*padding: 15px;*/
            box-sizing: content-box;
        }
        div.rondines:nth-child(2n) {
            backgronda: lightgreen;
            color: orangered;
        }
        .rondines {
            padding-left: 20px;
        }
        h2.ganador {
            margin-top: 10px;
            padding: 10px;
            text-align: center;
            font-size: 17pt;
            text-transform: uppercase;
            color: red;
        }
        p span {
            font-weight: bold;
        }
		p1 span {
            font-weight: bold;
        }
    </style>
    <?php
        $jugador1 = 0;
        $jugador2 = 0;
        $ronda = 0;
    ?>
    <div class="pp_head">
        <h1>Ping Pong</h1>

        <p1>Desarrollado por Erik Axel Garza Ramirez 1551486</p1>
        <p>Inicia el juego!</p>
    </div>

    <div class = "content">

        <div class="ronda">
            <?php

                //para ganar un jugador debe llegar a 11 puntos minimo ademas de ganar por diferencia de 2 o mas puntos o sino debera seguir el juego
                while (abs($jugador1 - $jugador2) < 2 || $jugador1 < 11 && $jugador2 < 11) {
                   $ronda++;
                   echo "<div class =\"rondines\">";
                   echo "<h2>Ronda $ronda</h2>\n";

                   //resultados al azar 1 maximo y 0 minimo
                   if(rand(0,1)) {
                     $jugador1++;

                   } else {
                     $jugador2++;
                   }
                   echo "Jugador1 = $jugador1<br />\n";
                   echo "Jugador2 = $jugador2<br />\n";
				   
                   echo "</div>";
                }
            ?>
        </div>

        <div class = "ganador">
            <?php
                if($jugador1 > $jugador2) {
                   echo "<h2 class=\"ganador\">Jugador 1";
                } else {
                   echo "<h2 class=\"ganador\">Jugador 2";
                }

                echo " es el ganador despues de $ronda rondas</h2>"; 
            ?>
        </div>
     </div>

</body>
</html>