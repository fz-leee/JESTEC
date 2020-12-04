<?php
	echo '<div class="message-header alert alert-info">Showing all messages</div>';

    include('dbh.inc.php');
	$sql = "SELECT messages.*, manuscripts.manuscriptTitle FROM messages INNER JOIN manuscripts ON messages.idManuscript=manuscripts.idManuscript";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo '<div class="message-item MSCR' . $row['idManuscript'] . '">';
			echo '<hr>';
			echo '<div class="media">';
				echo '<svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-person-circle text-info mr-3 my-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/><path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/><path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/></svg>';
				echo '<div class="media-body">';
					echo '<h5 class="';
						// Change sender text-color
			              switch ($row['sender']) {
			                case "Fauzi":
			                  echo "user1";
			                  break;
			                case "Yazid":
			                  echo "user2";
			                  break;
			                default:
			                  echo "text-secondary";
			              }
						echo ' mt-0">' . $row['sender'] . '<small class="text-muted"> to ' . $row['recipient'] . '<span class="text-primary"> | ' . $row['manuscriptTitle'] . '</span></small></h5>';
					echo '<p class="mb-1"><em><a class="text-info" data-toggle="collapse" href="#msg' . $row["idMessage"] . '" role="button" aria-expanded="false" aria-controls="msg' . $row["idMessage"] . '">' . $row['subject'] . '</a></em></p>';
					echo '<div class="collapse" id="msg' . $row["idMessage"] . '">';
						echo $row['message'];
					echo '</div>';
    			echo '</div>';
			echo '</div>';
		echo '</div>';
		}
	}
?> 