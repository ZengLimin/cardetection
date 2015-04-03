<?php
/* Open a connection */
$mysqli = new mysqli ( "qdm114573194.my3w.com", "qdm114573194", "zeng3389", "qdm114573194_db" );

/* check connection */
if (mysqli_connect_errno ()) {
	printf ( "Connect failed: %s<br>", mysqli_connect_error () );
	exit ();
}
$sql = "select * from news order BY id desc,createDate desc LIMIT 10";
$mysqli->query ( "set names 'utf8'" );
$result = $mysqli->query ( $sql );
?>
<ul>
<?php
	while ( $row = $result->fetch_assoc () ) {
		echo '<li class="w_list_item">';
		echo '<span class="w_list_date">';
		echo substr($row ['createDate'],0,10);
		echo '</span>';
		echo '<i class="fa fa-angle-right fa-users iconfont w_button_icon" style="font-size:100%"></i>';
		echo '<a href="detail.php?id=' . $row ['Id'] . '" target="_self">' . $row ['title'] . '</a>';
		echo '</li>';
	}
	$mysqli->close ();	
?>
</ul>