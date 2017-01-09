<?php
/**
 * @author Christoph Ulshoefer <christophsulshoefer@gmail.com>
 * @copyright 2017
 * @license http://opensource.org/licenses/gpl-license.php MIT License
 */

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Log In</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>

    <link rel="stylesheet" href="style.css" media="screen" title="no title">

    <script
        src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous"></script>

</head>
<body>

<nav>
    <div class="nav-wrapper container">
        <a href="#" class="brand-logo">Username</a>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col s6">
            <div class="card">
                <span class="card-title">Login</span>
                <div class="card-content">
                    <form class="" action="index.html" method="post">
                        <div class="input-field">
                            <input type="text" placeholder="username" class="validate">
                        </div>
                        <div class="input-field">
                            <input type="password" placeholder="password" class="validate">
                        </div>
                        <input type="submit" class="btn" name="name" value="Login">
                    </form>
                </div>
            </div>
        </div>

        <div class="col s6">
            <div class="card">
                <span class="card-title">Sign up</span>
                <div class="card-content">
                    <form class="" action="index.html" method="post">
                        <div class="input-field">
                            <input type="text" placeholder="username" class="validate">
                        </div>
                        <div class="input-field">
                            <input type="password" placeholder="password" class="validate">
                        </div>
                        <input type="submit" class="btn" name="name" value="Sign up">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
