<!DOCTYPE HTML> 

<?php
include("connect.php");
?>

<?php

if(isset($_POST['login'])) {
    $sql = mysqli_query($conn, "SELECT * FROM REGISTER WHERE username ='". $_POST["username"]. "' AND 
                                password='" . $_POST["password"] . "' ");
        $num=mysqli_num_rows($sql);
        if($num != 2){
        $row = mysqli_fetch_array($sql);
        header("location:acceuil.php");
        exit();
        }
}

?>

<meta charset="utf-8"/>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body>
    <header>GVABook</header>
    <article>
        <button class="menuStyle" type="button" onclick="window.location.href='acceuil.php';">Acceuil</button>
        <button class="menuStyle" type="button" onclick="window.location.href='Catalogue.html';">Catalogue</button>
        <button class="menuStyle" type="button" onclick="window.location.href='Profil.php';">Profil</button>
    </article>
    <div class="SUForm">
        <form method="post" action="index.php">
                <h1>Connecter vous</h1>
                <p>Rempliser ces information pour vous connecter.</p>
                <hr>
                <label for="username"><b>Username</b></label>
                <input type="text" placeholder="Enter username" name="username" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>
                
                <button type="submit" name="login" value="Login" formaction="acceuil.php"> Login</button>
        </form>
    </div>
</body>

</html>