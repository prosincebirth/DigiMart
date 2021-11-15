<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DigiMart</title>
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.7/dist/css/bootstrap.css">
    <link rel="preload stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" as="style" crossorigin="anonymous" />
    <link rel="preload stylesheet" href="assets/css/reset.css" as="style" crossorigin>
    <link rel="preload stylesheet" href="assets/css/base.css" as="style" crossorigin>
    <link rel="preload stylesheet" href="assets/css/layout.css" as="style" crossorigin>
    <link rel="preload stylesheet" href="assets/css/button.css" as="style" crossorigin>
    <link rel="preload stylesheet" href="assets/css/form.css" as="style" crossorigin>
    <link rel="preload stylesheet" href="assets/css/header.css" as="style" crossorigin>
    <link rel="preload stylesheet" href="assets/css/mv.css" as="style" crossorigin>
    <link rel="preload stylesheet" href="assets/css/tab.css" as="style" crossorigin>
    <link rel="preload stylesheet" href="assets/css/badge.css" as="style" crossorigin>
    <link rel="preload stylesheet" href="assets/css/pagination.css" as="style" crossorigin>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    <link rel="stylesheet" href="assets/css/market.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


   <?php
        if(!isset($_SESSION)){
            session_start();
        }
        if($_SESSION['user_status']==2){
            header("Location: admin/index.php"); exit();
        }

    ?>
</head>
<body>
    