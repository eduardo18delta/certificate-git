<?php
 try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=certificate', 'root', '');
 } catch (PDOException  $e) {
    print $e->getMessage();
 }
?>
