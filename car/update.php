<?php
$con = new mysqli ( "qdm114573194.my3w.com", "qdm114573194", "zeng3389", "qdm114573194_db" );
$con->query ( "set names 'utf8'" );
$id = $_POST ['id'];
$value = $_POST ['value'];
settype ( $id, "integer" );
$result = $con->query ( "update dictionary set dicvalue = $value where id = $id" );
if ($result == 1) {
	echo 0;
} else {
	echo 1;
}
$con->close();
?>