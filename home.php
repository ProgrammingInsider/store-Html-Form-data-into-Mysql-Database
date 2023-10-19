<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Personal Information</title>
</head>
<body>
    
<form action="store_data.php" method="POST" id="form">

<label for="firstname">
    First Name: <input type="text" name="firstname" id="firstname" required>
</label>

<label for="lastname">
    Last Name: <input type="text" name="lastname" id="lastname" required>
</label>

<label for="age">
    Age: <input type="text" name="age" id="age" required>
</label>

<label for="phonenumber">
    Phone Number: <input type="text" name="phonenumber" id="phonenumber" required>
</label>


<input type="submit" value="Submit">




</form>








</body>
</html>