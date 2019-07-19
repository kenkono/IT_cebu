<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="insertdata.php" method="POST">
    Name:<input type="text" name="name"><br>
    Email:<input type="email" name="email"><br>
    Address in Japan<br>
    <input type="text" name="jpaddress"><br>
    About my self<br>
    <textarea name="aboutmyself" id="" cols="30" rows="10"></textarea><br>
    Gender<br>
    <input type="radio" name="gender" value="male" checked> Male<br>
    <input type="radio" name="gender" value="female"> Female<br>
    <input type="submit" value="Submit">
    </form>
    <a href="index.php">Home</a>

</body>
</html>