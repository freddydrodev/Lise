<?php
try {
    $db = new PDO('mysql:host=mysql.hostinger.com;dbname=u289277422_belis', 'u289277422_fred', 'K@ikelarose77');
} catch (Exception $e) {
    Die('Erreur : ' . $e->getMessage());
}
