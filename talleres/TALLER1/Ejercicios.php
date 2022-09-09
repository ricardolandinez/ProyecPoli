*Equipo 3	
Ejercicio 1<<Declara un String que contenga tu nombre, después muestra un mensaje de bienvenida por consola. Por ejemplo: si introduzco «Fernando», me aparezca «Bienvenido Fernando».	

<?php
if($_POST){
    $txtnombre=$_POST['txtnombre'];
    $txtapellido=$_POST['txtapellido'];

    echo "Bienvenido ".$txtnombre." ".$txtapellido;
}
else{

  echo "Ingresa tu nombre y apellido";
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>grupo3</title>
</head>
<body>
<form action="ejercicio5.php"  method="post">

   Nombre:   
  <input type="text" name="txtnombre" id="">
  <br/>


  Apelllido
  <input type="text" name="txtapellido" id="">
    <br/>

  <input type="submit" value="Enviar">
  </form>
</body>
</html>



Ejercicio 2 Lee un número por teclado e indica si es divisible entre 2 (resto = 0). Si no lo es, también debemos indicarlo.	

<?php
if ($_POST) {
  $numero = $_POST['$numero'];

  if ($numero % 2==0){
    echo "El numero " . $numero . " " ."es divisible entre 2";
  }
  else{
    echo "El numero " . $numero .  " " ."no es divisible entre 2";
  }
}

?>





<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>grupo3</title>
</head>

<body>
  <form action="ejercicio5_1.php" method="post">

    Numero:
    <input type="text" name="$numero" id="">

    <input type="submit" value="Calcular">
  </form>
</body>

</html>



Ejercicio 3	Lee un número por teclado que pida el precio de un producto (puede tener decimales) y calcule el precio final con IVA. El IVA sera una constante que sera del 21%.	

<?php
if ($_POST) {
  $producto = $_POST['$producto'];

   $producto = ($producto * 00.21) + $producto; 

    echo "El valor de su producto es " . $producto . " " . "Incluyendo el iva del 21%" ;
  
}
 else{
  echo "ingrese el costo de su producto";
}

?>





<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>grupo3</title>
</head>

<body>
  <form action="ejercicio5_2.php" method="post">

    Numero:
    <input type="text" name="$producto" id="">

    <input type="submit" value="Calcular">
  </form>
</body>

</html>


Ejercicio 4	Muestra los números del 1 al 100 (ambos incluidos) divisibles entre 2 y 3. Utiliza el bucle que desees.	

<?php


$numeroInicial = 1;


while ($numeroInicial <=100) {

    if($numeroInicial % 2==0 || $numeroInicial % 3==0){
    echo "Numeros divisibles entre 2 y 3 =  " . $numeroInicial . "<br/>";
    }$numeroInicial++;
}


Ejercicio 5 Lee un número por teclado y comprueba que este numero es mayor o igual que cero, si no lo es lo volverá a pedir (do while), después muestra ese número por consola.	

<?php


if ($_POST) {
  $numero = $_POST['$numero'];

   if ($numero >= 0){

   
    echo "El numero " . $numero . " " .  "es mayor o igual que 0" ;
  
}
 else{
  echo "Ingresar un numero mayor o igual a 0";
}
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>grupo3</title>
</head>

<body>
  <form action="ejercicio5_4.php" method="post">

    Numero:
    <input type="text" name="$numero" id="">

    <input type="submit" value="Calcular">
  </form>
</body>

</html>


Ejercicio 6 Pide por teclado dos número y genera 10 números aleatorios entre esos números. Usa el método Math.random para generar un número entero aleatorio (recuerda el casting de double a int).	


<?php
if($_POST){
  $numero1 = $_POST['numero1'];
  $numero2 = $_POST['numero2'];
  for ($i=0; $i<=10; $i++){
    $numeroAleatorio = rand($numero1,$numero2);
    
  //echo "Numeros aleatorios =  " . $numeroAleatorio. " " ." </br>"; 
  echo "Numeros aleatorios =  " . $numeroAleatorio. " " ." </br>"; 
  }

}else{
   $numero1 && $numero2 = null;
   echo "Ingresa tus datos";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>grupo3</title>
</head>

<body>
  <form action="ejercicio5_5.php" method="post">

    Numero 1:
    <input type="text" name="numero1" id="">
    <br/>

    Numero 2 :
    <input type="text" name="numero2" id="">
    <br/>

    <input type="submit" value="Calcular">
</br>

  </form>
</body>

</html>

Ejercicio 7 	Muestra los números primos entre 1 y 100.	

<?php


//Ciclo for
$numero1 = 2 ;
$numero2 = 100;

echo"Números primos del". $numero1. " Hasta " . $numero2;

for ($i = $numero1; $i <= $numero2; $i++)    
{
$numeroDiv = 0;
for($numero = 1; $numero <= $i; $numero++)  
{
if($i % $numero == 0)                        
{
$numeroDiv  = $numeroDiv + 1;                   
} 
}
if($numeroDiv == 2 || $i == 1)               
{
    echo "<br>". $i;  
}
}


?>

<?php





