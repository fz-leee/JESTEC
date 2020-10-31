<?php include('head.php'); ?>

<html>
	<head>
		<style>

			#header {
			  opacity: 0.9;
			}

			.details {
			  opacity: 0.6;
			}

			.details:hover {
			  opacity: 0.8; 
			}

		</style>
	</head>
	<body class="bg-dark">
		<div class="countainer">
			<div class="d-flex p-2 mb-2 bg-primary rounded text-light" id="header">
		      <div class="col-sm-1">
		        Manuscript Number
		      </div>
		      <div class="col-sm-1">
		        Time Remaining
		      </div>
		    </div>

		    <div class="d-flex p-2 mb-2 bg-secondary rounded text-light details">
		      <div class="col-sm-1">
		        001
		      </div>
		      <div class="col-sm-1">
		        1 day(s)
		      </div>
		    </div>

		    <div class="d-flex p-2 mb-2 bg-secondary rounded text-light details">
		      <div class="col-sm-1">
		        002
		      </div>
		      <div class="col-sm-1">
		        2 day(s)
		      </div>
		    </div>

		    <div class="d-flex p-2 mb-2 bg-secondary rounded text-light details">
		      <div class="col-sm-1">
		        003
		      </div>
		      <div class="col-sm-1">
		        3 day(s)
		      </div>
		    </div>

		    <div class="d-flex p-2 mb-2 bg-secondary rounded text-light details">
		      <div class="col-sm-1">
		        004
		      </div>
		      <div class="col-sm-1">
		        4 day(s)
		      </div>
		    </div>
		</div>
	</body>
</html>