<?php $ManuscriptTitle = 'ManuscriptTitle' ?>
<?php $ManuscriptID = 'ManuscriptID' ?>
<?php include('head.php'); ?>
<?php include('navbar.php'); ?>

<html>
	<head>
		<style>
			body {
			  padding-top: 6rem;
			  padding-bottom: 2rem;
			  padding-left: 2rem;
			  padding-right: 2rem;
			}

			.btn {
				margin-top: 1rem;
			}
		</style>
	</head>

	<body class='bg-dark'>
		<div class="container-fluid">
			<div class="d-flex justify-content-center">
				<div class="embed-responsive embed-responsive-4by3 mr-2" style="height: 50rem">
					<iframe class="embed-responsive-item" src="/pdfreader/viewer.html" frameBorder="0"></iframe>
				</div>
				<div class="card mr-2" style="width: 50rem; height: 50rem">
					<div class="card-body">
						<h5 class="card-title">[<?php echo $ManuscriptID ?>] <?php echo $ManuscriptTitle ?></h5>
						<span class="badge badge-primary mr-1 mb-2">Keywords</span><span class="badge badge-primary mr-1">Keywords</span>
						<hr>
						<p class="lead">Reviewer Comments</p>
						<form>
							<div class="form-group">
							  <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Enter comments here or choose file below" rows="12"></textarea>
							</div>
							<hr>
							<div class="custom-file">
							  <input type="file" class="custom-file-input" id="fileInput">
							  <label class="custom-file-label" for="customFile">Choose file</label>
							</div>
							<button type="submit" class="btn btn-primary btn-block">Submit Review</button>
						</form>
					</div>
				</div>
			</div>
		</div>

		<script>
		document.querySelector('.custom-file-input').addEventListener('change',function(e){
		  var fileName = document.getElementById("fileInput").files[0].name;
		  var nextSibling = e.target.nextElementSibling
		  nextSibling.innerText = fileName
		})
		</script>
	</body>
</html>