<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <?php 
        switch ($_GET['page']) {
            case 'home':
                echo '<title>Home eBest Segurança do Trabalho Caxias do Sul</title>';
                echo '<meta content="" name="description">';
                break;
            case 'somos':
                echo '<title>somos</title>';
                echo '<meta content="" name="description">';
                break;
            
            default:
                echo '<title>Home</title>';
                echo '<meta content="" name="description">';
                break;
        }
    ?>
    
    

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/main.css" />
    
    
</head>
<body>


    <div id="header">
        <div class="container">
            <div class="logo">
                <img src="assets/img/logo_ebest.png">
            </div>
            
            <ul class="social">
                <li><a href="#"><img src="assets/img/ico_facebook.png"></a></li>
                <li><a href="#"><img src="assets/img/ico_instagram.png"></a></li>
            </ul>
            <ul class="menu">
                <li class="<?php echo $_GET['page'] == 'home' ? 'active' : ''; ?>"><a href="home">HOME</a></li>
                <li class="<?php echo $_GET['page'] == 'somos' ? 'active' : ''; ?>"><a href="somos">QUEM SOMOS</a></li>
                <li class="<?php echo $_GET['page'] == 'solucoes' ? 'active' : ''; ?>"><a href="solucoes">SOLUÇÕES</a></li>
                <li class="<?php echo $_GET['page'] == 'cases' ? 'active' : ''; ?>"><a href="#">CASES</a></li>
                <li class="<?php echo $_GET['page'] == 'contato' ? 'active' : ''; ?>"><a href="#">CONTATO</a></li>
            </ul>
        </div>
    </div>