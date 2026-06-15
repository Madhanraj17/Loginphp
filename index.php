<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
</head>
<body>

<h2>Student Registration Form</h2>

<form action="insert.php" method="POST">

    Name:
    <input type="text" name="user_name"><br><br>

    Last Name:
    <input type="text" name="last_name"><br><br>

    Email:
    <input type="email" name="Email"><br><br>

    Gender:
    <select name="gender">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
    </select><br><br>

    Age:
    <input type="number" name="age"><br><br>

    <input type="submit" value="Save">

</form>

</body>
</html>