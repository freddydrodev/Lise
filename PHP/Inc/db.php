<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=BelliseStyle', 'root', '');
} catch (Exception $e) {
    Die('Erreur : ' . $e->getMessage());
}
