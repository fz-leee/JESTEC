$(document).ready(function(){
	$("#ManuscriptList").load('includes/editor.inc.php')
	$(".manuscript-item").click(function(){
		var manuid = event.target.id;
		$("#editorModal").on('shown.bs.modal', function() {
			$(".modal-title").text(manuid);
		})
	})


})

$(function () {
  $('[data-toggle="tooltip"]').tooltip();
})