<?php

session_start();

if($_GET[logout]==1) {
    $_SESSION[authorize]=false;
    header('Location: https://imemo.ru/energyeconomics/admin/index.php');
    exit;
}

if($_SESSION[authorize]) {
    header('Location: https://imemo.ru/energyeconomics/admin/admin.php');
    exit;
}

if($_POST[login]=="admin" && $_POST[password]=="f41UfH9!#DFh24fh") {
    $_SESSION[authorize]=true;
}
else
{
    $_SESSION[authorize]=false;
}

if($_SESSION[authorize]) {
    header('Location: https://imemo.ru/energyeconomics/admin/admin.php');
    exit;
}

if($_SESSION[authorize])
echo "Succesfull";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Панель администратора ЦЭИ</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="container">

    <form class="form-signin" method="post">
        <h2 class="form-signin-heading">Выполните вход</h2>
        <label for="inputEmail" class="sr-only">Логин</label>
        <input type="text" name="login" class="form-control" placeholder="Логин" required autofocus>
        <label for="inputPassword" class="sr-only">Пароль</label>
        <input type="password" name="password" class="form-control" placeholder="Пароль" required>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Запомнить
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Войти</button>
    </form>

</div> <!-- /container -->


<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>