<?php include('head.php'); ?>
<?php include('navbar.php'); ?>
<?php include('includes/dbh.inc.php'); ?>

<html>
	<head>
<script src="js/message.js"></script>
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

    .user1 {
    	color: #a3c989;
    }

    .user2 {
    	color: #7aad55;
    }

    .manuscript-item:hover {
    	cursor: pointer;
    }
</style>

	</head>

	<body class="bg-dark">
		<div class="container">
			<div class="card">
				<div class="card-body">
					<div class="row">
						
						<div class="col-3">
							<h5 class="card-title">Manuscript ID & Title <a id="btnShowAll" class="manuscript-item btn-sm btn-primary float-right rounded-circle" data-toggle="tooltip" data-placement="top" title="Show all messages">&plus;</a></h5>
							<hr>
						</div>

						<div class="col-9">
							<h5>Threads</h5>
							<hr>
						</div>

					</div>

					<div class="row">
						<div class="col-3">
							<div id="manuscriptList" class="list-group list-group-flush">
								<?php
									$listsql = "SELECT messages.idMessage, manuscripts.idManuscript, manuscripts.manuscriptTitle FROM messages INNER JOIN manuscripts ON messages.idManuscript=manuscripts.idManuscript GROUP BY manuscripts.manuscriptTitle";
          							$listresult = mysqli_query($conn, $listsql);

          							if (mysqli_num_rows($listresult) > 0) {
            							while ($row = mysqli_fetch_assoc($listresult)) {
            								$id = "MSCR" . $row['idManuscript'];
            								echo '<a id="' . $id . '" class="text-primary manuscript-item list-group-item list-group-item-action">[' . $id . '] ' . $row['manuscriptTitle'] . '</a>';
	            						}
	            					}
								?>
							</div>
						</div>

						<div id="messageList" class="col-9 px-3 overflow-auto" style="height:40rem">
						</div>

					</div>

				</div>
			</div>
		</div>
	</body>
</html>