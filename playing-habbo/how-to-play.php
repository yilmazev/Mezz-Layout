<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/assets/styles/app.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Virtual World, Avatar Chat and Pixel Art - Habbo</title>
</head>
<body class="container">
	<script src="/assets/scripts/page-load.js"></script>
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
                        <h3 class="page-content-modal-center-form-head-title">Hello</h3>
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
                <div class="page-content-nav-item">
                    <a href="/" class="page-content-nav-item-text">Home</a>
                </div>
                <div class="page-content-nav-item">
                    <a class="page-content-nav-item-text">Community</a>
                    <div class="page-content-nav-item-dropdown-content">
                        <a href="/community/photos.php" class="page-content-nav-item-sub-text">Photos</a>
                        <a href="/community/rooms.php" class="page-content-nav-item-sub-text">Rooms</a>
                        <a href="/community/fansites.php" class="page-content-nav-item-sub-text">Fansites</a>
                        <a href="/community/staffs.php" class="page-content-nav-item-sub-text">Staffs</a>
                        <a href="/community/article.php" class="page-content-nav-item-sub-text">News</a>
                    </div>
                </div>
                <div class="page-content-nav-item">
                    <a href="/highscores.php" class="page-content-nav-item-text">Highscores</a>
                </div>
                <div class="page-content-nav-item">
                    <a href="/shop.php" class="page-content-nav-item-text">Shop</a>
                </div>
                <div class="page-content-nav-item active">
                    <a class="page-content-nav-item-text">Playing Habbo</a>
                    <div class="page-content-nav-item-dropdown-content">
                        <a href="/playing-habbo/what-is-habbo.php" class="page-content-nav-item-sub-text">What is Habbo</a>
                        <a href="/playing-habbo/how-to-play.php" class="page-content-nav-item-sub-text">How to Play</a>
                        <a href="/playing-habbo/habbo-way.php" class="page-content-nav-item-sub-text">Habbo Way</a>
                        <a href="/playing-habbo/safety.php" class="page-content-nav-item-sub-text">Safety</a>
                        <a href="#" target="_blank" class="page-content-nav-item-sub-text">Help</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-content-collider">
            <div class="page-content-max-width" style="width: 900px; justify-content: center;">
                <div class="page-content-collider-item">
                    <div class="page-content-collider-content playing-habbo">
                        <div class="page-content-collider-content-playing-habbo-item">
                            <h1 class="page-content-collider-content-playing-habbo-item-big-title">How to play</h3>
                            <p class="page-content-collider-content-playing-habbo-item-description">You've styled your avatar, gotten comfy in your homeroom and you've been shown how a few things work by the Hotel Manager??? So, what next?</p>
                        </div>
                        <div class="page-content-collider-content-playing-habbo-item dashed">
                            <h3 class="page-content-collider-content-playing-habbo-item-mini-title">Explore rooms</h3>
                            <p class="page-content-collider-content-playing-habbo-item-description"><img src="/assets/images/playing-habbo/navigator.png" alt="Explore rooms" class="page-content-collider-content-playing-habbo-item-image">Click the Navigator and choose one of the public rooms where you can chat with other Habbos.</p>
                        </div>
                        <div class="page-content-collider-content-playing-habbo-item dashed">
                            <h3 class="page-content-collider-content-playing-habbo-item-mini-title">Make friends</h3>
                            <p class="page-content-collider-content-playing-habbo-item-description"><img src="/assets/images/playing-habbo/askfriend.png" alt="Make friends" class="page-content-collider-content-playing-habbo-item-image">Click on a Habbo, ask them to be your friend or give them respect!</p>
                        </div>
                        <div class="page-content-collider-content-playing-habbo-item dashed">
                            <h3 class="page-content-collider-content-playing-habbo-item-mini-title">Visit game rooms</h3>
                            <p class="page-content-collider-content-playing-habbo-item-description"><img src="/assets/images/playing-habbo/gamehub.png" alt="Visit game rooms" class="page-content-collider-content-playing-habbo-item-image">Find the Game Hub in the list of public rooms in the navigator. Once there, use any of the arcade machines to go to a game room!</p>
                        </div>
                        <div class="page-content-collider-content-playing-habbo-item dashed">
                            <h3 class="page-content-collider-content-playing-habbo-item-mini-title">Go shopping</h3>
                            <p class="page-content-collider-content-playing-habbo-item-description"><img src="/assets/images/playing-habbo/shop.png" alt="Go shopping" class="page-content-collider-content-playing-habbo-item-image">Go to the Duckets shop and see what your free duckets can get you!</p>
                        </div>
                        <div class="page-content-collider-content-playing-habbo-item">
                            <h3 class="page-content-collider-content-playing-habbo-item-mini-title">Check out the latest activities</h3>
                            <p class="page-content-collider-content-playing-habbo-item-description">Visit the <a href="/" class="page-content-collider-content-playing-habbo-item-url">Home</a> section of the website to find out all the latest news, competitions and general goings-on in Habbo!</p>
                            <p class="page-content-collider-content-playing-habbo-item-description">Once you've done a few of these, you will be well on your way to becoming a fully fledged Habbo citizen!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="page-content-footer">
            <div class="page-content-footer-top-side">
                <div class="page-content-max-width space-between" style="align-items: flex-start;">
                    <div class="page-content-footer-column">
                        <img class="page-content-footer-logo" src="https://habbofont.net/font/habbo_big/habbo.gif">
                        <p class="page-content-footer-text">Habbo is an online vintage pixel-art style virtual community where you can create your own avatar, make friends, chat, build rooms, design + play games and so much more! Almost anything is possible in this strange place full of awesome people???</p>
                    </div>
                    <div class="page-content-footer-column">
                        <h3 class="page-content-footer-title">Support</h3>
                        <a href="" class="page-content-footer-url">Help Center</a>
                        <a href="" class="page-content-footer-url">Recover Password</a>
                        <a href="mailto:ylmzofc@outlook.com" class="page-content-footer-url">ylmzofc@outlook.com</a>
                    </div>
                    <div class="page-content-footer-column">
                        <h3 class="page-content-footer-title">Security and Privacy</h3>
                        <a href="/playing-habbo/safety.php" class="page-content-footer-url">Safety</a>
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
                <div class="page-content-max-width space-between" style="align-items: flex-start;">
                    <span class="page-content-footer-title copyright">&copy; <script>var date=new Date();var year=date.getFullYear();document.write(year);</script> Habbo Hotel.</span>
                    <p class="page-content-footer-text copyright">All rights reserved. Design and coding by <a href="https://yilmazev.github.io" target="_blank" class="page-content-footer-url hugoyin">Hugoyin</a>.</p>
                </div>
            </div>
        </footer>
    </div>
	<script src="/assets/scripts/app.js"></script>
</body>
</html>