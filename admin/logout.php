<?php

require '../config/function.php';

if(isset($_SESSION['auth'])){
    logoutSession();
    redirect('../login_page.php', 'Logged Out Successfully');

}

?>