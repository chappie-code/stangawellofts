<?php

$sHtml = "";
// create/open connection to server
$cs = mssql_connect ('gawellofts.db.9118241.hostedresource.com', 'Gawellofts', 'Nimda86');
// $cs = mssql_connect ('DEVDT2', 'admin_gl', 'nimda');
if (!$cs){
	die ('Can not connect to server');
} else {
	// select from database?
	if (mssql_select_db ( 'GawelLofts', $cs )){
		$sql = "SELECT * FROM tblSales ORDER BY sDesc";
		$r = mssql_query ( $sql, $cs );
		
		if($r){
			while ( $row = mssql_fetch_array ( $r ) )
			{
				//	echo '<tr><td >'.$row[0].'</td><td>'.$row[1].'</td><td>'.$row[2].'&nbsp;</td><td><a rel="'.$row[0].'" >Delete</a></td></tr>';
				$sHtml = $sHtml.'<tr><td >'.$row[0].'</td><td><textarea style="width:98%;border:none;" readonly="true">'.$row[1].'</textarea></td><td>'.$row[2].'&nbsp;</td><td><a rel="'.$row[0].'" >Delete</a></td></tr>';
			}
		} else {
			die('Failed to select Sales rows');
		}
	} else {
		die ( 'Can not select database' );
	}
}
// ensure conn is closed
mssql_close($cs);

echo $sHtml;

?>