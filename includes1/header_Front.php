<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if(isset($pageTitle)){echo $pageTitle; }else{ echo 'ICTRD E Library';}?>  </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
    
    <link rel="stylesheet" href="frontend_2/css/style.css">
    

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="frontend_2/css/bootstrap.min.css">
    <link rel="stylesheet" href="frontend_2/css/owl.carousel.min.css">
    <link rel="stylesheet" href="frontend_2/css/bootstrap-select.css">
    <link rel="stylesheet" href="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1557239464/easyzoom.css" />
    <link rel="stylesheet" href="frontend_2/css/bower_components/font-awesome/css/font-awesome.min.css">

   <link rel="stylesheet" type="text/css" href="frontend_2/css/jquery.atAccordionOrTabs.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" />
    <link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="frontend_2/css/chang-theme-server.css">
    <link rel="stylesheet" type="text/css" href="frontend_2/css/change-theme.css">
    <link rel="stylesheet" type="text/css" href="frontend_2/css/chang-theme.css">
    <link rel="stylesheet" type="text/css" href="frontend_2/css/add_book.css">
    <link rel="stylesheet" type="text/css" href="frontend_2/css/chang-theme-1.css">
    <link rel="stylesheet" type="text/css" href="frontend_2/css/all-style.css">
    <link href="frontend_2/css/responsive.css" rel="stylesheet">

   

    <style>
        /* Add your additional CSS styles for styling here */

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .top_nav {
            background-color: #333;
            color: white;
            padding: 10px;
            display: flex;
           justify-content: center;
           align-items: center;
            text-align: center;
            margin-bottom: 0%;
        
        }
        .nav_content{
            margin-right: 20px;
        }

        nav {
            background-color: white;
            padding: 10px;
        }

        nav a {
            text-decoration: none;
            color:#0f8967 !important;
            font-weight: bold;
            padding: 10px;
            margin: 5px;
        }
        #Nav-bar{
            color:#0f8967 !important;
            font-weight: bold;
            font-family: serif;
        }

        section {
            padding: 20px;
        }

        .form-container {
            max-width: 400px;
            margin: 0 auto;
        }

        form {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        /* Slider Css */

        .homeslider2 {
            height: 130px;
        }
        .p-section1 {
            height: 130px;
        }
        .p-section2 {
            height: 140px;
        }
        .p-section3 {
            height: 140px;
        }
        @media only screen and (max-width: 768px) {
            .p-section1 {
                height: 145px;
            }
            .p-section2 {
                height: 165px;
            }
            .p-section3 {
                height: 120px;
            }
        }
        @media (max-width: 321px) {
            .p-section1 {
                height: 145px;
            }
            .p-section2 {
                height: 165px;
            }
            .p-section3 {
                height: 120px;
            }
        }
        @media (max-width: 480px) {
            .p-section1 {
                height: 120px;
            }
            .p-section2 {
                height: 140px;
            }
            .p-section3 {
                height: 100px;
            }
        }
        @media (max-width:360px) {
            .p-section1 {
                height: 145px;
            }
            .p-section2 {
                height: 165px;
            }
            .p-section3 {
                height: 120px;
            }
        }
        @media (max-width:400px) {
            .p-section1 {
                height: 120px;
            }
            .p-section2 {
                height: 140px;
            }
            .p-section3 {
                height: 120px;
            }
        }
        @media (max-width:375px) {
            .p-section1 {
                height: 190px;
            }
            .p-section2 {
                height: 240px;
            }
            .p-section3 {
                height: 200px;
            }
        }
        @media (min-width: 481px) and (max-width: 767px) {
            .p-section1 {
                height: 100px;
            }
            .p-section2 {
                height: 100px;
            }
            .p-section3 {
                height: 70px;
            }
        }
        @media (min-width: 768px) and (max-width: 1024px) {
            .p-section1 {
                height: 240px;
            }
            .p-section2 {
                height: 245px;
            }
            .p-section3 {
                height: 245px;
            }
        }
        @media (min-width: 1025px) and (max-width: 1280px) {
            .p-section1 {
                height: 145px;
            }
            .p-section2 {
                height: 165px;
            }
            .p-section3 {
                height: 120px;
            }
        }
        .trend-box {
            height: 330px;
        }
        .faq-section .card {
            margin-bottom: 5px;
        }
        div#carousel .owl-nav button.owl-next,
        div#carousel1 .owl-nav button.owl-next,
        div#carousel2 .owl-nav button.owl-next,
        div#carousel3 .owl-nav button.owl-next {
            background-color: #256b5769 !important;
        }
        .owl-nav button span {
            font-size: 40px;
        }
        div#carousel .owl-nav button.owl-prev,
        div#carousel1 .owl-nav button.owl-prev,
        div#carousel2 .owl-nav button.owl-prev,
        div#carousel3 .owl-nav button.owl-prev {
            background-color: #256b5769 !important;
        }
        .upcom-img img {
            height: 200px;
        }
        #headingebel {
            color: #fff;
            font-size: 3rem;
        }
        .ellipsis {
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
        }
        .homeslider {
            height: 190px;
        }
        img.owl-lazy {
            width: auto !important;
        }
        .publ-img img.owl-lazy {
            width: 100% !important;
        }
        .upcom-box {
            background-color: #fff;
            margin-right: 1.6rem;
            margin-bottom: 30px;
            border-radius: 10px;
            transition: all 1s;
            width: 17.6%;
            display: inline-grid;
        }
        @media (max-width: 1350px) {
            .upcom-box {
                width: 42%;
            }
        }
        @media (max-width: 1200px) {
            .upcom-box {
                width: 42%;
            }
        }
        @media (max-width: 1024px) {
            .upcom-box {
                width: 42%;
            }
        }
        @media (max-width: 860px) {
            .upcom-box {
                width: 42%;
            }
        }
    </style>
</head>
<body style="background-image: url('Images/');">


<?php include('includes1/navbar.php');?>