<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Form</title> 
</head>

<body>
    <form action="html-form-processor.php" method="post">
        <input type="text" name="surname" placeholder="Surname...">
        Male<input type="radio" name="gender" value="Male">
        Female<input type="radio" name="gender" value="Female">
        <input type="submit" name="submit">
    </form>
</body>

</html>