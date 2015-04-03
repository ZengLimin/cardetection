<?php
header ( 'Content-type: text/json' );
$page = $_GET ['page']; // get the requested page
$limit = $_GET ['rows']; // get how many rows we want to have into the grid
$sidx = $_GET ['sidx']; // get index row - i.e. user click to sort
$sord = $_GET ['sord']; // get the direction
$where = '';
if($_GET['_search'] == 'true'){
/* $filters = json_decode($_GET['filters']);
$where .=" and ";
$where .= $filters->rules[0]->field;
$where .= " like '%";
$where .= $filters->rules[0]->data;
$where .= "%'"; */
$where .=" and ".$_GET['searchField'];	
$where .= " like '%";
$where .=$_GET['searchString'];
$where .= "%'";
}
if (! $sidx)
	$sidx = 1;

	// connect to the database
$db = new mysqli ( "qdm114573194.my3w.com", "qdm114573194", "zeng3389", "qdm114573194_db" );
$db->query ( "set names 'utf8'" );
$SQL = "SELECT COUNT(*) AS count FROM bookinfo where bookDate >= curdate() ";
if($_GET['_search'] == 'true'){
	$SQL .= $where ;
}
$result = $db->query ( $SQL );
$row = $result->fetch_assoc ();
$count = $row ['count'];
if ($count > 0) {
	$total_pages = ceil ( $count / $limit );
} else {
	$total_pages = 0;
}
if ($page > $total_pages)
	$page = $total_pages;
$start = $limit * $page - $limit; // do not put $limit*($page - 1)
$SQL = "SELECT * FROM bookinfo where bookDate >= curdate() $where order by bookDate,bookTime,$sidx $sord LIMIT $start , $limit";
$result = $db->query ( $SQL ) or die ( "Couldn t execute query." . mysql_error () );
$responce = new StdClass ();
$responce->page = $page;
$responce->total = $total_pages;
$responce->records = $count;
$i = 0;
while ( $row = $result->fetch_assoc () ) {
	$responce->rows [$i] ['id'] = $row ['id'];
	$responce->rows [$i] ['cell'] = array (
			$row ['id'],
			//$row ['querypwd'],
			$row ['mobile'],
			$row ['carNo'],
			$row ['carShelf'],
			$row ['bookDate'],
			$row ['bookTime'],
			$row ['createDate']
	);
	$i ++;
}
$db->close();
echo json_encode ( $responce );
?>