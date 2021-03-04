<link rel="stylesheet" href="form.css">
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
Rating :<br>
<select name="rating">
    <option value="1"> 1 </option> 
    <option value="2"> 2 </option> 
    <option value="3"> 3 </option> 
    <option value="4"> 4 </option>
    <option value="5"> 5 </option>
    </select>
    <br>
Review text:<br>
<input type="text" name="review_text" value="<?php echo $row['review_text']; ?>">
<br>
<input type="submit" name="submit" value="Submit" >
</form>
<?php 
if($_POST['submit']){
    
    $username = $_POST['username'];
    $query = mysqli_query($conn,"UPDATE reviews set username='$username' where review_id='$a'");
    if($query){
        echo "Record Modified Successfully <br>";
        echo "<a href='update.php'> Check your updated List </a>";
        // if you want to redirect to update page after updating
        //header("location: update.php");
    }
    else { echo "Record Not modified";}
    }
$conn->close();
?>
</body>
</html>