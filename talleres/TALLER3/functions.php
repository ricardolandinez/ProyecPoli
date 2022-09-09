<?php

class Actor
{

    public $nom; //propiedades
    public $apell;
    public $edad;
    public $gen;
    public $tempo;
    public $perso;
    public $rol;

    public $pel;
    public $lib;
    public $ban;




    public function asignarNombre($nuevoNombre)
    {

        $this->nom = $nuevoNombre;
    }
    public function asignarApellido($nuevoApellido)
    {


        $this->apell = $nuevoApellido;
    }
    public function asignarEdad($nuevaEdad)
    {

        $this->edad = $nuevaEdad;
    }
    public function asignarGenero($nuevoGenero)
    {

        $this->gen = $nuevoGenero;
    }
    public function asignarTemporada($nuevaTemporada)
    {

        $this->tempo = $nuevaTemporada;
    }
    public function asignarPersonaje($nuevoPersonaje)
    {
        $this->perso = $nuevoPersonaje;
    }
    public function asignarRol($nuevoRol)
    {
        $this->rol = $nuevoRol;
    }
}
class Serie extends Actor
{

    public function peliculasActor($pelicula)
    {

        $this->pel = $pelicula;
    }
}


class Libro extends Actor
{

    public function libroPelicula($libro)
    {

        $this->lib = $libro;
    }
}


class Banda extends Actor
{
    public function bandaPelicula($banda)
    {

        $this->ban = $banda;
    }
}
