
<?php
$resultado = 0;
echo "Ingrse el mulitplcador: ";
$mulitplicador = (int)fgets(STDIN);

echo "Ingrse el multiplicando: ";
$multiplicando = (int)fgets(STDIN);


while( $mulitplicador > 1 ){
    if( ( intval($mulitplicador) % 2) != 0 ){
        $resultado += $multiplicando;
    }
    $multiplicando *= 2;
    $mulitplicador /= 2;
}
echo $resultado;