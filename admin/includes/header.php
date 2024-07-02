<?php
  require '../config/function.php';

  include ('./authentication.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="">
  <link rel="icon" type="image/png" href="">
  <title>
    ICTRD E Library Admin Panel
  </title>
  <link rel="shortcut icon" href="#">

  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="assets/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.css" 
integrity="sha512-0nkKORjFgcyxv3HbE4rzFUlENUMNqic/EzDIeYCgsKa/nwqr2B91Vu/tNAu4Q0cBuG4Xe/D1f/freEci/7GDRA==" 
crossorigin="anonymous" referrerpolicy="no-referrer" />

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">


<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" />


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



<!-- Ensure jQuery is loaded first -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Select2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <!-- Select2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
$(document).ready(function(){
    $('#category').change(function(){
        var category_id = $(this).val();
        $.ajax({
            url: 'code.php',
            type: 'post',
            data: {category_id: category_id},
            dataType: 'json',
            success:function(response){
                var len = response.length;
                $("#subcategory").empty();
                for( var i = 0; i<len; i++){
                    var id = response[i]['id'];
                    var subcatname = response[i]['subcatname'];
                    $("#subcategory").append("<option value='"+id+"'>"+subcatname+"</option>");
                }
            }
        });
    });
});
</script>
<script>
$(document).ready(function(){
    $('#category').change(function(){
        var category_id = $(this).val();
        $.ajax({
            url: 'code.php',
            type: 'post',
            data: {category_id: category_id},
            dataType: 'json',
            success:function(response){
                var len = response.length;
                $("#subcategoryTable").empty();
                var table = "<table class='table table-bordered table-striped' ><tr><th>Id</th><th>Subcategory Name</th><th>Action</th></tr>";
                for( var i = 0; i<len; i++){
                    var id = response[i]['id'];
                    var subcatname = response[i]['subcatname'];
                    // Adding edit and delete buttons in the third column
                    table += "<tr><td>"+id+"</td><td>"+subcatname+"</td><td><a href='subcategory-edit.php?id="+id+"' class='btn btn-success btn-sm'>Edit</a><a href='subcategory-delete.php?id="+id+"' class='btn btn-danger btn-sm mx-2' onclick=\"return confirm('Are you sure you want to delete this data')\">Delete</a></td></tr>";
                }
                table += "</tbody></table>";
                $("#subcategoryTable").append(table);
            }
        });
    });
});
</script>
<style>
        .select-container {
            position: relative;
            display: inline-block;
            width: 100%;
        }
        .selected-items {
            display: flex;
            flex-wrap: wrap;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            min-height: 38px;
            cursor: text;
        }
        .selected-item {
            background-color: #f1f1f1;
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 5px;
            margin: 2px;
            display: flex;
            align-items: center;
        }
        .selected-item span {
            margin-left: 5px;
            cursor: pointer;
        }
        .selected-item span:hover {
            color: red;
        }
        .dropdown {
            display: none;
            position: absolute;
            background-color: white;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
            width: 100%;
        }
        .dropdown div {
            padding: 8px;
            cursor: pointer;
        }
        .dropdown div:hover {
            background-color: #ddd;
        }
        .input-container {
            flex: 1;
        }
        .input-container input {
            border: none;
            outline: none;
            width: 100%;
            padding: 8px;
            height: 23px;
            
        }

        
    </style>
    <style>
        .select-container1 {
            position: relative;
            display: inline-block;
            width: 100%;
        }
        .selected-items1 {
            display: flex;
            flex-wrap: wrap;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            min-height: 38px;
            cursor: text;
        }
        .selected-items1 {
            background-color: #f1f1f1;
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 5px;
            margin: 2px;
            display: flex;
            align-items: center;
        }
        .selected-items1 span {
            margin-left: 5px;
            cursor: pointer;
        }
        .selected-items1 span:hover {
            color: red;
        }
        .dropdown1 {
            display: none;
            position: absolute;
            background-color: white;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
            width: 100%;
        }
        .dropdown1 div {
            padding: 8px;
            cursor: pointer;
        }
        .dropdown1 div:hover {
            background-color: #ddd;
        }
        .input-container1 {
            flex: 1;
        }
        .input-container1 input {
            border: none;
            outline: none;
            width: 100%;
            padding: 8px;
        }
    </style>





 
</head>

<body class="g-sidenav-show  bg-gray-100">

      <?php include('sidebar.php') ?>

         <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
         
           <?php include('navbar.php') ?>

             <div class="container-fluid py-4">


          