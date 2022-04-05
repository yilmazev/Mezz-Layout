<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/styles/app.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <title>Registration - Habbo</title>
</head>
<body class="container">
	<script src="/assets/scripts/app.js"></script>
    <div class="page-content">
        <header class="page-content-header pixelated">
            <div class="page-content-max-width">
                <div class="page-content-header-column">
                    <p class="page-content-header-text">Online virtual community where you can create your own avatar, make friends, chat, create rooms and much more!</p>
                    <div class="page-content-header-buttons">
                        <a onclick="document.getElementById('login').style.display='block'" class="page-content-header-login-button">Login</a>
                        <span class="page-content-header-or">OR</span>
                        <a href="/registration.php" class="page-content-header-register-button">Create Account</a>
                    </div>
                </div>
            </div> 
        </header>
        <div id="login" class="page-content-modal">
            <div class="page-content-modal-center">
                <div class="page-content-modal-center-form">
                    <div class="page-content-modal-center-form-head">
                        <h2 class="page-content-modal-center-form-head-title">Hello</h2>
                        <p class="page-content-modal-center-form-head-description">We are so glad to see you again.</p>
                        <i onclick="document.getElementById('login').style.display='none';document.getElementsByTagName('body').style.overflow='auto'" class="page-content-modal-center-form-head-close">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="page-content-modal-center-form-head-close-icon"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" /></svg>
                        </i>
                    </div>
                    <div class="page-content-modal-center-form-content">
                        <input type="text" class="page-content-modal-center-form-content-input" placeholder="Email or username">
                        <input type="password" class="page-content-modal-center-form-content-input" placeholder="Password">
                        <button class="page-content-modal-center-form-content-button-login">Let's Go</button>
                        <a href="/registration.php" class="page-content-modal-center-form-content-button-register">Don't have an account? Join now!</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-content-nav">
            <div class="page-content-max-width" style="justify-content: flex-start;">
                <div class="page-content-nav-item active">
                    <a href="/" class="page-content-nav-item-text">Home</a>
                </div>
                <div class="page-content-nav-item">
                    <a class="page-content-nav-item-text">Community</a>
                    <div class="page-content-nav-item-dropdown-content">
                        <a href="#" class="page-content-nav-item-sub-text">Photos</a>
                        <a href="#" class="page-content-nav-item-sub-text">Rooms</a>
                        <a href="#" class="page-content-nav-item-sub-text">Fansites</a>
                        <a href="#" class="page-content-nav-item-sub-text">Staffs</a>
                        <a href="#" class="page-content-nav-item-sub-text">News</a>
                    </div>
                </div>
                <div class="page-content-nav-item">
                    <a href="#" class="page-content-nav-item-text">Highscores</a>
                </div>
                <div class="page-content-nav-item">
                    <a href="#" class="page-content-nav-item-text">Shop</a>
                </div>
                <div class="page-content-nav-item">
                    <a class="page-content-nav-item-text">Playing Habbo</a>
                    <div class="page-content-nav-item-dropdown-content">
                        <a href="#" class="page-content-nav-item-sub-text">What is Habbo</a>
                        <a href="#" class="page-content-nav-item-sub-text">How to Play</a>
                        <a href="#" class="page-content-nav-item-sub-text">Habbo Way</a>
                        <a href="#" class="page-content-nav-item-sub-text">Safety</a>
                        <a href="#" class="page-content-nav-item-sub-text">Help</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-content-collider">
            <div class="page-content-max-width" style="flex-direction: column;align-items: flex-start;">
                <div class="page-content-collider-item" style="align-items: center;">
                    <div class="page-content-collider-content registration">
                        <div class="page-content-collider-content-registration">
                            <h2 class="page-content-collider-content-registration-title">Create free account now!</h2>
                            <div class="page-content-collider-content-registration-item">
                                <label class="page-content-collider-content-registration-item-title">Email</label>
                                <p class="page-content-collider-content-registration-item-text">You'll need to use this email address to log in to Habbo in the future. Please use a valid address.</p>
                                <input type="email" class="page-content-collider-content-registration-item-input">
                            </div>
                            <div class="page-content-collider-content-registration-item">
                                <label class="page-content-collider-content-registration-item-title">Password</label>
                                <p class="page-content-collider-content-registration-item-text">Use at least 6 characters. Include at least one letter and at least one number or special character.</p>
                                <input type="password" class="page-content-collider-content-registration-item-input">
                                <input type="password" class="page-content-collider-content-registration-item-input">
                            </div>
                            <div class="page-content-collider-content-registration-item">
                                <label class="page-content-collider-content-registration-item-title">Birthdate</label>
                                <p class="page-content-collider-content-registration-item-text">Please enter your real birth date. We will use this information to restore your account if you ever lose access. Your birth date will never be shared publicly. Please note you have to be aged 13 years or above to play Habbo!</p>
                                <div class="page-content-collider-content-registration-item-column">
                                    <select class="page-content-collider-content-registration-item-select">
                                        <?php
                                        echo '<option>Day</option>';
										for($i = 1; $i <= 31; $i++) {
											echo "<option>$i</option>";
										} 
                                        ?>
                                    </select>
									<select class="page-content-collider-content-registration-item-select">
                                        <?php
                                        echo '<option>Month</option>';
										for($i = 1; $i <= 12; $i++) {
											echo "<option>$i</option>";
										} 
                                        ?>
                                    </select>
									<select class="page-content-collider-content-registration-item-select">
                                        <?php
                                        echo '<option>Year</option>';
										for($i = 1970; $i <= 2022; $i++) {
											echo "<option>$i</option>";
										} 
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="page-content-collider-content-registration-item">
                                <div class="page-content-collider-content-registration-item-column">
                                    <input type="checkbox" class="page-content-collider-content-registration-item-checkbox">
                                    <p class="page-content-collider-content-registration-item-text">I accept the <a class="page-content-collider-content-registration-item-href" href="#" target="_blank">terms of service</a>, <a class="page-content-collider-content-registration-item-href" href="#" target="_blank">privacy policy</a> and <a class="page-content-collider-content-registration-item-href" href="#" target="_blank">cookie policy</a>.</p>
                                </div>
                                <div class="page-content-collider-content-registration-item-column">
                                    <input type="checkbox" class="page-content-collider-content-registration-item-checkbox">
                                    <p class="page-content-collider-content-registration-item-text">Keep me updated about the latest Habbo happenings, news and gossip!</p>
                                </div>
                            </div>
                            <button class="page-content-collider-content-registration-button">Let's make an avatar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="page-content-footer">
            <div class="page-content-footer-top-side">
                <div class="page-content-max-width page-content-space-between" style="align-items: flex-start;">
                    <div class="page-content-footer-column">
                        <img class="page-content-footer-logo" src="https://habbofont.net/font/habbo_big/habbo.gif">
                        <p class="page-content-footer-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui, provident doloremque? Temporibus aliquam maiores debitis cumque? Officia voluptate reprehenderit recusandae ipsum nulla voluptatibus iure, ratione, corporis et, nam sint fuga!</p>
                    </div>
                    <div class="page-content-footer-column">
                        <h3 class="page-content-footer-title">Support</h3>
                        <a href="" class="page-content-footer-url">Help center</a>
                        <a href="" class="page-content-footer-url">I forgot my password</a>
                        <a href="mailto:ylmzofc@outlook.com" class="page-content-footer-url">ylmzofc@outlook.com</a>
                    </div>
                    <div class="page-content-footer-column">
                        <h3 class="page-content-footer-title">Security and Privacy</h3>
                        <a href="" class="page-content-footer-url">Safety</a>
                        <a href="" class="page-content-footer-url">Terms of Service</a>
                        <a href="" class="page-content-footer-url">Privacy Policy</a>
                        <a href="" class="page-content-footer-url">Cookie Policy</a>
                    </div>
                    <div class="page-content-footer-column">
                        <h3 class="page-content-footer-title">Desktop App</h3>
                        <p class="page-content-footer-text">Download the desktop app for easier access to the hotel.</p>
                        <a href="" class="page-content-footer-download-button">Download HabboApp</a>
                    </div>
                </div>
            </div>
            <div class="page-content-footer-bottom-side">
                <div class="page-content-max-width page-content-space-between" style="align-items: flex-start;">
                    <span class="page-content-footer-title copyright">&copy; <script>var date=new Date();var year=date.getFullYear();document.write(year);</script> Habbo Hotel.</span>
                    <p class="page-content-footer-text copyright">All rights reserved. Design and coding by <a href="https://yilmazev.github.io" target="_blank" class="page-content-footer-url hugoyin">Hugoyin</a>.</p>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>