<?php
/*Primera versión: será capaz de leer de un fichero tantas fechas como haya (una por línea)
en formato dd/mm/aaaa (el número de dígitos no es fijo). Queremos que muestre la fecha leida
y a continuación la muestre en español:
ejemplo: para la fecha 28/02/2020 pondrá: 28/02/2020 - 28 de Febrero de 2020 */

    $fichero= fopen("IT00095.txt","rb");

    while($linea= fgets($fichero)){
        echo "$linea - ";
        list($dia,$mes,$ano)=explode("/","$linea");
        switch($mes){
            case 1:
                echo "$dia de Enero de $ano</br>";
            break;
            case 2:
                echo "$dia de Febrero de $ano</br>";
            break;
            case 3:
                echo "$dia de Marzo de $ano</br>";
            break;
            case 4:
                echo "$dia de Abril de $ano</br>";
            break;
            case 5:
                echo "$dia de Mayo de $ano</br>";
            break;
            case 6:
                echo "$dia de Junio de $ano</br>";
            break;
            case 7:
                echo "$dia de Julio de $ano</br>";
            break;
            case 8:
                echo "$dia de Agosto de $ano</br>";
            break;
            case 9:
                echo "$dia de Septiembre de $ano</br>";
            break;
            case 10:
                echo "$dia de Octubre de $ano</br>";
            break;
            case 11:
                echo "$dia de Nobiembre de $ano</br>";
            break;
            case 12:
                echo "$dia de Diciembre de $ano</br>";
            break;
        }
    }