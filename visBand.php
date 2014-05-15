<?php
session_start();

require_once 'db.php';



$sql = 'SELECT * FROM bands ORDER BY bname ASC';
$sth = $db->prepare ($sql);
$sth->execute (array ($_SESSION['uid']));

echo "<h1 style=border:solid;width:500px;> Band registrert </h1>";

while ($row = $sth->fetch()) {
	echo "<h2 style=margin:0px; padding:0px; text-decoration:none;color:black;><a  href='javascript:visBand({$row['uid']});'>{$row['bname']}</a></h2> </br>";
	

}
?>

			
