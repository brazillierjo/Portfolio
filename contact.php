<?php
var_dump($_POST);

$message = $_POST['message'];
$headers = 'De: ';
mail('j.brazillier@gmail.com', 'Formulaire de contact', $message, $headers);