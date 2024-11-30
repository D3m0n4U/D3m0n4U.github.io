<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExoEdge Login Portal</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="https://www.exoedge.com/">Home</a></li>
                <li><a href="https://www.exoedge.com/leadership/">About</a></li>
                <li><a href="https://www.exoedge.com/contact-us/">Contact</a></li>
            </ul>
            <div class="logo">
                <img src="logo.png" alt="ExoEdge Logo">
            </div>
        </nav>
    </header>

    <section class="hero">
        <div class="background"></div>
        <div class="content">
            <h1>Welcome to ExoEdge</h1>
            <p>Securely access your account</p>
            <button class="btn-login" id="scroll-to-login">Login</button>
        </div>
    </section>

    <section class="login-form" id="login-form">
        <h2>Login to Your Account</h2>
        <form action="login.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="uname"><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
	<?php
		if (isset($_GET['error'])) {
    		$error = $_GET['error'];
    		echo "<span style='color:red; font-size:0.7em'>*$error*</span>";
		}
	?><br>
	<input type="checkbox" id="remember-me" name="remember-me">
            <label for="remember-me">Remember me</label><br>
            <button class="btn-login" type="submit">Login</button>
        </form>
    </section>

<section class="security-features">
            <h2>Your Security is Our Top Priority</h2>
            <ul>
                <li>
                    <i class="fas fa-lock"></i>
                    <p>Two-Factor Authentication: Add an extra layer of security to your account</p>
                </li>
                <li>
                    <i class="fas fa-encrypt"></i>
                    <p>Encrypted Data: Your data is protected with industry-standard encryption</p>
                </li>
                <li>
                    <i class="fas fa-shield-alt"></i>
                    <p>Regular Security Updates: We keep our systems up-to-date to ensure your protection</p>
                </li>
            </ul>
        </section>
    </main>
    <footer>
        <p>&copy; 2023 ExoEdge. All rights reserved.</p>
        <ul>
            <li><a href="#">Terms of Service</a></li>
            <li><a href="https://www.exoedge.com/privacy-policy/">Privacy Policy</a></li>
            <li><a href="#">Help Center</a></li>
        </ul>
        <ul class="social-media">
            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
            <li><a href="#" target="_blank"><i class="fab fa-facebook"></i></a></li>
        </ul>
    </footer>
    <script src="script.js"></script>
</body>
</html>
