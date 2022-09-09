<?php

require "functions.php";




$actor1 = new Actor();
$actor1->asignarNombre("Finn");
$actor1->asignarApellido("Wolfhard");
$actor1->asignarEdad("19");
$actor1->asignarGenero("Masculino");
$actor1->asignarTemporada("1,2,3,4");
$actor1->asignarPersonaje("Mike Wheeler");
$actor1->asignarRol("Protagonista");



echo "Nombre del Actor: " . $actor1->nom . "<br/>";
echo "Apellido del Actor: " . $actor1->apell . "<br/>";
echo "Edad del Actor: " . $actor1->edad . "<br/>";
echo "Genero del Actor: " . $actor1->gen . "<br/>";
echo "Temporada en las que participo el Actor: " . $actor1->tempo . "<br/>";
echo "Personaje en la serie del Actor: " . $actor1->perso . "<br/>";
echo "Rol del Actor: " . $actor1->rol . "<br/>";
