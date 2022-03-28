<?php

$text = "C'era una volta in un bosco Marco detto il cretino, Marco il cretino era innamorato di una principessa, ma lei non ricambiava il suo amore, quindi Marco il cretino si ammazzò";


$lunghezza_Testo = strlen( $text );

echo $text;
echo '<br>';
echo 'il testo è lungo: ';
echo $lunghezza_Testo;
echo '<br>';

$numero_sostituzioni = 0;

$name = $_GET['name'];
echo $name;
echo '<br>';

$testo_modificato = str_replace( $name, '***' , $text , $numero_sostituzioni);

$lunghezza_modificato = strlen ($testo_modificato);

echo $testo_modificato;
echo '<br>';
echo 'Il testo è lungo';
echo $lunghezza_modificato;

echo '<br>';
echo 'Numeri di sostituzioni: ';
echo $numero_sostituzioni;


?>

