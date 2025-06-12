<?php
$host = 'db';
$user = 'todo';
$pass = 'todopass';
$db = 'tododb';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}
?>