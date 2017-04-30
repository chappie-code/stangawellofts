<?php
	$newContent = "";
	$sDesc = $_POST["sDesc"];
	$dCost = $_POST["dCost"];
	$bValid = true;
	
	// attempt to delete sale item
	if ($sDesc == ""){
		$newContent = "Desciption - Must be valid";	
		$bValid = false;
	} 
	
	if ($bValid) {
		// create/open connection to server
		$cs = mssql_connect ('gawellofts.db.9118241.hostedresource.com', 'Gawellofts', 'Nimda86');
		// $cs = mssql_connect ('DEVDT2', 'admin_gl', 'nimda');
		if (!$cs){
			$newContent = 'Can not connect to server';
		} else {
			// select from database?
			if (mssql_select_db ('GawelLofts', $cs)){
				$sql = 'INSERT INTO tblSales (sDesc, dCost) VALUES(\''.$sDesc.'\','.$dCost.')'; 
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
	}
	
	echo $newContent;
?>