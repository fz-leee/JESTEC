$(document).ready(function(){
	$(".manuscript-item").click(function(){
		var manuid = $(this).attr('id');
		var queryString = "?manuid=" + manuid;
		window.location.href = "reviewer-reader.php" + queryString;
	})
})