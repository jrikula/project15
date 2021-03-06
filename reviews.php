<?php include "header.php" ?>
<?php include "db.php"?>

<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="reviewstyle.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <title>Reviews</title>
  </head>

  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                    Filter by:
                    <select name="filter_movie"> 
                        <option value="" disabled selected>Movie</option>
                        <option value="Movie1"> Movie 1 </option>
                        <option value="Movie2"> Movie 2 </option>
                        <option value="Movie3"> Movie 3 </option>
                        </select>

                    <select name="filter_rating"> 
                        <option value="" disabled selected>Rating</option>
                        <option value="Star1"> 1 Star </option>
                        <option value="Star2"> 2 Stars </option>
                        <option value="Star3"> 3 Stars </option>
                        </select>

                        <select name="filter_date"> 
                            <option value="" disabled selected>Date</option>
                            </select>
                            <input class="form-control" id="myInput" type="text" placeholder="Search..">
                            <?php
                            include 'db.php'; 
                            $sql = "select * from reviews";
                            $result = $conn->query($sql);
                            if($result ->num_rows > 0) {
                            //fetch_assoc(): It fetches result as an associative array.
                            echo "<table class=\"table table-bordered table-striped\">
                            <thead>
                              <tr>
                                <th>Username</th>
                                <th>Rating</th>
                                <th>Review Text</th>
                                <th>Movie</th>
                              </tr>
                            </thead>";
                                while($row = $result ->fetch_assoc()){
                                    echo "<tbody id=\"myTable\"> </td><td>". $row["username"]."</td> <td>". $row["rating"] 
                                    
                                    ."</td><td>". $row["review_text"]. "</td><td>". $row["movie"]
                                    ."</td></tr></tbody>";
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
            </div>

            <div class="col-md-1"></div>

            <div class="col-md-4">


            
                    <h2>Write Review</h2>
                    <form method="post" action="create_review.php">
                    <select name="movie"> 
                    <option value="" disabled selected>Movie</option>
                    <option value="Black Widow"> Black Widow </option>
                    <option value="Blazing Samurai"> Blazing Samurai </option>
                    <option value="The Fast and Furious 9"> The Fast and Furious 9 </option>
                    <option value="Gozilla VS Kong"> Gozilla VS Kong </option>
                    <option value="The Boss Baby: Family Business"> The Boss Baby: Family Business </option>
                    <option value="James Bond: No Time to Die"> James Bond: No Time to Die </option>
                    <option value="Wrong Turn"> Wrong Turn </option>
                    <option value="The Conjuring 3"> The Conjuring 3 </option>
                    <option value="Raya and The Last Dragon"> Raya and The Last Dragon </option>
                    <option value="Candyman"> Candyman </option>
                    <option value="To All the Boys: Always and Forever"> To All the Boys: Always and Forever </option>
                    </select>

                    <select name="rating">
                    <option value="1"> 1 </option> 
                    <option value="2"> 2 </option> 
                    <option value="3"> 3 </option> 
                    <option value="4"> 4 </option>
                    <option value="5"> 5 </option>
                    <option value="6"> 6 </option>
                    <option value="7"> 7 </option>
                    <option value="8"> 8 </option>
                    <option value="9"> 9 </option>
                    <option value="10"> 10 </option>
                    </select>

                        <input type="text" name="review_text" id="review_text" placeholder="Write Review">

                        <input type="text" id="username" name="username" placeholder="Username">
                        <input type="checkbox" id="anonymous" name="anonymous" onclick="anon()">
                        <label for="anonymous" class="anontext">OR stay anonymous</label>

                        <script type="text/javascript">  
                          function anon(){  
                               if(document.getElementById("anonymous").checked == true){  
                                   document.getElementById("username").disabled = true
                               }else{
                                 document.getElementById("username").disabled = false;
                               }}</script> 

                    <button name="submit" class="btn btn-light" input type="submit" value="Save Data"> SUBMIT</button>
                    </form>
    </div>
  </div>
</div>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </body>
</html>

<br>

<?php include "footer.html" ?>