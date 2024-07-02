<?php
 require 'config/function_user.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Title -->
    <title>Books</title>
    <meta name="keywords" content="social science ebooks, social science ebooks online, social science ebooks for higher education classes" />
    
    <link rel="canonical" href="books/higher-education/social-science" />
    <link rel="stylesheet" href="frontend_2/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="frontend_2/css/bootstrap.min.css">
    <link rel="stylesheet" href="frontend_2/css/owl.carousel.min.css">
    <link rel="stylesheet" href="frontend_2/css/bootstrap-select.css">
    <link rel="stylesheet" href="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1557239464/easyzoom.css" />
    <link rel="stylesheet" href="admin/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="icon" href="logo/favicon.ico" type="image/gif" sizes="16x16">
    <link href="https://fonts.googleapis.com/css2?family=Love+Ya+Like+A+Sister&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kurale&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="frontend_2/css/jquery.atAccordionOrTabs.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" />
    <link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
    <!--<link href="https://cdn.jsdelivr.net/sweetalert2/4.2.4/sweetalert2.min.css" rel="stylesheet"/>-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <script type="text/javascript" src="admin/transliteration.I.js">
    </script>
    <!--<script id="bolt" src="https://sboxcheckout-static.citruspay.com/bolt/run/bolt.min.js" bolt-color="e34524" bolt-logo="http://boltiswatching.com/wp-content/uploads/2015/09/Bolt-Logo-e14421724859591.png"></script>-->
    <script id="bolt" src="https://checkout-static.citruspay.com/bolt/run/bolt.min.js" bolt-color="e34524" bolt-logo="http://boltiswatching.com/wp-content/uploads/2015/09/Bolt-Logo-e14421724859591.png"></script>
    <style>
          .top_nav {
            background-color: #333;
            color: white;
            padding: 10px;
            display: flex;
            justify-content: right;
            align-items: center;
            text-align: center;
            margin-bottom: 0%;

        }

        .nav_content {
            margin-right: 20px;
        }

        nav {
            background-color: white;
            padding: 10px;
        }

        a {
            color: unset;
        }
        div#countryList {
            max-height: 320px;
            overflow-y: auto;
            font-size: 14px;
        }
        #myModal .modal-header .close {
            color: #000;
            padding: 0px;
            margin: 0px;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="https://www.ebookselibrary.com/frontend_2/css/chang-theme-server.css">
    <link rel="stylesheet" type="text/css" href="https://www.ebookselibrary.com/frontend_2/css/change-theme.css">
    <link rel="stylesheet" type="text/css" href="https://www.ebookselibrary.com/frontend_2/css/chang-theme.css">
    <link rel="stylesheet" type="text/css" href="https://www.ebookselibrary.com/frontend_2/css/add_book.css">
    <link rel="stylesheet" type="text/css" href="https://www.ebookselibrary.com/frontend_2/css/chang-theme-1.css">
    <link rel="stylesheet" type="text/css" href="https://www.ebookselibrary.com/frontend_2/css/all-style.css">
    <!--<link rel="stylesheet" type="text/css" href="chang-theme-server.css">-->
    <!--       <link rel="stylesheet" type="text/css" href="chang-theme.css">-->
    <!--       <link rel="stylesheet" type="text/css" href="add_book.css">-->
    <!--       <link rel="stylesheet" type="text/css" href="chang-theme-1.css">-->
    <link href="https://www.ebookselibrary.com/frontend_2/css/responsive.css" rel="stylesheet">
    <style>
    </style>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>-->
    <!--<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>-->
    <style>
    </style>
    <style>
        .swal2-title {
            font-family: 'Roboto', sans-serif !important;
        }
    </style>
    
    <script>
        function toggleSubcategories(categoryId) {
            var subcategoryList = document.getElementById("subcategory-list-" + categoryId);
            subcategoryList.style.display = (subcategoryList.style.display === "none") ? "block" : "none";
        }

        function fetchEbooks(categoryId, subcategoryId = null) {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("ebooks-container").innerHTML = this.responseText;
                }
            };
            var url = "fetch_ebooks.php?category_id=" + categoryId;
            if (subcategoryId !== null) {
                url += "&subcategory_id=" + subcategoryId;
            }
            xhttp.open("GET", url, true);
            xhttp.send();
        }
    </script>


    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "Ebooks Elibrary",
            "alternateName": "EbooksElibrary",
            "url": "https://www.ebookselibrary.com/",
            "logo": "https://www.ebookselibrary.com/frontend_2/img/logo_light.png",
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "9528447153",
                "contactType": "customer service",
                "contactOption": "HearingImpairedSupported",
                "areaServed": "IN",
                "availableLanguage": "en"
            },
            "sameAs": [
                "https://www.facebook.com/EbooksandElibrary",
                "https://www.linkedin.com/company/ebookselibrary/",
                "https://in.pinterest.com/ebookselibrary/"
            ]
        }
    </script>
    <script type="text/javascript">
        // function preventBack() { 
        //     window.history.forward();  
        // } 
        // setTimeout("preventBack()", 0); 
        // window.onunload = function () { null };
    </script>
    



    <style type="text/css">
        @font-face {
            /* Font Name to use*/
            font-family: 'HindiFont';
            /* Font path*/
            src: url('/../../fonts/Kruti-De--010-Regular.ttf');
        }
        .hindiFont {
            /* Assign the font*/
            font-family: 'HindiFont';
        }
    </style>
    <style>
        img.institute_buy {
            width: 100px;
            margin-left: 5px;
        }
    </style>
    <style>
        .heartbeat {
            -webkit-animation: heartbeat 1.5s ease-in-out infinite both;
            animation: heartbeat 1.5s ease-in-out infinite both;
        }
        /**
 * ----------------------------------------
 * animation heartbeat
 * ----------------------------------------
 */
        @-webkit-keyframes heartbeat {
            from {
                -webkit-transform: scale(1);
                transform: scale(1);
                -webkit-transform-origin: center center;
                transform-origin: center center;
                -webkit-animation-timing-function: ease-out;
                animation-timing-function: ease-out;
            }
            10% {
                -webkit-transform: scale(0.91);
                transform: scale(0.91);
                -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in;
            }
            17% {
                -webkit-transform: scale(0.98);
                transform: scale(0.98);
                -webkit-animation-timing-function: ease-out;
                animation-timing-function: ease-out;
            }
            33% {
                -webkit-transform: scale(0.87);
                transform: scale(0.87);
                -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in;
            }
            45% {
                -webkit-transform: scale(1);
                transform: scale(1);
                -webkit-animation-timing-function: ease-out;
                animation-timing-function: ease-out;
            }
        }
        @keyframes heartbeat {
            from {
                -webkit-transform: scale(1);
                transform: scale(1);
                -webkit-transform-origin: center center;
                transform-origin: center center;
                -webkit-animation-timing-function: ease-out;
                animation-timing-function: ease-out;
            }
            10% {
                -webkit-transform: scale(0.91);
                transform: scale(0.91);
                -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in;
            }
            17% {
                -webkit-transform: scale(0.98);
                transform: scale(0.98);
                -webkit-animation-timing-function: ease-out;
                animation-timing-function: ease-out;
            }
            33% {
                -webkit-transform: scale(0.87);
                transform: scale(0.87);
                -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in;
            }
            45% {
                -webkit-transform: scale(1);
                transform: scale(1);
                -webkit-animation-timing-function: ease-out;
                animation-timing-function: ease-out;
            }
        }
    </style>
    <style>
        div#countryList {
            position: absolute;
            top: 100%;
            width: 93%;
        }
        ul.list-unstyled {
            margin: 0;
        }
        li.storeClass {
            padding: 3px;
            border-bottom: 1px solid #eee;
        }
        .storeClass img {
            margin-right: 10px;
        }
    </style>
    <!--          <script src="https://hinkhoj.com/common/js/keyboard.js"></script>-->
    <!--<link rel="stylesheet" type="text/css" href="https://hinkhoj.com/common/css/keyboard.css" />-->
    <style>
        .login-title {
            text-align: center;
        }
        #login-page {
            display: flex;
        }
        .notice {
            font-size: 13px;
            text-align: center;
            color: #666;
        }
        .login {
            width: 100%;
            background: #FFF;
            padding: 16px;
        }
        .login a {
            margin-top: 25px;
            text-align: center;
        }
        .form-login {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            align-content: center;
        }
        .form-login label {
            text-align: left;
            font-size: 13px;
            margin-top: 10px;
            margin-left: 20px;
            display: block;
            color: #666;
        }
        .input-email,
        .input-password,
        .extra-field {
            width: 100%;
            background: #ededed;
            border-radius: 6px;
            margin: 4px 0 10px 0;
            padding: 4px;
            display: flex;
        }
        .icon {
            padding: 14px;
            color: #666;
            min-width: 30px;
            text-align: center;
        }
        .form-login input,
        textarea {
            width: 100%;
            border: 0;
            background: none;
            font-size: 16px;
            padding: 4px 0;
            outline: none;
        }
        .form-login button[type="submit"],
        .btnMobile {
            width: 100%;
            border: 0;
            border-radius: 6px;
            padding: 8px;
            background: #00d789;
            color: #FFF;
            display: inline-block;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            margin-top: 0px;
            transition: ease all 0.3s;
        }
        .form-login button[type="submit"]:hover {
            opacity: 0.9;
        }
        .background {
            width: 70%;
            padding: 40px;
            height: 100vh;
            background: linear-gradient(60deg, rgba(158, 189, 19, 0.5), rgba(0, 133, 82, 0.7)), url('https://cdn.pixabay.com/photo/2016/03/09/09/22/workplace-1245776_960_720.jpg') center no-repeat;
            background-size: cover;
            display: flex;
            flex-wrap: wrap;
            align-items: flex-end;
            justify-content: flex-end;
            align-content: center;
            flex-direction: row;
        }
        .background h1 {
            max-width: 420px;
            color: #FFF;
            text-align: right;
            padding: 0;
            margin: 0;
        }
        .background p {
            max-width: 650px;
            color: #1a1a1a;
            font-size: 15px;
            text-align: right;
            padding: 0;
            margin: 15px 0 0 0;
        }
        .created {
            margin-top: 40px;
            text-align: center;
        }
        .created p {
            font-size: 13px;
            font-weight: bold;
            color: #008552;
        }
        .created a {
            color: #666;
            font-weight: normal;
            text-decoration: none;
            margin-top: 0;
        }
        .checkbox label {
            display: inline;
            margin: 0;
        }
        #myModal .modal-header {
            background-color: #fff;
            margin-bottom: -23px;
        }
        #myModal .modal-title {
            color: #666;
            font-family: 'Roboto';
            text-align: center;
            padding-top: 19px;
        }
        .img-responsive {
            position: absolute;
            padding-left: 181px;
            margin-top: -34px;
        }
        #myModal .modal-footer {
            border-top: 0px;
            justify-content: center;
            margin-top: -35px;
        }
        #myModal p {
            color: #666;
        }
        #myModal .modal-footer>* {
            margin: 1px;
        }
        #SuccessModal .modal-footer {
            border-top: 0px;
            justify-content: center;
            margin-top: -35px;
        }
        #SuccessModal p {
            color: #666;
        }
        .custom-model-main {
            text-align: center;
            overflow: hidden;
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            /* z-index: 1050; */
            -webkit-overflow-scrolling: touch;
            outline: 0;
            opacity: 0;
            -webkit-transition: opacity 0.15s linear, z-index 0.15;
            -o-transition: opacity 0.15s linear, z-index 0.15;
            transition: opacity 0.15s linear, z-index 0.15;
            z-index: -1;
            overflow-x: hidden;
            overflow-y: auto;
        }
        .model-open {
            z-index: 99999;
            opacity: 1;
            overflow: hidden;
            height: 80px;
        }
        .custom-model-inner {
            -webkit-transform: translate(0, -25%);
            -ms-transform: translate(0, -25%);
            transform: translate(0, -25%);
            -webkit-transition: -webkit-transform 0.3s ease-out;
            -o-transition: -o-transform 0.3s ease-out;
            transition: -webkit-transform 0.3s ease-out;
            -o-transition: transform 0.3s ease-out;
            transition: transform 0.3s ease-out;
            transition: transform 0.3s ease-out, -webkit-transform 0.3s ease-out;
            display: inline-block;
            vertical-align: middle;
            width: 600px;
            margin: 0px auto;
            max-width: 97%;
        }
        .custom-model-wrap {
            display: block;
            width: 100%;
            position: relative;
            /*background-color: #fff;*/
            background: rgb(255, 255, 255);
            background: linear-gradient(90deg, rgba(255, 255, 255, 1) 0%, rgba(243, 253, 72, 1) 35%, rgba(187, 247, 167, 1) 100%);
            border: 1px solid #999;
            border: 1px solid rgba(0, 0, 0, 0.2);
            border-radius: 6px;
            -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
            box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
            background-clip: padding-box;
            outline: 0;
            text-align: left;
            padding: 10px;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            max-height: calc(100vh - 70px);
            overflow-y: auto;
        }
        .model-open .custom-model-inner {
            -webkit-transform: translate(0, 0);
            -ms-transform: translate(0, 0);
            transform: translate(0, 0);
            position: relative;
            z-index: 999;
        }
        /*.model-open .bg-overlay {*/
        /*  background: rgba(0, 0, 0, 0.6);*/
        /*  z-index: 99;*/
        /*}*/
        /*.bg-overlay {*/
        /*  background: rgba(0, 0, 0, 0);*/
        /*  height: 100vh;*/
        /*  width: 100%;*/
        /*  position: fixed;*/
        /*  left: 0;*/
        /*  top: 0;*/
        /*  right: 0;*/
        /*  bottom: 0;*/
        /*  z-index: 0;*/
        /*  -webkit-transition: background 0.15s linear;*/
        /*  -o-transition: background 0.15s linear;*/
        /*  transition: background 0.15s linear;*/
        /*}*/
        .close-btn {
            position: absolute;
            right: 0;
            top: 0;
            cursor: pointer;
            z-index: 99;
            font-size: 30px;
            color: #000;
        }
        @media screen and (min-width: 800px) {
            .custom-model-main:before {
                content: "";
                display: inline-block;
                height: auto;
                vertical-align: middle;
                margin-right: -0px;
                height: 100%;
            }
        }
    </style>
   
