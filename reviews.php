<?php include "header.php" ?>
<?php include "database.php"?>

<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="reviewstyle.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">


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

                            <?php echo $_POST["reviewtext"]; ?>
            </div>

            <div class="col-md-1"></div>

            <div class="col-md-4">
                    <h2>Write Review</h2>

                    <form>

                    <select name="movies"> 
                    <option value="" disabled selected>Movie</option>
                    <option value="Movie1"> Movie 1 </option>
                    <option value="Movie2"> Movie 2 </option>
                    <option value="Movie3"> Movie 3 </option>

                    </select>

                        <input type="radio" id="1star" name="stars" value="1star">
                        <label for="1star">1 Star</label>

                        <input type="radio" id="2star" name="stars" value="2star">
                        <label for="2star">2 Stars</label>

                        <input type="radio" id="3star" name="stars" value="3star">
                        <label for="3star">3 Stars</label>

                        <input type="radio" id="4star" name="stars" value="4star">
                        <label for="4star">4 Stars</label>

                        <input type="radio" id="5star" name="stars" value="5star">
                        <label for="5star">5 Stars</label>

                        <input type="text" name="reviewtext" id="reviewtext"
                        method="post" action="review.php"
                        placeholder="Write Review">

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

                    <button name="submit" class="btn btn-light" input type="submit"> SUBMIT</button>
                    </form>
    </div>
  </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </body>
</html>

<br>

<?php include "footer.html" ?>