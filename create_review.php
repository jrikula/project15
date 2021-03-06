<?php include 'db.php' ;
$username= $_POST['username'];
$rating= $_POST['rating'];
$review_text= $_POST['review_text'];
$movie= $_POST['movie'];

if (empty ($rating)) {
    echo" ERROR: RATING IS REQUIRED!";
}

if (empty ($movie)) {
    echo" ERROR: MOVIE IS REQUIRED!";
}

else {
    $sql="insert into reviews (username, rating, review_text, movie)
    values('$username', '$rating', '$review_text', '$movie')";

    if($conn->query($sql) === TRUE) {
        echo "New review added";
        echo "<a href='reviews.php' class='top'>Return </a>";
    }
    else
    {
        echo "ERROR: " .$sql. "<br>" . $conn->error;
    }
    $conn->close();
}    
?>