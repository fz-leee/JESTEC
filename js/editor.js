$(document).ready(function(){
	$("#ManuscriptList").load('includes/editor.inc.php')
	$(".manuscript-item").click(function(){
		var manuid = event.target.id;
		$("#test").removeAttr("disabled")
	})
})

$(function () {
  $('[data-toggle="tooltip"]').tooltip();
})