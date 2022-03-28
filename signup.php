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
    <title>Sign Up Owner</title>

    <!-- Font Icon -->
    <link rel="stylesheet"
        href="../rezyume_web/login/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="../rezyume_web/login/css/style.css">
    <meta name="robots" content="noindex, follow">
</head>

<body>
    <div class="main" style="background-image: url(../rezyume_web/img/1.jpg);">
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up Owner</h2>
                        <form action="akun.php" method="POST">
                            <div class="form-group">
                                <label for="name_owner"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name_owner" id="name_owner" placeholder="Your Name" />
                            </div>
                            <div class="form-group">
                                <label for="email_owner"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email_owner" id="email_owner" placeholder="Your Email" />
                            </div>
                            <div class="form-group">
                                <label for="password_owner"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password_owner" id="password_owner" placeholder="Password" />
                            </div>
                            <button type="submit"
                                style="background-color: royalblue; color:white; border:none; border-radius: 5px; padding: 10px 15px;">Register</button>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="../rezyume_web/login/images/signup.gif" alt="sing up image">
                        </figure>
                        <a href="login.php">I am already member</a>
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