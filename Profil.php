<!DOCTYPE HTML>

<?php
    include ("connect.php"); 
?>

<meta charset="utf-8"/>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style/style.css" />
</head>
<body>
    <header>
    GVABook
        <div class="profil">
            <
        </div>
    </header>
    <article>
        <button class="menuStyle" type="button" onclick="window.location.href='main.html';">Acceuil</button>
        <button class="menuStyle" type="button" onclick="window.location.href='Catalogue.html';">Catalogue</button>
        <button class="menuStyle" type="button" onclick="window.location.href='Profil.php';">Profil</button>
    </article>
    <div class="SUForm">
        <form method="post" action="index.php" name="SUForm">
            <div class="container">
                <h1>Créé un compte</h1>
                <p>Rempliser ces information pour vous créé un compte.</p>
                <hr>
                <label for="nom"><b>Nom</b></label>
                <input type="text" placeholder="Enter name" name="nom" required>

                <label for="prenom"><b>Prenom</b></label>
                <input type="text" placeholder="Enter surname" name="prenom" required>

                <label for="username"><b>Username</b></label>
                <input type="text" placeholder="Enter username" name="username" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>

                <label for="psw-repeat"><b>Repeat Password</b></label>
                <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

                <label>
                    <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                </label>

                <div class="clearfix" name="clearfix">
                    <button type="submit" class="signupbtn" name="signup" formaction="index.php">Sign Up</button>
                    <button type="button" class="cancelbtn" name="cancelbtn">Cancel</button>
                </div>

                <?php
                    if(isset($_POST['submit'])) {
                    $query = mysqli_query($conn,"INSERT INTO REGISTER SET firstname='".$_POST["firstname"] . "'
                    ,lastname='". $_POST["lastname"] . "'
                    ,username='". $_POST["username"] . "'
                    ,password='". $_POST["password"] . "'  ");
                    
                ?>
                <script>
                    alert('You Registered Successfully, Login now');
                </script>
                <?php
                    }
                ?>
            </div>
        </form>
    </div>
</body>

</html>