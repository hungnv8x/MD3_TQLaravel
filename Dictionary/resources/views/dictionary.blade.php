<!doctype html>
<html lang="en">
<head>
    <title>Dictionary</title>
</head>
<body>
<form action="/dictionary" method="post">
    @csrf
    <input type="text" name="en" placeholder="Nhap tu can dich" value="<?php echo $en??"" ?>">
    <button>Dich</button>
    <input type="text" name="vn" value="<?php echo $vn??"" ?>">
</form>
</body>
</html>
