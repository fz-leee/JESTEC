<?php include('head.php'); ?>
<?php include('navbar.php'); ?>

<html>
	<head>
		<style>
			body {
				margin-top: 4rem;
			}

			a.list-group-item {
				background-color: #868e96;
				color: #f7f7f7;
				opacity: 0.6;
			}

			a.list-group-item:hover {
				opacity: 1;
			}

			a.active {
				opacity: 0.8;
			}

		</style>
	</head>
	<body class="bg-dark">
	  <div class="container">
	  	<div class="px-2">
		  	<ul class="list-group list-group-flush rounded">
			  <a href="#" class="list-group-item active">All</a>
			  <a href="#" class="list-group-item">Round 1</a>
			  <a href="#" class="list-group-item">Round 2</a>
			  <a href="#" class="list-group-item">Round 3</a>
			  <a href="#" class="list-group-item">Completed</a>
			</ul>
		</div>
	  </div>	

		<script type="text/javascript">document.getElementById("navbar").style.top = "-100px";</script>
	</body>
</html>