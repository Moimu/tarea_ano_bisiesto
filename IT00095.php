<?php
/*Primera versión: será capaz de leer de un fichero tantas fechas como haya (una por línea)
en formato dd/mm/aaaa (el número de dígitos no es fijo). Queremos que muestre la fecha leida
y a continuación la muestre en español:
ejemplo: para la fecha 28/02/2020 pondrá: 28/02/2020 - 28 de Febrero de 2020 */

    $fichero= fopen("IT00095.txt","rb");

    while($linea= fgets($fichero)){
        // Siempre mostrara el dia ingresado en el fichero, si algo no corresponde mostrara error.
        echo "$linea - ";
        list($dia,$mes,$ano)=explode("/","$linea");
        // filtramos que el mes este comprendido entre 1 y 12 con el condicionante if, sino daremos error.
        if($mes>0 && $mes<13){
            // filtramos que el año este comprendido entre 0 y 2020 con el condicionante if, sino daremos error.
            if($ano<2021 && $ano>0){
                // filtramos los dias correspondientes a cada mes, antes de mostrar, sino corresponde error.
                if($dia>0 && $dia<32 && $mes==1){
                    // enero tiene 31 dias
                    echo "$dia de Enero de $ano</br>";   
                }
                elseif($mes==1){
                    echo " error el dia no corresponde, corrije el fichero de fechas</br>";
                }
                if($dia>0 && $dia<29 && $mes==2){
                    //Febrero tiene 28 dias
                    echo "$dia de Febrero de $ano</br>";
                }
                elseif($mes==2){
                    echo " error el dia no corresponde, corrije el fichero de fechas</br>";
                }
                if($dia>0 && $dia<32 && $mes==3){
                    // Marzo tiene 31 dias
                    echo "$dia de Marzo de $ano</br>";
                }
                elseif($mes==3){
                    echo " error el dia no corresponde, corrije el fichero de fechas</br>";
                }
                if($dia>0 && $dia<31 && $mes==4){
                    // abril tiene 30 dias
                    echo "$dia de Abril de $ano</br>";
                }
                elseif($mes==4){
                    echo " error el dia no corresponde, corrije el fichero de fechas</br>";
                }
                if($dia>0 && $dia<32 && $mes==5){
                    // mayo tiene 31 dias
                    echo "$dia de Mayo de $ano</br>";
                }
                elseif($mes==5){
                    echo " error el dia no corresponde, corrije el fichero de fechas</br>";
                }
                if($dia>0 && $dia<31 && $mes==6){
                    // junio tiene 30 dias
                    echo "$dia de Junio de $ano</br>";
                }
                elseif($mes==6){
                    echo " error el dia no corresponde, corrije el fichero de fechas</br>";
                }
                if($dia>0 && $dia<32 && $mes==7){
                    // julio tiene 31 dias
                    echo "$dia de Julio de $ano</br>";
                }
                elseif($mes==7){
                    echo " error el dia no corresponde, corrije el fichero de fechas</br>";
                }
                if($dia>0 && $dia<32 && $mes==8){
                    // agosto tiene 31 dias
                    echo "$dia de Agosto de $ano</br>";
                }
                elseif($mes==8){
                    echo " error el dia no corresponde, corrije el fichero de fechas</br>";
                }
                if($dia>0 && $dia<31 && $mes==9){
                    // septimbre tiene 30 dias
                    echo "$dia de Septiembre de $ano</br>";
                }
                elseif($mes==9){
                    echo " error el dia no corresponde, corrije el fichero de fechas</br>";
                }
                if($dia>0 && $dia<32 && $mes==10){
                    // octubre tiene 31 dias
                    echo "$dia de Octubre de $ano</br>";
                }
                elseif($mes==10){
                    echo " error el dia no corresponde, corrije el fichero de fechas</br>";
                }
                if($dia>0&&$dia<31 && $mes==11){
                    // noviembre tiene 30 dias
                    echo "$dia de Nobiembre de $ano</br>";
                }
                elseif($mes==11){
                    echo " error el dia no corresponde, corrije el fichero de fechas</br>";
                }
                if($dia>0&&$dia<32 && $mes==12){
                    // diciembre tiene 31 dias
                    echo "$dia de Diciembre de $ano</br>";
                }
                elseif($mes==12){
                    echo " error el dia no corresponde, corrije el fichero de fechas</br>";
                }    
            }
            else{
                echo " error El año ingresado no corresponde, corrije el fichero de fechas</br>";
            }
        }
        else{
            echo " error El mes ingresado no corresponde, corrije el fichero de fechas</br>";
        }
    }