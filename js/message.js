$(document).ready(function(){

	$("#messageList").load('includes/message.inc.php');
	$(".manuscript-item").click(function(){
		$(".message-item").hide();
		var manuid = event.target.id;
		if(manuid === "btnShowAll") {
			$(".message-header").text("Showing all messages");
		} else {
			$(".message-header").text("Showing messages under [" + manuid + "]");
			if ($(".message-item").hasClass(manuid)) {
				$("." + manuid).fadeIn();
			}
		}
	});

	$("#btnShowAll").click(function(){
		$(".message-item").fadeIn();
	})
});

$(function () {
  $('[data-toggle="tooltip"]').tooltip();
})