</head>
<body>
<div class="top_nav">
    <div class="nav_content" >
        <a href="#" class="text-light"><i class="fa fa-user"
                      aria-hidden="true"></i>&nbsp;<span><?php 
echo $_SESSION['fname'];
echo $_SESSION['lname'];
?> </span></a>
      </div>
      
      <div class="nav_content">
        <a href="logout.php" class="text-light"><i class="fa fa-sign-out"
                  aria-hidden="true"></i>&nbsp;<span class="text-white">Logout</span></a>
      </div> 
      <div class="nav_content">
        <a href="change_password.php" class="text-light"><i class="fa fa-sign-out"
                  aria-hidden="true"></i>&nbsp;<span class="text-white">Change Password</span></a>
      </div>

      
        </div>
    </div>

    </div>
<div class="fixed-top">
       <div style="background-color:white;">
       <?php
                    include('includes1/login_header.php');
                    ?>
       </div>    
                   
               
        <nav class="navbar navbar-expand-lg navbar-dark green-bg pt-1 pb-1">
            <div class="container-fluid">
                <div class="col-lg-12">
                    <div class="row bg-color">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mx-auto">
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase  font-weight-bold dropdown-toggle" href="/books/higher-education" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Business
        </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <div class="container">
                                            <div class="row">
                                                <div class=" col-xl-4 col-lg-4 col-md-6 col-12  border-section">
                                                    <!--<span class="text-uppercase text-dark font-weight-bold">Category 2</span>-->
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" href="Book.php">Journal Proper</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link active" href="book.php">Accounting</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link active" href="book.php">Cash Book</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link active" href="book.php">Sales</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link active" href="book.php">Sales Return</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link active" href="book.php">Bills</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link active" href="book.php">Law</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link active" href="book.php">Account</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class=" col-xl-4 col-lg-4 col-md-6 col-12  border-section">
                                                    <a href="">
                  <img src="  ./Images/education.png              " alt="" class="img-fluid">
                </a>
                                                    <p class="text-white">Short image call to action</p>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <!--  /.container  -->
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase  font-weight-bold dropdown-toggle" href="/books/professional-courses" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Hacking
        </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <div class="container">
                                            <div class="row">
                                                <div class=" col-xl-4 col-lg-4 col-md-6 col-12  border-section">
                                                    <!--<span class="text-uppercase text-dark font-weight-bold">Category 2</span>-->
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" href="book.php">Black Hat Hackers</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link active" href="book.php">Computer Hacking</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link active" href="book.php">DDoS attacks</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link active" href="book.php">Green Hat Hackers</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class=" col-xl-4 col-lg-4 col-md-6 col-12  border-section">
                                                    <a href="">
                  <img src="  ./Images/math.png              " alt="" class="img-fluid">
                </a>
                                                    <p class="text-white">Short image call to action</p>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <!--  /.container  -->
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase  font-weight-bold dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Trading
        </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <div class="container">
                                            <div class="row">
                                                <div class=" col-xl-4 col-lg-4 col-md-6 col-12  border-section">
                                                    <!--<span class="text-uppercase text-dark font-weight-bold">Category 2</span>-->
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" href="book.php">Scalping</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link active" href="book.php">Equities</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link active" href="book.php">Fixed income</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link active" href="book.php">Swing Trading</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link active" href="book.php">Market order</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link active" href="book.php">Technical Analysis</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link active" href="book.php">Fundamental Trading</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- /.col-md-4  -->
                                                
                                                <div class=" col-xl-4 col-lg-4 col-md-6 col-12  border-section">
                                                    <a href="">
                  <img src="  ./Images/competitive.png              " alt="" class="img-fluid">
                </a>
                                                    <p class="text-white">Short image call to action</p>
                                                </div>
                                               
                                                <!-- /.col-md-4  -->
                                            </div>
                                        </div>
                                        <!--  /.container  -->
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase  font-weight-bold dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Technology
        </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <div class="container">
                                            <div class="row">
                                                <div class=" col-xl-4 col-lg-4 col-md-6 col-12  border-section">
                                                    <!--<span class="text-uppercase text-dark font-weight-bold">Category 2</span>-->
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" href="book.php">Compurt Science</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link active" href="book.php">Data Stucture</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link active" href="book.php">AI</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link active" href="book.php">Computer Vision</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link active" href="book.php">Machine Learning</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link active" href="book.php">Coding Theory</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                
                                                <!-- /.col-md-4  -->
                                                <div class=" col-xl-4 col-lg-4 col-md-6 col-12  border-section">
                                                    <!--<span class="text-uppercase text-dark font-weight-bold">Category 2</span>-->
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" href="book.php">Data Communication</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link active" href="book.php">Networking</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link active" href="book.php"> Development</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link active" href="book.php">Career Development</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link active" href="book.php">Magazines</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link active" href="book.php">Crypto</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link active" href="book.php">Others</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class=" col-xl-4 col-lg-4 col-md-6 col-12  border-section">
                                                    <a href="">
                  <img src="  ./Images/book.png              " alt="" class="img-fluid">
                </a>
                                                    <p class="text-white">Short image call to action</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  /.container  -->
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase  font-weight-bold dropdown-toggle" href="/books/journals" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          History
        </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <div class="container">
                                            <div class="row">
                                                <div class=" col-xl-4 col-lg-4 col-md-6 col-12  border-section">
                                                    <!--<span class="text-uppercase text-dark font-weight-bold">Category 2</span>-->
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" href="book.php">Modern</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link active" href="book.php">Ancient History</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link active" href="book.php">Civilization</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- /.col-md-4  -->
                                                <div class=" col-xl-4 col-lg-4 col-md-6 col-12  border-section">
                                                    <!--<span class="text-uppercase text-dark font-weight-bold">Category 2</span>-->
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" href="book.php">Cultural History</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link active" href="book.php">Social History</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link active" href="book.php">Economics History</a>
                                                        </li>
                                                        
                                                    </ul>
                                                </div>
                                                <!-- /.col-md-4  -->
                                                <div class=" col-xl-4 col-lg-4 col-md-6 col-12  border-section">
                                                    <a href="">
                  <img src="  ./Images/education.png              " alt="" class="img-fluid">
                </a>
                                                    <p class="text-white">Short image call to action</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  /.container  -->
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase  font-weight-bold dropdown-toggle" href="/books/school" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Science
        </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <div class="container">
                                            <div class="row">
                                                <div class=" col-xl-4 col-lg-4 col-md-6 col-12  border-section">
                                                    <!--<span class="text-uppercase text-dark font-weight-bold">Category 2</span>-->
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" href="book.php">Biochemestry</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link active" href="book.php">Biology</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link active" href="book.php">Chemistry</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link active" href="book.php">Physics</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link active" href="book.php">Biophysics</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link active" href="book.php">Botany</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link active" href="book.php">Phisiology</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                               
                                                <div class=" col-xl-4 col-lg-4 col-md-6 col-12  border-section">
                                                    <a href="">
                  <img src="  ./Images/science.jpg              " alt="" class="img-fluid">
                </a>
                                                    <p class="text-white">Short image call to action</p>
                                                </div>
                                                <!-- /.col-md-4  -->
                                            </div>
                                        </div>
                                        <!--  /.container  -->
                                    </div>
                                </li>
                               
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>