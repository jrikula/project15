<?php
include 'db.php'; 
$sql = "select * from reviews";
$result = $conn->query($sql);
if($result ->num_rows > 0) {
//fetch_assoc(): It fetches result as an associative array.
    while($row = $result ->fetch_assoc()){
        echo "review_id:" . $row["review_id"] . "Username:". $row["username"]."Rating:". $row["rating"] 
        
        ."Review text:". $row["review_text"]. "movie:". $row["movie"]
        ."<br>";
    }
}
// You can type different sql queries based on your needs
// The output as of now does not look good. Your task is to format it properly with HTML tables. 
else 
{
    echo "no results";
}
 
$conn->close();
?>

