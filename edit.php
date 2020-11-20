<?php
	$conn = mysqli_connect( 'natanon.mysql.database.azure.com', 'NATANON@natanon', 'gG6tbrvqmn', 'itflab', 3306);

	$id = $_GET['id'];

	$sql = 'SELECT * FROM guestbook WHERE ID = '.$id.'';
	$query = mysqli_query($conn, $sql);
	if(!$query) {
		header('Location: show.php');
	}
	else {
		$data = mysqli_fetch_assoc($query);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Comment Form</title>
</head>
<body>
  <form action = "update.php" method = "post" >
  <input type="text" name="id" value="<?php echo $data['ID']; ?>" class="form-control d-none" required>
    Name:<br>
    <input type="text" name = "name" id="idName" placeholder="Enter Name" value="<?php echo $data['Name']; ?>"> <br>
    Comment:<br>
    <textarea rows="10" cols="20" name = "comment" id="idComment" placeholder="Enter Comment"><?php echo $data['Comment']; ?></textarea><br>  
    Link:<br>
    <input type="text" name = "link" id="idLink" placeholder="Enter Link" value="<?php echo $data['Link']; ?>"> <br><br>
    <input type="submit" id="commentBtn">
  </form>
</body>
</html>
