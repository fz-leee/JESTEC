<?php include('head.php'); ?>

<html>
	<head>
		<style>
			.badge {
				margin-right: .5rem;
			}
		</style>
	</head>
	<body class="bg-dark">
		<div class="card">
			<div class="card-body">
				  <h5>Filter by search</h5>
				  <hr> 
				<div class="input-group"> 
				  <input class="form-control" id="myInput" type="text" placeholder="Search ID, Title, Author, ...">
				  <div class="input-group-append">
				      <button class="btn btn-secondary" type="button">
				        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					  <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
					  <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
					</svg>
				      </button>
				    </div>
			    </div>
			</div>
		</div>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myList li").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

	</body>
</html>