<?php
require 'db.php'; 
$sql = "select * from reviews";
$result = $conn->query($sql);?>
<html>
<head>
    <style>
        a.top {
            margin-right:20px;
            font-size:20px;
            color:red;
        }
        </style>
<title> Update Data</title>
</head>
<body>
    <a href="form.php" class="top">Create Data </a>
    <a href="update.php" class="top">Update/Delete Data </a>
    <a href="read.php" class="top">Retrieve Data </a>
<hr>
<table border="1" cellpadding="5">
<tr>
<th>ID</th><th>Username</th><th>Rating</th>
<th>Review text</th><th>Movie</th> <th>Edit</th>
<th>Delete</th>
</tr>
<?php 
if($result ->num_rows > 0) {
    while($row = $result ->fetch_assoc()){
?>
<tr>
<td><?php echo $row["review_id"]; ?></td>
<td><?php echo $row["username"]; ?></td>
<td><?php echo $row["rating"]; ?></td>
<td><?php echo $row["review_text"]; ?></td>
<td><?php echo $row["movie"]; ?></td>
<td><a href="updatesingle.php?id=<?php echo $row['review_id']; ?>">Update</a></td>
<td><a href="delete.php?id=<?php echo $row['review_id']; ?>">Delete</a></td>
</tr>

<?php 
}
}
else
{
    echo "no results";
}
$conn->close();
?>
</table>
</body>
</html>