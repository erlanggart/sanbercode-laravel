<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
</head>
<body>
    <h1>Buat Account Baru !</h1>
    <h3>Sign Up Form</h3>
    <form action="welcome">
        <label for="Firstname">First name :</label> <br> <br>
        <input type="text"> <br> <br>
        <label for="Lastname">Last name :</label><br><br>
        <input type="text"> <br><br>
        <label for="Gender">Gender</label> <br> <br>
        <input type="radio" name="gender" value="Male"> Male <br>
        <input type="radio" name="gender" value="Female"> Female <br>
        <input type="radio" name="gender" value="Other"> Other <br> <br>
        <label for="Nasionality">Nasionality :</label> <br> <br>
        <select name="Nasionality" id="">
            <option value="Indonesia">Indonesia</option>
            <option value="Malaysia">Malaysia</option>
            <option value="Singapore">Singapore</option>
            <option value="Japan">Japan</option>
            <option value="Korea">Korea</option>
            <option value="China">China</option>
            <option value="Zimbabwe">Zimbabwe</option>
        </select> <br> <br>
        <label for="language">Language Spoken</label> <br><br>
        <input type="checkbox" name="English" id=""> English <br>
        <input type="checkbox" name="Indonesia" id=""> Indonesia <br>
        <input type="checkbox" name="Japan" id=""> Japan <br>
        <input type="checkbox" name="Korea" id=""> Korea <br>
        <input type="checkbox" name="Mandarin" id=""> Mandarin <br> <br>
        <label for="bio">Bio :</label> <br> <br>
        <textarea name="Bio" id="" cols="30" rows="10"></textarea> <br>
        <input type="submit" value="Sign Up">
    </form>

    
</body>
</html>