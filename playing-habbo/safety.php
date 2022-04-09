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
                            <h1 class="page-content-collider-content-playing-habbo-item-big-title">Safety tips</h3>
                            <p class="page-content-collider-content-playing-habbo-item-description">These are the top 7 tips for how to navigate the internet safely and securely!</p>
                        </div>
                        <div class="page-content-collider-content-playing-habbo-item dashed">
                            <h3 class="page-content-collider-content-playing-habbo-item-mini-title">Protect Your Personal Info</h3>
                            <p class="page-content-collider-content-playing-habbo-item-description"><img src="/assets/images/playing-habbo/safetytips1_n.png" alt="Protect Your Personal Info" class="page-content-collider-content-playing-habbo-item-image">You never know who you're truly speaking to online, so never share your personal information! Giving away your personal info - real name, address, phone numbers, photos or school - could lead to you being scammed, bullied or put in serious danger.</p>
                        </div>
                        <div class="page-content-collider-content-playing-habbo-item dashed">
                            <h3 class="page-content-collider-content-playing-habbo-item-mini-title">Protect Your Privacy</h3>
                            <p class="page-content-collider-content-playing-habbo-item-description"><img src="/assets/images/playing-habbo/safetytips2_n.png" alt="Protect Your Privacy" class="page-content-collider-content-playing-habbo-item-image">Never share your any of your personal details. This includes Facebook, Twitter, Discord, Skype, Instagram and Snapchat info. You never know who might get their hands on it!</p>
                        </div>
                        <div class="page-content-collider-content-playing-habbo-item dashed">
                            <h3 class="page-content-collider-content-playing-habbo-item-mini-title">Don't Give In To Peer Pressure</h3>
                            <p class="page-content-collider-content-playing-habbo-item-description"><img src="/assets/images/playing-habbo/safetytips3_n.png" alt="Don't Give In To Peer Pressure" class="page-content-collider-content-playing-habbo-item-image">Just because everyone else seems to be doing it, doesn't mean you have to. If you are not comfortable with something, don't do it!</p>
                        </div>
                        <div class="page-content-collider-content-playing-habbo-item dashed">
                            <h3 class="page-content-collider-content-playing-habbo-item-mini-title">Keep Your Pals In Pixels</h3>
                            <p class="page-content-collider-content-playing-habbo-item-description"><img src="/assets/images/playing-habbo/safetytips4_n.png" alt="Keep Your Pals In Pixels" class="page-content-collider-content-playing-habbo-item-image">Do not meet up with someone you only know from the internet! People aren't always who they claim to be. If a Habbo asks you to meet with them in real life say "No, thanks!" click 'Ignore' on them and tell your parents or another trusted adult.</p>
                        </div>
						<div class="page-content-collider-content-playing-habbo-item dashed">
                            <h3 class="page-content-collider-content-playing-habbo-item-mini-title">Don't Be Scared To Speak Up</h3>
                            <p class="page-content-collider-content-playing-habbo-item-description"><img src="/assets/images/playing-habbo/safetytips5_n.png" alt="Don't Be Scared To Speak Up" class="page-content-collider-content-playing-habbo-item-image">If someone is making you feel uncomfortable, threatening you, or pressuring you to do something you don't want to, put them on ignore, and report them immediately to our moderation team using the "Call for Help" button.</p>
                        </div>
						<div class="page-content-collider-content-playing-habbo-item dashed">
                            <h3 class="page-content-collider-content-playing-habbo-item-mini-title">Ban The Cam</h3>
                            <p class="page-content-collider-content-playing-habbo-item-description"><img src="/assets/images/playing-habbo/safetytips6_n.png" alt="Ban The Cam" class="page-content-collider-content-playing-habbo-item-image">You have no control over your personal photos, videos + webcam images after you share them on the internet. Once an image is posted, it can never be removed, will be viewable by anyone and could be used to bully or blackmail you. Before you share a pic or video, ask yourself; are you comfortable with people you don't know viewing it?</p>
                        </div>
						<div class="page-content-collider-content-playing-habbo-item">
                            <h3 class="page-content-collider-content-playing-habbo-item-mini-title">Stick To The Real Habbo!</h3>
                            <p class="page-content-collider-content-playing-habbo-item-description"><img src="/assets/images/playing-habbo/safetytips7_n.png" alt="Stick To The Real Habbo!" class="page-content-collider-content-playing-habbo-item-image">Websites that offer free prizes, credits, furni, or "staff rights" are ALL scams designed to steal your password. Never give them your login details or download files from these websites. They could be keyloggers or viruses!</p>
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
                <div class="page-content-max-width space-between" style="align-items: flex-start;">
                    <span class="page-content-footer-title copyright">&copy; <script>var date=new Date();var year=date.getFullYear();document.write(year);</script> Habbo Hotel.</span>
                    <p class="page-content-footer-text copyright">All rights reserved. Design and coding by <a href="https://yilmazev.github.io" target="_blank" class="page-content-footer-url hugoyin">Hugoyin</a>.</p>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>