<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Olu Meduoye | <?= $title ?></title>
    <meta name="description" content="Olu Meduoye is a web developer from London. All enquiries to olu@claymoreminds.com">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="build/css/application.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
</head>
<body class="<?php
         if(isset($body)){ echo $body;}else{ echo'not-home';} ?>">
<div class="text-center loader-container active">
    <?php
    $logoBg = isset($spinnerLogo) ?  $spinnerLogo : '';
    ?>
    <div class="loader"></div>
    <div class="loader-bg" style="background: url(<?= $logoBg ?>);"></div>
</div>
<div class="fade-out-container hidden">

</div>
<a class="nav-toggle">
    <i class="fa fa-2x fa-bars" aria-hidden="true"></i>
</a>
<div id="sidebar" class="nav-sidebar">
    <ul class="text-uppercase">
    <li><a class="anchor-link" data-anchor="home" data-link="index.php">Home</a></li>
    <li><a class="anchor-link" data-link="index.php#skills" data-anchor="skills" >Skills</a></li>
    <li><a class="anchor-link" data-link="index.php#about" data-anchor="about" >About</a></li>
    <li><a class="anchor-link" data-link="index.php#portfolio" data-anchor="portfolio" >Portfolio</a></li>
    <li><a class="fade-out-link" data-link="contact.php" >Contact</a></li>
        <li><a target="_blank" href="https://github.com/olu1987"><i class="fa fa-2x fa-github" aria-hidden="true"></i></a></li>
        <li><a target="_blank" href="https://uk.linkedin.com/in/olu-meduoye-a76a82101"><i class="fa fa-2x fa-linkedin" aria-hidden="true"></i></a></li>
    </ul>
</div>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<div class="page-wrap">