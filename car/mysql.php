<?php
$con = mysqli_connect ( "qdm114573194.my3w.com", "qdm114573194", "zeng3389", "qdm114573194_db" );
if (! $con) {
	die ( 'Could not connect: ' . mysql_error () );
}
$charset = mysqli_character_set_name ( $con );
printf ( "Current character set is %s<br>", $charset );

$id = 56;
settype($id, "integer");
$query = "select * from bookinfo where id < $id";
$result = mysqli_query ( $con, $query );
echo "<br>";
echo mysqli_num_rows($result);
echo "<br>";
while ( $row = mysqli_fetch_assoc ( $result ) ) {
	printf ( "%s<br>", $row ["id"] );
}
echo md5(11);
/* free result set */
mysqli_free_result($result);
// getAll("select * from bookinfo");
mysqli_close ( $con );
//phpinfo()
?>