<?php
	$newContent = "";
	$arg = $_POST["nSaleID"];
	
	// attempt to delete sale item
	if($arg > 0){
		// create/open connection to server
		$cs = mssql_connect ('gawellofts.db.9118241.hostedresource.com', 'Gawellofts', 'Nimda86');
		// $cs = mssql_connect ('DEVDT2', 'admin_gl', 'nimda');
		if (!$cs){
			$newContent = 'Can not connect to server';
		} else {
			// select from database?
			if (mssql_select_db ('GawelLofts', $cs)){
				$sql = "DELETE tblSales WHERE nSaleID=".$arg;
				$r = mssql_query ( $sql, $cs );
				if($r){
					$newContent = '';
				} else {
					$newContent = 'Failed to select Sales rows';
				}
			} else {
				$newContent = 'Can not select database';
			}
		}
		// ensure conn is closed
		mssql_close($cs);
		
	} else {
		$newContent = "No sale item was selected";	
	}

	echo $newContent;
?>