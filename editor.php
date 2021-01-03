<?php $FirstName = 'Bob'; ?>
<?php $AccessLevel = 'Editor'; ?>
<?php include('head.php'); ?>
<?php include('navbar.php'); ?>

<html>
	<head>
		<script src="js/editor.js"></script>
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
			  background-image: url(https://img.rawpixel.com/s3fs-private/rawpixel_images/website_content/v658-te-37-internationalyouthday_2.jpg?w=1300&dpr=1&fit=default&crop=default&q=80&vib=3&con=3&usm=15&bg=F4F4F3&ixlib=js-2.2.1&s=6c272451827fc304aed10e5c29d65d34);
			  background-position: center;
			  background-repeat: no-repeat;
			  background-size: cover;
			  opacity: 0.8;
			  background-blend-mode: overlay;
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

			.chatbox {
			  position: fixed;
			  bottom: 0;
			  right: 2rem;
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
			    <iframe class="rounded" src="/editorfilter.php" style="width: 18rem; height: 34rem" frameBorder="0">
			    </iframe>
			</div>

			<div class="container">
				<div id="editor-table">
					<div class="row text-light align-items-end">
						<div class="col-sm-1">Man. ID</div>
						<div class="col-sm-3">Manuscript Title</div>
						<div class="col-sm-1">Author(s)</div>
						<div class="col-sm-1">Keyword(s)</div>
						<div class="col-sm-2">Submitted</div>
						<div class="col-sm-2">Status</div>
						<div class="col-sm-2">Progress</div>
					</div>
				</div>
	
				<div id="ManuscriptList">
				
				</div>

				<!-- Modal -->
				<div class="modal fade" id="editorModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="modalTitle"></h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				      
				      <div id="accordion">
						  <div class="card" id="test" style="display: none;">
						    <div class="card-header" id="headingOne">
						      <h5 class="mb-0">
						        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
						          Assign an Editor to this manuscript
						        </button>
						      </h5>
						    </div>

						    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
						      <div class="card-body">
						        <small class="form-text text-muted mb-1">Select a JESTEC Editor</small>
	                            <input class="form-control mb-1" id="assignedEditor" list="editors" placeholder="Enter user ID">
	                            <datalist id="editors">
	                              <option value="Editor1"></option>
	                              <option value="Editor2"></option>
	                              <option value="Editor3"></option>
	                            </datalist>
						      </div>
						    </div>
						  </div>
						  <div class="card">
						    <div class="card-header" id="headingTwo">
						      <h5 class="mb-0">
						        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						          Assign Reviewer(s) to this manuscript
						        </button>
						      </h5>
						    </div>
						    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
						      <div class="card-body">
						        <div class="form-row">
		                          <div class="col-6">
		                            <small class="form-text text-muted mb-1">Select a JESTEC Reviewer</small>
		                            <input class="form-control mb-1" id="assignedReviewers" list="reviewers" placeholder="Enter user ID">
		                            <datalist id="reviewers">
		                              <option value="Reviewer1"></option>
		                              <option value="Reviewer2"></option>
		                              <option value="Reviewer3"></option>
		                            </datalist>
		                          </div>
		                          <div class="col-6">
		                            <small class="form-text text-muted mb-1">Or add a Non-JESTEC Reviewer</small>
		                            <button class="btn btn-block btn-secondary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Quick Add
		                            </button>
		                          </div>
		                        </div>
		                        <div class="collapse w-100 mb-2" id="collapseExample">
		                          <div class="form-row">
		                            <div class="form-group col-md-6">
		                              <label for="FirstName">First Name</label>
		                              <input type="text" class="form-control" id="FirstName" placeholder="First Name">
		                            </div>
		                            <div class="form-group col-md-6">
		                              <label for="LastName">Last Name</label>
		                              <input type="text" class="form-control" id="LastName" placeholder="Last Name">
		                            </div>
		                          </div>
		                          <div class="form-group">
		                            <label for="Email">Email</label>
		                            <input type="email" class="form-control" id="Email" placeholder="Email">
		                          </div>
		                          <div class="form-row">
		                            <div class="form-group col-md-6">
		                              <label for="Affiliation">Affiliation</label>
		                              <input type="text" class="form-control" id="Affiliation" placeholder="Taylor's University">
		                            </div>
		                            <div class="form-group col-md-6">
		                              <label for="Title">Title</label>
		                              <input type="text" class="form-control" id="Title" placeholder="Mr, Mrs, Dr, Prof">
		                            </div>
		                          </div>
		                          <button type="button" class="btn btn-primary mb-2" id="quickAddAuthor">Add</button>
		                        </div>

		                        <hr>
		                          <div class="form-group">
								    <label for="exampleFormControlTextarea1">Reviewer(s) assigned</label>
								    <textarea class="form-control" id="AssignedReviewers" rows="3" placeholder="No reviewer assigned" readonly></textarea>
								  </div>
						      </div>
						    </div>
						  </div>
						  <div class="card">
						    <div class="card-header" id="headingThree">
						      <h5 class="mb-0">
						        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
						          Update Manuscript Status
						        </button>
						      </h5>
						    </div>
						    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
						      <div class="card-body">
						        <small class="form-text text-muted mb-1">Select a status</small>
	                            <select class="form-control mb-1" id="ManuscriptStatus" >
	                              <option>Assign paper to editor</option>
	                              <option>Assign reviewer</option>
	                              <option>Awaiting reviewer request acceptance</option>
	                              <option>In review</option>
	                              <option>Revision needed</option>
	                              <option>In revision</option>
	                              <option>Awaiting revision</option>
	                              <option>Awaiting decision to accept/decline</option>
	                              <option>To publish</option>
	                              <option>Published</option>
	                            </select>
						      </div>
						    </div>
						  </div>
						</div>   
         
				      </div>
				      <div class="modal-footer">
				      	<button type="button" class="btn btn-secondary text-light mr-auto" data-dismiss="modal" data-toggle="collapse" data-target="#ChatBox" aria-expanded="false" aria-controls="ChatBox"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chat-dots-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/></svg> Message</button>
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				        <button type="button" class="btn btn-primary">Save changes</button>
				      </div>
				    </div>
				  </div>
				</div>
			</div>

			<div>
			    <iframe class="rounded" src="/editorjob_tracker.php" style="width: 18rem; height: 34.5rem" frameBorder="0">
			    </iframe>
			</div>

			<div class="collapse chatbox" id="ChatBox">
			    <div class="card" style="width: 25rem; height: 35rem">
			      <div class="card-header">
			        New Message
			        <button type="button" class="close" data-toggle="collapse" href="#ChatBox" role="button" aria-expanded="false" aria-controls="ChatBox">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      
			      <div class="card-body">
			        <form>
			          <input class="form-control" id="addAuthorSelection" list="recipients" placeholder="Recipient(s)">
			          <datalist id="recipients">
			            <option value="Recipient1"></option>
			            <option value="Recipient2"></option>
			            <option value="Recipient3"></option>
			          </datalist>
			          <hr class="my-2">
			          <input class="form-control" id="addAuthorSelection" list="subjects" placeholder="Subject">
			          <datalist id="subjects">
			            <option value="Subject1"></option>
			            <option value="Subject2"></option>
			            <option value="Subject3"></option>
			          </datalist>
			          <textarea class="form-control my-2" id="exampleFormControlTextarea1" rows="12"></textarea>
			        </form>
			      </div>

			      <div class="card-footer">
			        <button type="submit" class="btn btn-block btn-primary">Send Message</button>
			      </div>
			    </div>
		    </div>
		</div>
	</div>

<script type="text/javascript">
$(document).ready(function(){
	// $("#test").show()
})
</script>
</body>
</html>