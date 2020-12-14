<?php
include('includes/dbh.inc.php');
$sql = "SELECT file FROM manuscripts";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		echo $row['file'];	
	}
}




