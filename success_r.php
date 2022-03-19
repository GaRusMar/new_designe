<?php
$srvr=$_SERVER['SERVER_NAME'];
$srrr=$_SERVER['REQUEST_URI'];
include 'utm2.php'; 
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <meta name="keywords" content="Студия дизайнов">
    <meta name="description" content="Спасибо, что откликнулись на вакансию в компанию Студия Дизайнов.">
    <title>Заявка на вакансию успешно отправлена!</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/site.webmanifest">
    <link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" type="text/css" href="/assets/fonts/fonts.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/css/style.min.css"/>
</head>

<body class="main">
<div class="main__wrapper">
    <header class="header">
        <div class="header__container">
            <a href="/" class="header__logo">
                <span>студия</span>
                <span>дизайнов</span>
            </a>
            <!--<div class="header__menu">
                <div class="header__gamburger">
                    <i></i>
                    <i></i>
                    <i></i>
                </div>
                <nav class="header__nav">
                    <ul>
                        <li><a href="/about">о компании</a></li>
                        <li><a href="/services">услуги</a></li>
                        <li><a href="/portfolio">портфолио</a></li>
                        <li><a href="/jobs">вакансии</a></li>
                        <li><a href="/contacts">контакты</a></li>
                    </ul>
                </nav>
            </div>-->
        </div>
    </header>
    <div class="content">
    <section class="section first-screen">
        <div class="container">
            <div class="first-screen__wrapper">
                <div class="first-screen__center">
                    <h1 class="first-screen__title"><span>Заявка</span> успешно отправлена!</h1>
                    <p class="first-screen__description">
                        Спасибо, что отправили заявку на вакансию в компанию Студия Дизайнов. Мы получили Ваши данные и свяжемся с Вами в ближайшее время.
                    </p>
                    <a class="btn btn--more btn--success" href="/">Вернуться на главную</a>
                </div>                
            </div>
        </div>
    </section>   
<?php include __DIR__ . "/assets/inc/footer.php"; ?>