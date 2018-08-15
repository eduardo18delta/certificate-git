<?php
 try {
    $pdo = new PDO('mysql:host=localhost;dbname=certificate', 'root', '');
 } catch (PDOException  $e) {
    print $e->getMessage();
 }
?>