<?php 
$operando1 = $_GET['operando1'];
$operando2 = $_GET['operando2'];
$operador = $_GET['operador'];
/*if($operando1 || $operando2 == " ")
{
    echo "Ingrese Numero valido";
    print('<br /><a href="calculadora.php">Volver</a>');
}else*/
 if($operador == "+"){
    $solucion = $operando1 + $operando2;
}else if($operador == "-"){
    $solucion = $operando1 - $operando2;
}else if($operador == "*"){
    $solucion = $operando1 * $operando2;
}else if($operador == "/"){
    $solucion = $operando1 / $operando2;
}
echo "EL RESULTADO ES :". $solucion;
print('<br /><a href="calculadora.php">Volver</a>');


?>