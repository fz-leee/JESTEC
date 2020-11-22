<?php $FirstName = 'Bob'; ?>
<?php $AccessLevel = 'Author'; ?>
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
  background-image: url(https://mixkit.imgix.net/art/preview/mixkit-exhausted-man-in-front-of-a-computer-with-his-head-69-original-large.png?q=80&auto=format%2Ccompress&h=700&q=80&dpr=1);
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

.chatbox {
  position: fixed;
  bottom: 0;
  right: 2rem;
}

	</style>

	</head>

	<body class="bg-dark">

<div class="container-fluid">

<div class="d-flex justify-content-between jumbotron text-center bg-header shadow">
  <a class="btn align-self-center disabled">
    <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-caret-left-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
    </svg>
  </a>
  <div>
    <h1 class="display-4 text-dark">Hello, <?php echo($FirstName); ?>!</h1>
    <p class="lead text-dark">This is your <span class="font-weight-bold"><?php echo($AccessLevel); ?></span> Dashboard</p>
  </div>
  <a class="btn align-self-center" href="/reviewer.php">
    <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-caret-right-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
    <path d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
    </svg>
  </a>
</div>

<div class="d-flex justify-content-center">
  <div>
    <iframe class="rounded" src="" style="width: 18rem;" frameBorder="0">
    </iframe>
  </div>


  <div class="container"><!--************Manuscript List-view************-->	
    <div class="row text-light">
      <div class="col-sm-2">
        Manuscript No.
      </div>
      <div class="col-sm-5">
        Manuscript Title
      </div>
      <div class="col-sm-2">
        Date Submitted
      </div>
      <div class="col-sm-2">
        Review By
      </div>
      <div class="col-sm-1">
        
      </div>
    </div>

    <div class="details row bg-secondary rounded text-light shadow-sm">
      <div class="col-sm-2">
        001
      </div>
      <div class="col-sm-5">
        Submitted
      </div>
      <div class="col-sm-2">
        02/02/2020
      </div>
      <div class="col-sm-2">
        04/20/2020
      </div>
      <div class="col-sm-1">
        <a class="text-light" href="#" data-toggle="collapse" data-target="#ChatBox" aria-expanded="false" aria-controls="ChatBox"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chat-dots-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  		  <path fill-rule="evenodd" d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
  		</svg></a>
  		<a class="text-light" href="#" data-toggle="tooltip" title="Info"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  		  <path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
  		</svg></a>
      </div>
    </div>

    <div class="row bg-success rounded shadow-sm text-light details">
      <div class="col-sm-2">
        002
      </div>
      <div class="col-sm-5">
        Accepted
      </div>
      <div class="col-sm-2">
        02/02/2020
      </div>
      <div class="col-sm-2">
        04/20/2020
      </div>
      <div class="col-sm-1">
        <a class="text-light" href="#" data-toggle="tooltip" title="Message"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chat-dots-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
      </svg></a>
      <a class="text-light" href="#" data-toggle="tooltip" title="Info"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
      </svg></a>
      </div>
    </div>

    <div class="row bg-danger rounded shadow-sm text-light details">
      <div class="col-sm-2">
        003
      </div>
      <div class="col-sm-5">
        Rejected
      </div>
      <div class="col-sm-2">
        02/02/2020
      </div>
      <div class="col-sm-2">
        04/20/2020
      </div>
      <div class="col-sm-1">
        <a class="text-light" href="#" data-toggle="tooltip" title="Message"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chat-dots-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
      </svg></a>
      <a class="text-light" href="#" data-toggle="tooltip" title="Info"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
      </svg></a>
      </div>
    </div>

    <div class="row bg-info rounded shadow-sm text-light details">
      <div class="col-sm-2">
        004
      </div>
      <div class="col-sm-5">
        Revision Required
      </div>
      <div class="col-sm-2">
        02/02/2020
      </div>
      <div class="col-sm-2">
        04/20/2020
      </div>
      <div class="col-sm-1">
        <a class="text-light" href="#" data-toggle="tooltip" title="Message"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chat-dots-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
      </svg></a>
      <a class="text-light" href="#" data-toggle="tooltip" title="Info"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
      </svg></a>
      </div>
    </div>

    <button type="button" class="btn border border-secondary btn-block btn-dark text-light no-gutter" data-toggle="modal" data-target="#submitManuscript"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
    <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
    </svg>
    </svg>Submit Manuscript</button>
  </div>
    
  <div>
    <iframe class="rounded" src="/job_tracker.php" style="width: 18rem; height: 21rem" frameBorder="0">
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

  <!-- Modal -->
<form>
  <div class="modal fade" id="submitManuscript" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Submit Manuscript</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      
      
        <div class="modal-body">
          <div class="accordion" id="accordionExample">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Author Details
                  </button>
                </h2>
              </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                      <div class="form-group">
                        <div class="form-row">
                          <div class="col-6">
                            <small class="form-text text-muted mb-1">Select a JESTEC User</small>
                            <input class="form-control mb-1" id="addAuthorSelection" list="usernames">
                            <datalist id="usernames">
                              <option value="User1"></option>
                              <option value="User2"></option>
                              <option value="User3"></option>
                            </datalist>
                          </div>
                          <div class="col-6">
                            <small class="form-text text-muted mb-1">Or enter author details</small>
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
                        <input class="form-control" type="text" placeholder="No author added" readonly>
                      </div>      
                      </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Manuscript Details
                  </button>
                </h2>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                      <div class="form-group">
                        <label for="manuscriptTitle" required>Manuscript Title</label>
                        <input type="text" class="form-control" id="manuscriptTitle" aria-describedby="emailHelp" placeholder="Enter manuscript title">
                      </div>
                      <div class="form-group">
                        <label for="keywords">Keyword(s)</label>
                        <textarea class="form-control" id="keywords" rows="1" required></textarea>
                        <small class="form-text text-muted">Separate keywords with commas (Keyword1, Keyword2)</small>
                      </div>
                      <div class="form-group">
                        <label for="manuscriptTitle" required>Track</label>
                        <select class="custom-select">
                          <option selected>Select track</option>
                          <option value="1">Computer Science</option>
                          <option value="2">Engineering</option>
                          <option value="3">Data Science</option>
                        </select>   
                      </div>
                      <div class="form-group">
                        <label for="keywords">Abstract</label>
                        <textarea class="form-control" id="keywords" rows="3" required></textarea>
                      </div>
                      <div class="form-group">
                        <label for="manuscriptFile">Manuscript (PDF)</label>
                        <input type="file" class="form-control-file" id="manuscriptFile" required>
                      </div>
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">I agree to the JESTEC <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a></label>
                      </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </div>
  </div>
</form>
  </div>

</div> 

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});

</script>
	</body>
</html>