<?php
session_start();

require_once 'db.php';



$sql = 'SELECT * FROM bands WHERE uid = ?';
$sth = $db->prepare ($sql);
$sth->execute (array ($_SESSION['uid']));

echo "<h1>Her vil bandene som blir opprettet vises :)</h1>";

while ($row = $sth->fetch()) {
	echo "<a href='javascript:visBand({$row['bname']}></a>";
	

}
?>

			
