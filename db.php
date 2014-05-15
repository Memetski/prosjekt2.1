<?php


try {
   $db = new PDO('mysql:host=127.0.0.1;dbname=centralpub', 'root', 'imt2291');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
   die ('Kunne ikke koble til serveren : ' . $e->getMessage());
}



?>