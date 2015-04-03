<?php

$mysqli = new mysqli ( "qdm114573194.my3w.com", "qdm114573194", "zeng3389", "qdm114573194_db" );

/* check connection */
if (mysqli_connect_errno ()) {
	printf ( "Connect failed: %s<br>", mysqli_connect_error () );
	exit ();
}
$id = $_POST["id"];
settype($id, 'integer');
$sql = "update bookinfo set stauts = 1  where id = $id";
if($mysqli->query($sql)==1){
	echo "取消成功！";
}else{
	echo "取消失败！";
}
?>