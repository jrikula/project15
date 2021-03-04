<?php
include 'db.php'; 
$sql = "select * from reviews";
$result = $conn->query($sql);
if($result ->num_rows > 0) {
//fetch_assoc(): It fetches result as an associative array.
echo "<table border=\"1\"><tr><th>ID</th><th>Usernamee</th><th>Rating</th>
<th>Review Text</th><th>Movie</th> </tr>";
    while($row = $result ->fetch_assoc()){
        echo "<tr><td>" . $row["review_id"] . "</td><td>". $row["username"]."</td> <td>". $row["rating"] 
        
        ."</td><td>". $row["review_text"]. "</td><td>". $row["movie"]
        ."</td></tr>";
    }
    echo "</table>";
}
// You can type different sql queries based on your needs
// The output as of now does not look good. Your task is to format it properly with HTML tables. 
else 
{
    echo "no results";
}

$conn->close();
?>