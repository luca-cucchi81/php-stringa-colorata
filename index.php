<?php
// Stampare una stringa verde se la variabile password passata in GET è uguale a “Boolean”, altrimenti stampare una stringa rossa.

$password = $_GET['password'];

if ($password == 'Boolean') {
    echo '<p style="color: green; font-weight: bold;">ACCESSO AUTORIZZATO</p>';

}else{
    echo '<p style="color: red; font-weight: bold;">ACCESSO NON AUTORIZZATO</p>';
}
?>
