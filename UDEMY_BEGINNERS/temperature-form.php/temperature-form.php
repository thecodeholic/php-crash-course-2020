<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Conversion</title>
</head>

<body>
    <form action="temperature-processor.php" method="post">
        <input type="number" name="temperature">
        C<input type="radio" name="units" value="C">
        F<input type="radio" name="units" value="F">

        <select name="accuracy">
            <option value="0">Whole Number</option>
            <option value="1">1 decimal place</option>
            <option value="2">2 decimal places</option>
            <option value="3">3 decimal places</option>
        </select> 







        <input type="submit" name="submit" value="CONVERT">
    </form>
</body>

</html>