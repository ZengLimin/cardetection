<?php
header ( 'Content-type: text/json' );
$id = $_POST ["id"];
settype($id, "integer");
$sql = "select id,title,content from news where id = $id ";
/* Open a connection */
$mysqli = new mysqli ( "qdm114573194.my3w.com", "qdm114573194", "zeng3389", "qdm114573194_db" );

/* check connection */
if (mysqli_connect_errno ()) {
	printf ( "Connect failed: %s<br>", mysqli_connect_error () );
	exit ();
}
$mysqli->query ( "set names 'utf8'" );
$result = $mysqli->query ( $sql );
$row = $result->fetch_assoc ();
echo json_encode ( $row );
$mysqli->close();
?>