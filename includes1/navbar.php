


<div class="top_nav">

    <?php
    
    if (isset($_SESSION['fname'])) {
        echo "Welcome, " . htmlspecialchars($_SESSION['fname']) . "!";
        echo"&nbsp;";
        echo '<a href="logout.php"><i class="fa fa-power-off" aria-hidden="true"></i>&nbsp; Logout</a>';
    } else {
    ?>
    <div class="nav_content">
        <a href="login.php" class="text-light"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;<span>Login</span></a>
    </div>
    <div class="nav_content">
        <a href="Register.php" class="text-light"><i class="fa fa-key" aria-hidden="true"></i>&nbsp;<span class="text-white">Register</span></a>
    </div>

    <?php
    }
    ?>

</div>
</div>

<nav class="navbar navbar-expand-lg navbar-light " id="Nav-bar" style="background: white">
    <div class="p-0 m-0">
        <a class="navbar-brand" href="Home.php"><img src="Images/ICTRD_logo.png" height="62" data-aos="fade-up-right"></a>

    </div>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="Home.php"target="_self" >HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="AboutUs.php" target="_self">ABOUT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Book.php" target="_self">BOOKS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="ContactUs.php" target="_self">CONTACT US</a>
            </li>
        </ul>
    </div>
    



</nav>