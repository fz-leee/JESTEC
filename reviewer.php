<?php $FirstName = 'Bob'; ?>
<?php $AccessLevel = 'Reviewer'; ?>
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

h3 {
  margin-top: 2rem;
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
  <a class="btn align-self-center" href="/author.php">
    <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-caret-left-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <path d="M3.86 8.753l5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z"/>
    </svg>
  </a>
  <div>
    <h1 class="display-4 text-dark">Hello, <?php echo($FirstName); ?>!</h1>
    <p class="lead text-dark">This is your <span class="font-weight-bold"><?php echo($AccessLevel); ?></span> Dashboard</p>
  </div>
  <a class="btn align-self-center" href="editor.php">
    <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-caret-right-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
    <path d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
    </svg>
  </a>
</div>

<div class="d-flex justify-content-center">
  <div>
    <iframe class="rounded" src="/filter.php" style="width: 18rem; height: 21rem" frameBorder="0">
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

    <div class="details row bg-primary rounded text-light shadow-sm">
      <div class="col-sm-2">
        001
      </div>
      <div class="col-sm-5">
        Manuscript 1
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

    <div class="row bg-primary rounded shadow-sm text-light details">
      <div class="col-sm-2">
        002
      </div>
      <div class="col-sm-5">
        Manuscript 2
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

    <div class="row bg-primary rounded shadow-sm text-light details">
      <div class="col-sm-2">
        003
      </div>
      <div class="col-sm-5">
        Manuscript 3
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

    <div class="row bg-primary rounded shadow-sm text-light details">
      <div class="col-sm-2">
        004
      </div>
      <div class="col-sm-5">
        Manuscript 4 
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
  </div>
    
  <div>
    <iframe class="rounded" src="/job_tracker.php" style="width: 18rem; height: 30rem" frameBorder="0">
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

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
	</body>
</html>