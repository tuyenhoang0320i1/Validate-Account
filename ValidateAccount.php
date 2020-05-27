<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $account = $_REQUEST["account"];

    function checkAccount($string)
    {
        $pattern = '/^[_a-z0-9]{6,}$/';
        if (preg_match($pattern, $string))
        {
            echo "This account is valid";
        } else {
            echo "This account is not valid";
        }
    }
    checkAccount($account);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <label>Account: </label>
    <br>
    <input type="text" name="account"/>
    <br>
    <button type="submit">Register</button>
</form>
</body>
</html>
