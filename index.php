<?php
// Stampare una stringa verde se la variabile password passata in GET è uguale a “Boolean”, altrimenti stampare una stringa rossa.

$password = $_GET['password'];

if (!empty($_GET)) {
    if ($password == 'Boolean') {
        echo '<h1 style="color: green; font-weight: bold;">ACCESSO AUTORIZZATO</h1>';

    }else{
        echo '<h1 style="color: red; font-weight: bold;">ACCESSO NON AUTORIZZATO</h1>';
    }
}else{
    echo '<h1>Inserisci password nell\' URL</h1>';
}

?>
