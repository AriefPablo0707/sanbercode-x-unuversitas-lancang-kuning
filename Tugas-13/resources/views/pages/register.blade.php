<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>

    <h3>Sign up Form</h3>
    <form action="/welcome" method="POST">
        @csrf
        <label for="">First name:</label> <br>
        <input type="text" name="fname"> <br> <br>
        <label for="">Last name:</label> <br>
        <input type="text" name="name"> <br> <br>
        <label for="">Gender:</label> <br>
        <input type="radio" name="Gender" id="" value="Male">Man <br>
        <input type="radio" name="Gender" id="" value="Female">Woman <br>
        <input type="radio" name="Gender" id="" value="Other">Other <br> <br>
        <label for="">Nationality:</label> <br>
        <select name="Nationality" id="">
            <option value="1">Bahasa Indonesia</option> <br>
            <option value="2">English</option> <br>
            <option value="3">Arabic</option> <br>
            <option value="3">Japanese</option> <br>
        </select> <br> <br>
        <label for="">Language Spoken:</label> <br>
        <input type="checkbox" name="Language Spoken" id="" value="1">Bahasa Indonesia <br>
        <input type="checkbox" name="Language Spoken" id="" value="2">English <br>
        <input type="checkbox" name="Language Spoken" id="" value="2">Arabic <br>
        <input type="checkbox" name="Language Spoken" id="" value="3">Japanese <br> <br>
        <label for="">Bio:</label> <br>
        <textarea name="Bio" id="" cols="30" rows="10"></textarea> <br> <br>
        <button type="submit">Sign up</button>  
    </form>
</body>
</html>