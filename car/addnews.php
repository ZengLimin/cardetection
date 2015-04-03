<?php
$title = $_POST['title'];
$content = $_POST['content'];
$id = $_POST['id'];
if(strlen($title)> 0 || strlen($content) > 0 ){
	/* Open a connection */
	$mysqli = new mysqli ( "qdm114573194.my3w.com", "qdm114573194", "zeng3389", "qdm114573194_db" );
	$mysqli->query ( "set names 'utf8'" );
	/* check connection */
	if (mysqli_connect_errno ()) {
		printf ( "Connect failed: %s<br>", mysqli_connect_error () );
		exit ();
	}
	$sql = "INSERT INTO news(title,content) VALUES('$title','$content')";
	if($id > 0){
		settype($id, 'integer');
		$sql = "update news set title = '$title',content = '$content' where id = $id";
	}
	if ($mysqli->query ( $sql ) == 1) {
		echo 0;
	}
}else{
	echo 1;
}
?>