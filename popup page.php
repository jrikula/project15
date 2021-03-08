<?php include "header.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="popup page.css">
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">

    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="ptitle">
         <H1>WELCOME TO MOVIEHUT BOOKING</H1>
        </div>
    
        <form action="" method="GET">
            Your E-mail: <br>
            <input type="text" placeholder="E-mail"><br><br>
            PhoneNumber:<br>
            <input type="text" placeholder="Telephone"><br><br>
            Select MOVIE:<br>
            <select name="movie">
                <option value="movie"> Movie</option>
                <option value="Black Widow">Black Widow</option>
                <option value="Boss baby">Boss baby</option>
                <option value="Black samurai"> Black samurai</option>
                <option value="Candyman">Candyman</option>
                <option value="Ghostbusters">Ghostbusters</option>
                <option value="June">Fast 9 </option>
                <option value="July">godzilla</option>
                <option value="August">no time to die</option>
                <option value="September">wrongturn</option>
                <option value="October">conjuring</option>
                <option value="November">rava</option>
                <option value="December">To all the boys</option>
            </select><br><br>

            Select Date:<br>
            <select name="month">
                <option value="Month"> Month</option>
                <option value="January"> January</option>
                <option value="February"> February</option>
                <option value="March"> March</option>
                <option value="April">April</option>
                <option value="May">May</option>
                <option value="June">June</option>
                <option value="July">July</option>
                <option value="August">August</option>
                <option value="September">September</option>
                <option value="October">October</option>
                <option value="November">November</option>
                <option value="December">December</option>
            </select>
            <select name="Day">
                <option value="Day">Day</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
            </select>
            <select name="Year">
                <option value="Year">Year</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
            </select><br><br>
            <input type="submit" value="Book">
        </form><br><br>
    </div>
</body>
</html>
<?php include "footer.html" ?>