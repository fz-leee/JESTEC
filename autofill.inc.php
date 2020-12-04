<?php
	$sql = "SELECT manuscriptTitle, dateSubmitted, manuscriptStatus, assignedEditor, assignedReviewer FROM manuscripts";
  	$result = mysqli_query($conn, $sql);
?>