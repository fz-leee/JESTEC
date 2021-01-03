<?php 

include('dbh.inc.php');
$sql = "SELECT * FROM manuscripts";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $firstNameShrt = substr($row['firstName'], 0, 1);
    $id = "MSCR" . $row['idManuscript'];

    echo '<div id="'.$id.'" class="row bg-primary text-light rounded details manuscript-item" data-toggle="modal" data-target="#editorModal">';
      echo '<div class="col-sm-1">' . $row['idManuscript'] . '</div>';
      echo '<div class="col-sm-3">' . $row['manuscriptTitle'] . '</div>';
      echo '<div class="col-sm-1">' . $row['lastName'] . ', ' . $firstNameShrt . '.</div>';
      echo '<div class="col-sm-1">' . $row['keywords'] . '</div>';
      echo '<div class="col-sm-2">' . $row['dateSubmitted'] . '</div>';
      echo '<div class="col-sm-2">' . $row['manuscriptStatus'] . '</div>';
      echo '<div class="col-sm-2 my-auto">';
        echo '<div class="progress border border-light">';
          echo '<div class="progress-bar bg-success" role="progressbar" style="width:';
            switch($row['manuscriptStatus']) {
              case 'AssignEditor':
                echo '10';
                break;
              case 'AssignReviewer':
                echo '20';
                break;
              case 'PendingReviewerReq':
                echo '30';
                break;
              case 'InReview':
                echo '40';
                break;
              case 'RevisionNeeded':
                echo '50';
                break;
              case 'InRevision':
                echo '60';
                break;
              case 'AwaitingRevision':
                echo '70';
                break;
              case 'AwaitingDecision':
                echo '80';
                break;
              case 'ToPublish':
                echo '90';
                break;
              case 'Published':
                echo '100';
                break;
              default:
                echo '0';
            }
          echo '%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>'; // note: make progress function
        echo '</div>';
      echo '</div>';
    echo '</div>';
  }
}