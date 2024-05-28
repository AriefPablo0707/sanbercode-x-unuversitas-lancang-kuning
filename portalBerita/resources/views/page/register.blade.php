<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Halaman Register</h1>

    <form action="/home" method="POST">
        @csrf
        <label >First Name</label>:<br>
        <input type="text" name ="fname" > <br> <br>
        <label>Last Name</label>:<br>
        <input type="text" name="lname"><br> <br>
        <label>Gender </label>:<br>
        <input type="radio">Male<br>
        <input type="radio">Female<br>
        <input type="radio">Other<br><br>
        <label>Nationality</label>:<br><br>
    <select name="country">
        <option value="Indonesia">indonesia</option>
        <option value="Malaysia">Malaysia</option>
        <option value="America">America</option>
    </select> <br> <br>
    <label:>Language Spoken :</label:><br><br>
    <input type="checkbox"name="Skill">Bahasa Indonesia<br>
    <input type="checkbox"name="Skill">English<br>
    <input type="checkbox"name="Skill">Arabic<br>
    <input type="checkbox"name="Skill">japanese<br><br>
    <label for="bio">Bio:</label><br>
    <textarea name="message" rows="10" cols="30" cols="30"></textarea><br>



        <input type="submit" value="kirim" >
</form>


</body>
</html>