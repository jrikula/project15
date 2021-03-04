<?php
include 'db.php';
$a = $_GET['review_id'];
$result = mysqli_query($conn,"SELECT * FROM reviews WHERE review_id= '$a'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Employee Data</title>
</head>
<body>
<form method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
Username: <br>
<input type="text" name="username"  value="<?php echo $row['username']; ?>">
<br>
Rating:<br>
<input type="text" name="rating" value="<?php echo $row['rating']; ?>">
<br>
Review Text:<br>
<input type="text" name="review_text" value="<?php echo $row['review_text']; ?>">
<br>
Movie:<br>
<input type="text" name="movie" value="<?php echo $row['movie']; ?>">
<br>

<input type="submit" name="submit" value="Delete" >
</form>
<?php 
if($_POST['submit']){
    
    $username = $_POST['username'];
    $query = mysqli_query($conn,"DELETE FROM reviews where review_id='$a'");
    if($query){
        echo "Record Deleted with review_id: $a <br>";
        echo "<a href='update.php'> Check your updated List </a>";
        // if you want to redirect to update page after updating
        //header("location: update.php");
    }
    else { echo "Record Not Deleted";}
    }
$conn->close();
?>
</body>
</html>