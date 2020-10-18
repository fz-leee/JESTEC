<?php $FirstName = 'Bob'; ?>
<?php $AccessLevel = 'Editor'; ?>
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

			.row {
			  margin-bottom: .5rem;
			}

			.bg-header {
			  background-image: url(https://mixkit.imgix.net/art/preview/mixkit-four-people-working-together-at-a-shared-desk-in-an-274-original-large.png?q=80&auto=format%2Ccompress&h=700&q=80&dpr=1);
			  background-position: center;
			  background-repeat: no-repeat;
			  background-size: cover;
			  opacity: 0.8;
			  background-blend-mode: overlay;
			}

			svg {
				margin-right: 0.5rem;
			}

			.row .row {
			  margin-top: 1rem;
			  margin-bottom: 0;
			}

			[class*="col-"] {
			  padding-top: 1rem;
			  padding-bottom: 1rem;
			}

			.details {
			  opacity: 0.8;
			}

			.details:hover {
			  opacity: 1; 
			}
		</style>
	</head>

	<body class='bg-dark'>
	<div class="container-fluid">
		<div class="d-flex justify-content-between jumbotron text-center bg-header shadow">
		  <a class="btn align-self-center" href="/reviewer.php">
		    <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-caret-left-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
		      <path d="M3.86 8.753l5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z"/>
		    </svg>
		  </a>
		  <div>
		    <h1 class="display-4 text-dark">Hello, <?php echo($FirstName); ?>!</h1>
		    <p class="lead text-dark">This is your <span class="font-weight-bold"><?php echo($AccessLevel); ?></span> Dashboard</p>
		  </div>
		  <a class="btn align-self-center" href="#">
		    <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-caret-right-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
		    </svg>
		  </a>
		</div>

		<div class="d-flex justify-content-center">
			<div>
			    <iframe class="rounded" src="" style="width: 18rem; height: 21rem" frameBorder="0">
			    </iframe>
			</div>

			<div class="container">
				<div id="editor-table">
					<div class="row text-light align-items-end">
						<div class="col-sm-1">Man. ID</div>
						<div class="col-sm-3">Manuscript Title</div>
						<div class="col-sm-2">Author(s)</div>
						<div class="col-sm-1">Keyword(s)</div>
						<div class="col-sm-1">Submitted</div>
						<div class="col-sm-2">Status</div>
						<div class="col-sm-2">Progress</div>
					</div>

					<div class="row bg-primary text-light rounded details">
						<div class="col-sm-1">001</div>
						<div class="col-sm-3">Manuscript1</div>
						<div class="col-sm-2">Author1</div>
						<div class="col-sm-1">Keyword1</div>
						<div class="col-sm-1">04/20/2020</div>
						<div class="col-sm-2">Published</div>
						<div class="col-sm-2 my-auto">
							<div class="progress border border-light">
							  <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</div>

					<div class="row bg-primary text-light rounded details">
						<div class="col-sm-1 my-auto">002</div>
						<div class="col-sm-3 my-auto">Manuscript2</div>
						<div class="col-sm-2 my-auto">Author2, Author3</div>
						<div class="col-sm-1 my-auto">Keyword2</div>
						<div class="col-sm-1 my-auto">04/20/2020</div>
						<div class="col-sm-2 my-auto">Ready to Publish</div>
						<div class="col-sm-2 my-auto">
							<div class="progress border border-light">
							  <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</div>

					<div class="row bg-primary text-light rounded details">
						<div class="col-sm-1 my-auto">003</div>
						<div class="col-sm-3 my-auto">Manuscript3</div>
						<div class="col-sm-2 my-auto">Author4, Author5, Author6</div>
						<div class="col-sm-1 my-auto">Keyword3, Keyword4</div>
						<div class="col-sm-1 my-auto">04/20/2020</div>
						<div class="col-sm-2 my-auto">In Revision</div>
						<div class="col-sm-2 my-auto">
							<div class="progress border border-light">
							  <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</div>

					<div class="row bg-primary text-light rounded details">
						<div class="col-sm-1 my-auto">004</div>
						<div class="col-sm-3 my-auto">Manuscript4</div>
						<div class="col-sm-2 my-auto">Author7</div>
						<div class="col-sm-1 my-auto">Keyword5, Keyword6</div>
						<div class="col-sm-1 my-auto">04/20/2020</div>
						<div class="col-sm-2 my-auto">In Review</div>
						<div class="col-sm-2 my-auto">
							<div class="progress border border-light">
							  <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div>
			    <iframe class="rounded" src="/job_tracker.php" style="width: 18rem; height: 21rem" frameBorder="0">
			    </iframe>
			</div>
		</div>
	</div>
	</body>
</html>