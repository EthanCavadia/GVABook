<!DOCTYPE HTML>
 
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="style/style.css"/>
    </head>
<body>
    <header>
        GVABook 
    <div class="profil">
        <li class="active", style="float:right;">
          <?php 
        if($_SESSION['logged']==true)
        { 
        echo $_SESSION["username"];
        echo '<a href="logout.php"><span>Logout</span></a></li>';
    }
  elseif($_SESSION['logged']==false)
    {
      echo '<a href="registerform.html"><span>Login/Register</span></a></li>';
    }
  ?>
    </div>
    </header>
    <article>
        <button class="menuStyle" type="button" onclick="window.location.href='main.html';">Acceuil</button>
        <button class="menuStyle" type="button" onclick="window.location.href='Catalogue.html';">Catalogue</button>
        <button class="menuStyle" type="button" onclick="window.location.href='index.php';">Profil</button>
    </article>
    
</body>

    <p> 
        Bienvenue sur le site de GVABook.

    </p>
</html>