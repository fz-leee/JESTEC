<?php $numPublication = "all" ?>
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

    .media-border {
    	margin-bottom: 1rem;
    	padding-left: 2rem;
    	border-left: 3px solid #5bc0de;
    	padding-right: 2rem;
    }
</style>

	</head>

	<body class="bg-dark">
		<div class="container-fluid">
			<div class="d-flex justify-content-between">
				<div>
				    <iframe class="rounded" src="/archivefilter.php" style="width: 18rem; height: 34rem" frameBorder="0">
				    </iframe>
				</div>

				<div class="container text-light">
					<h5 class="mb-3">Showing <?php echo $numPublication ?> publications</h5>
					<div class="input-group"> 
					  <input class="form-control bg-transparent text-light" id="myInput" type="text" placeholder="Filter publications by search">
					  <div class="input-group-append">
					      <button class="btn btn-light" type="button">
					        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						  <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
						  <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
						</svg>
					      </button>
					    </div>
			    	</div>
			    	<hr class="border-light">
					<div class="media">
					  <div class="media-body">
					    <h5 id="volume-1" class="mt-0"><a class="text-success" data-toggle="collapse" href="#volume1-items" role="button" aria-expanded="false" aria-controls="collapseExample">Volume 1, 2020</a></h5>
					    <div class="collapse" id="volume1-items">
						    <div class="media media-border">
						    	<div class="media-body">
						    		<h5 class="mt-0 text-info">Manuscript Title</h5>
						    		<p class="mb-0">Author1, Author2</p>
						    		<p class="mb-0 text-info"><span class="badge badge-info mr-2">Cite This</span><em class="mr-2">23 Downloads</em><a href="#" class="text-info">Cited by 2</a></p>
						    	</div>
						    </div>
						    <div class="media media-border">
						    	<div class="media-body">
						    		<h5 class="mt-0 text-info">Manuscript Title</h5>
						    		<p class="mb-0">Author1, Author2</p>
						    		<p class="mb-0 text-info"><span class="badge badge-info mr-2">Cite This</span><em class="mr-2">23 Downloads</em><a href="#" class="text-info">Cited by 2</a></p>
						    	</div>
						    </div>
						    <div class="media media-border">
						    	<div class="media-body">
						    		<h5 class="mt-0 text-info">Manuscript Title</h5>
						    		<p class="mb-0">Author1, Author2</p>
						    		<p class="mb-0 text-info"><span class="badge badge-info mr-2">Cite This</span><em class="mr-2">23 Downloads</em><a href="#" class="text-info">Cited by 2</a></p>
						    	</div>
						    </div>
						    <div class="media media-border">
						    	<div class="media-body">
						    		<h5 class="mt-0 text-info">Manuscript Title</h5>
						    		<p class="mb-0">Author1, Author2</p>
						    		<p class="mb-0 text-info"><span class="badge badge-info mr-2">Cite This</span><em class="mr-2">23 Downloads</em><a href="#" class="text-info">Cited by 2</a></p>
						    	</div>
						    </div>
						    <div class="media media-border">
						    	<div class="media-body">
						    		<h5 class="mt-0 text-info">Manuscript Title</h5>
						    		<p class="mb-0">Author1, Author2</p>
						    		<p class="mb-0 text-info"><span class="badge badge-info mr-2">Cite This</span><em class="mr-2">23 Downloads</em><a href="#" class="text-info">Cited by 2</a></p>
						    	</div>
						    </div>	
						  </div>
						</div>
					</div>

					<div class="media">
					  <div class="media-body">
					    <h5 id="volume-2" class="mt-0"><a class="text-success" data-toggle="collapse" href="#volume2-items" role="button" aria-expanded="false" aria-controls="collapseExample">Volume 2, 2020</a></h5>
					    <div class="collapse" id="volume2-items">
						    <div class="media media-border">
						    	<div class="media-body">
						    		<h5 class="mt-0 text-info">Manuscript Title</h5>
						    		<p class="mb-0">Author1, Author2</p>
						    		<p class="mb-0 text-info"><span class="badge badge-info mr-2">Cite This</span><em class="mr-2">23 Downloads</em><a href="#" class="text-info">Cited by 2</a></p>
						    	</div>
						    </div>
						    <div class="media media-border">
						    	<div class="media-body">
						    		<h5 class="mt-0 text-info">Manuscript Title</h5>
						    		<p class="mb-0">Author1, Author2</p>
						    		<p class="mb-0 text-info"><span class="badge badge-info mr-2">Cite This</span><em class="mr-2">23 Downloads</em><a href="#" class="text-info">Cited by 2</a></p>
						    	</div>
						    </div>
						    <div class="media media-border">
						    	<div class="media-body">
						    		<h5 class="mt-0 text-info">Manuscript Title</h5>
						    		<p class="mb-0">Author1, Author2</p>
						    		<p class="mb-0 text-info"><span class="badge badge-info mr-2">Cite This</span><em class="mr-2">23 Downloads</em><a href="#" class="text-info">Cited by 2</a></p>
						    	</div>
						    </div>
						    <div class="media media-border">
						    	<div class="media-body">
						    		<h5 class="mt-0 text-info">Manuscript Title</h5>
						    		<p class="mb-0">Author1, Author2</p>
						    		<p class="mb-0 text-info"><span class="badge badge-info mr-2">Cite This</span><em class="mr-2">23 Downloads</em><a href="#" class="text-info">Cited by 2</a></p>
						    	</div>
						    </div>
						    <div class="media media-border">
						    	<div class="media-body">
						    		<h5 class="mt-0 text-info">Manuscript Title</h5>
						    		<p class="mb-0">Author1, Author2</p>
						    		<p class="mb-0 text-info"><span class="badge badge-info mr-2">Cite This</span><em class="mr-2">23 Downloads</em><a href="#" class="text-info">Cited by 2</a></p>
						    	</div>
						    </div>	
						  </div>
						</div>
					</div>

					<div class="media">
					  <div class="media-body">
					    <h5 id="volume-3" class="mt-0"><a class="text-success" data-toggle="collapse" href="#volume3-items" role="button" aria-expanded="false" aria-controls="collapseExample">Volume 3, 2020</a></h5>
					    <div class="collapse" id="volume3-items">
						    <div class="media media-border">
						    	<div class="media-body">
						    		<h5 class="mt-0 text-info">Manuscript Title</h5>
						    		<p class="mb-0">Author1, Author2</p>
						    		<p class="mb-0 text-info"><span class="badge badge-info mr-2">Cite This</span><em class="mr-2">23 Downloads</em><a href="#" class="text-info">Cited by 2</a></p>
						    	</div>
						    </div>
						    <div class="media media-border">
						    	<div class="media-body">
						    		<h5 class="mt-0 text-info">Manuscript Title</h5>
						    		<p class="mb-0">Author1, Author2</p>
						    		<p class="mb-0 text-info"><span class="badge badge-info mr-2">Cite This</span><em class="mr-2">23 Downloads</em><a href="#" class="text-info">Cited by 2</a></p>
						    	</div>
						    </div>
						    <div class="media media-border">
						    	<div class="media-body">
						    		<h5 class="mt-0 text-info">Manuscript Title</h5>
						    		<p class="mb-0">Author1, Author2</p>
						    		<p class="mb-0 text-info"><span class="badge badge-info mr-2">Cite This</span><em class="mr-2">23 Downloads</em><a href="#" class="text-info">Cited by 2</a></p>
						    	</div>
						    </div>
						    <div class="media media-border">
						    	<div class="media-body">
						    		<h5 class="mt-0 text-info">Manuscript Title</h5>
						    		<p class="mb-0">Author1, Author2</p>
						    		<p class="mb-0 text-info"><span class="badge badge-info mr-2">Cite This</span><em class="mr-2">23 Downloads</em><a href="#" class="text-info">Cited by 2</a></p>
						    	</div>
						    </div>
						    <div class="media media-border">
						    	<div class="media-body">
						    		<h5 class="mt-0 text-info">Manuscript Title</h5>
						    		<p class="mb-0">Author1, Author2</p>
						    		<p class="mb-0 text-info"><span class="badge badge-info mr-2">Cite This</span><em class="mr-2">23 Downloads</em><a href="#" class="text-info">Cited by 2</a></p>
						    	</div>
						    </div>	
						  </div>
						</div>
					</div>
				</div>

				<div>
				    <iframe class="rounded" src="" style="width: 18rem; height: 34rem" frameBorder="0">
				    </iframe>
				</div>
			</div>
		</div>
	</body>
</html>