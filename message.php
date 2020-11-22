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

    .bg-transparent {
       background-color:rgba(0,0,0,0) !important;
    }

    .media {
    	margin-bottom: 1rem;
    }

    .media-border {
    	margin-bottom: 1rem;
    	padding-left: 2rem;
    	border-left: 3px solid #5bc0de;
    	padding-right: 2rem;
    }
</style>

	</head>

	<body class="bg-dark">
		<div class="container">
			<div class="card">
				<div class="card-body">
					<div class="row">
						
						<div class="col-3">
							<h5 class="card-title">Manuscript ID & Title</h5>
							<hr>
						</div>

						<div class="col-9">
							<h5>Threads</h5>
							<hr>
						</div>

					</div>

					<div class="row">
						<div class="col-3">
							<div class="list-group list-group-flush">
							  <a href="#" class="list-group-item list-group-item-action active">
							    Cras justo odio
							  </a>
							  <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
							  <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
							  <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
							  <a href="#" class="list-group-item list-group-item-action">Vestibulum at eros</a>
							</div>
						</div>

						<div class="col-9 px-3 overflow-auto" style="height:40rem">
							<div class="alert alert-info">
								Messages under <strong>[ManuscriptID] ManuscriptTitle</strong> 
							</div>
							<hr>
							<div class="media">
							  	<svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-person-circle text-info mr-3 my-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								  <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
								  <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
								  <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
								</svg>
								<div class="media-body">
								    <h5 id="volume-1" class="text-success mt-0">
								    	User 1 <small class="text-muted">to @user2, @user3</small>
								    </h5>
						   		    <p class="mb-1"><em><a class="text-info" data-toggle="collapse" href="#thread1message1" role="button" aria-expanded="false" aria-controls="thread1message1">Message Subject</a></em></p>

								    <div class="collapse" id="thread1message1">
									    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								    </div>
								</div>
							</div>
							<hr>

							<div class="media">
							  	<svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-person-circle text-info mr-3 my-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								  <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
								  <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
								  <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
								</svg>
								<div class="media-body">
								    <h5 id="volume-1" class="text-success mt-0">
								    	User 2 <small class="text-muted">to @user1</small>
								    </h5>
						   		    <p class="mb-1"><em><a class="text-info" data-toggle="collapse" href="#thread1message2" role="button" aria-expanded="false" aria-controls="thread1message2">Message Subject</a></em></p>

								    <div class="collapse" id="thread1message2">
									    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								    </div>
								</div>
							</div>
							<hr>

							<div class="media">
							  	<svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-person-circle text-info mr-3 my-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								  <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
								  <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
								  <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
								</svg>
								<div class="media-body">
								    <h5 id="volume-1" class="text-success mt-0">
								    	User 1 <small class="text-muted">to @user2</small>
								    </h5>
						   		    <p class="mb-1"><em><a class="text-info" data-toggle="collapse" href="#thread1message3" role="button" aria-expanded="false" aria-controls="thread1message3">Message Subject</a></em></p>

								    <div class="collapse" id="thread1message3">
									    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								    </div>
								</div>
							</div>
							<hr>

						</div>

					</div>

				</div>
			</div>
		</div>
	</body>

</html>