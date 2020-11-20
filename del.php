
<?php
	$conn = mysqli_connect('natanon.mysql.database.azure.com', 'NATANON@natanon', 'gG6tbrvqmn', 'itflab', 3306);
	$sql = 'DELETE FROM guestbook WHERE ID = '.$_GET['id'].'';
?>
<!DOCTYPE html>
<html>
    <title>Delete | page</title>
    <h2 align="center">
						<?php
							if(mysqli_query($conn, $sql)) {
                                echo "Deleted"
								?>
							<script>
			   window.location.replace("index.php");
		   </script>
							<?php
							}
							else {
								echo "Failed";
							}
						?>
						</h2>
</html>
