<?php
session_start();
//$_SESSION['message'] = "";
?>

<!DOCTYPE html>
    <head>
<html>
        <meta charset="UTF-8">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
            <link rel="stylesheet" href="assets/css/main.css">
    </head>

<body>

<div class="container">
<form action="auth.php" method="post">
 <div class="input-field"> <input placeholder="Login"  type="text" name="login" > </div>
 <div class="input-field"> <input placeholder="Password"  type="password" name="password"> </div> 
 <input type="submit" class="btn" value="Send">
 <input type="reset" class="btn" value="Clear">
    <p class="register">
        У вас нет аккаута? - <a href="/practice10/registration.php">Зарегистрируйтесь</a> 
    </p>
   
</form>
</div>

<?php 
       /* if ($_SESSION['message'] != "") {
            echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
        }*
        unset($_SESSION['message']);*/

        if (isset($_GET["submit"])) {
            echo 'adfa';
            header('Location: auth.php');
            exit;
        }
    ?>

</body>
</html>
