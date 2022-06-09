<!DOCTYPE HTML>
<?php

include("connect.php");

?>
<html>
<meta charset="utf-8"/>

<head>
    <link rel="stylesheet" type="text/css" href="style/style.css" />
</head>
<body>
    <header>GVABook</header>
    <article>
        <button class="menuStyle" type="button" onclick="window.location.href='main.html';">Acceuil</button>
        <button class="menuStyle" type="button" onclick="window.location.href='Catalogue.html';">Catalogue</button>
        <button class="menuStyle" type="button" onclick="window.location.href='Profil.html';">Profil</button>
    </article>
    <div class="SUForm">
        <form method="post" action="index.php" name="SUForm">
            <div class="container">
                <h1>Créé un compte</h1>
                <p>Rempliser ces information pour vous connecter.</p>
                <hr>
                <label for="username"><b>Username</b></label>
                <input type="text" placeholder="Enter username" name="username" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>

                <label>
                    <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                </label>

                <div class="Logbtn" name="Logbutton">
                    <button type="submit" class="signupbtnlogin name="login" formaction="acceuil.php">Login</button>
                </div>

                <?php 
                    if(isset($_POST['login'])) {
                        $sql = mysqli_query($conn,
                        "SELECT * FROM REGISTER WHERE username='"
                        . $_POST["username"] . "' AND
                        password='" . $_POST["psw"]);
   
                        $num = mysqli_num_rows($sql);
   
                        if($num>0) {
                            $row = mysqli_fetch_array($sql);
                            header("location:acceuil.php");
                            exit();
                        }
                    else {}
                ?>
                <hr>
                    <font color="red"><b>
                    <h3>Sorry Invalid Username and Password<br>
                        Please Enter Correct Credentials</br></h3>
                    </b>
                    </font>
                <hr>
            </div>
        </form>
    </div>
</body>

</html>