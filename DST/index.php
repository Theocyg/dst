<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css" media="screen" type="text/css" />
    <title>Document</title>
</head>

<body>
    <div id="container">

        <form action="assets/verification.php" method="POST">
            <h1>Connexion</h1>

            <div class="login"><img class="login" src="assets/images/login.png" alt="Login" title="Login"></div>

            <span><b>Login</b></span>
            <input type="text" placeholder="Enter Login" name="username" required>

            <span><b>Password</b></span>
            <input type="password" placeholder="Enter password" name="password" required>

            <input type="submit" class='submit' value='LOGIN'>
            <input type="reset" class="reset" value="Reset">
        </form>
        <?php
        if (isset($_GET['erreur'])) {
            $err = $_GET['erreur'];
            if ($err == 1 || $err == 2)
                echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
        }
        ?>
    </div>

</body>

</html>