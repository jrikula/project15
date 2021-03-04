<link rel="stylesheet" href="form.css">
<form name= "form1" method="post" action="create_review.php">
    Userame: <input type="text" name="username"><br>
    Rating: 
    <select name="rating">
    <option value="1"> 1 </option> 
    <option value="2"> 2 </option> 
    <option value="3"> 3 </option> 
    <option value="4"> 4 </option>
    <option value="5"> 5 </option>
    </select>
    <br>
    Review text: <input type="text" name="review_text"><br>
    Movie:
    <select name="movie"> 
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
    <br>
<input type="submit" value="Save Data">
</form>

