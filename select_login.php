<?php
    include 'koneksi.php';
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="apple-touch-icon" sizes="76x76" href="../rezyume_web/assets/img/icon.png">
    <link rel="icon" type="image/png" href="../rezyume_web/assets/img/icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Select Login</title>

    <!-- Font Icon -->
    <link rel="stylesheet"
        href="../rezyume_web/login/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="../rezyume_web/login/css/style.css">
    <meta name="robots" content="noindex, follow">
</head>

<body>
    <div class="main" style="background-image: url(../rezyume_web/img/1.jpg);">
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="../rezyume_web/img/login.gif" alt="sing up image"></figure>
                    </div>
                    <div class="signin-form">
                        <h2 class="form-title">Select Login</h2>
                        <button class="form-submit"><a href="login.php">Owner</a></button>
                        <button class="form-submit"><a href="login_employee.php">Employee</a><button>
                    </div>
                </div>
            </div>
        </section>

        <!-- JS -->
        <script src="/login/jquery/jquery.min.js"></script>
        <script src="/login/login.js"></script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() { dataLayer.push(arguments); }
            gtag('js', new Date());

            gtag('config', 'UA-23581568-13');
        </script>
        <script defer src="https://static.cloudflareinsights.com/beacon.min.js"
            data-cf-beacon='{"rayId":"656dea7b1aecd1df","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.5.2","si":10}'>
        </script>
    </div>
</body>
</html>