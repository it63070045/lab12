<html>
<head>
<title>ITF Lab</title>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'natanon.mysql.database.azure.com', 'NATANON@natanon', 'gG6tbrvqmn', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<table width="600" border="1">
  <tr>
    <th width="100"> <div align="center">Name</div></th>
    <th width="350"> <div align="center">Comment </div></th>
    <th width="150"> <div align="center">Link </div></th>
      <th width="150"> <div align="center">Action </div></th>
  </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><?php echo $Result['Name'];?></div></td>
    <td><?php echo $Result['Comment'];?></td>
    <td><?php echo $Result['Link'];?></td>
    <td align="center"><a href="edit.php?id=<?php echo $Result['ID'];?>">Edit</a><a href="del.php?id=<?php echo $Result['ID'];?>">Del</a></td>
  </tr>
<?php
}
?>
</table>
<a href="form.html">Add</a>
<?php
mysqli_close($conn);
?>
</body>
</html>
