<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login - Delta Link, LLC.</title>
    <meta charset="utf-8">
    <?php include("head.inc");?>
</head>
<body>
<?php include("navbar.inc")?>
<main>
    <h3 class="title is-2 has-text-centered white-font">Manage your billing and information</h3>
    <h3 class="subtitle is-3 has-text-centered white-font">Login</h3>
    <div class="login">
        <h3 class="title is-4">Login or create your account</h3><br>
        Username: <input type="text" name="username" id="username" required="required"><br>
        Password: <input type="password" name="password" id="password" required="required"><br><br>
        <div class="flex">
            <div class="options">
            <a href="#">Forgot username?</a>
            </div>
            <div class="options">
            <a href="#">Forgot password?</a>
            </div>
        </div>
        <div class="has-text-centered">
        <input class="white-font" type="submit" value="Login"> <input class="white-font" type="submit" value="Create">
        </div>
    </div>
</main>
<footer class="footer"  style="margin-top: 100px;">
    <div class="wrapper">
        <div class="container has-text-centered">
            <p>662-545-3467 | 631 Gaines Hwy<br>
            Boyle, MS 38730</p>
            <p> &copy; DELTALINK LLC 2017</p>
        </div>
    </div>
</footer>
</body>
</html>