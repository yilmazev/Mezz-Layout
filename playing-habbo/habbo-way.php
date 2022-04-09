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
            <div class="page-content-max-width" style="justify-content: center;">
                <div class="page-content-collider-item">
                    <div class="page-content-collider-content playing-habbo habbo-way">
                        <div class="page-content-collider-content-left-side">
							<h1 class="page-content-collider-content-playing-habbo-item-big-title">Do</h3>
							<div class="page-content-collider-content-playing-habbo-item">
								<h3 class="page-content-collider-content-playing-habbo-item-mini-title">Play games</h3>
								<p class="page-content-collider-content-playing-habbo-item-description"><img src="/assets/images/playing-habbo/habboway_1a.png" alt="Play games" class="page-content-collider-content-playing-habbo-item-image">Play with friends, create your own games, kick ass and take names!</p>
							</div>
							<div class="page-content-collider-content-playing-habbo-item">
								<h3 class="page-content-collider-content-playing-habbo-item-mini-title">Chat</h3>
								<p class="page-content-collider-content-playing-habbo-item-description"><img src="/assets/images/playing-habbo/habboway_2a.png" alt="Chat" class="page-content-collider-content-playing-habbo-item-image">Talk to your friends, get to know your follow Habbos and meet loads of new friends... and more! ;)</p>
							</div>
							<div class="page-content-collider-content-playing-habbo-item">
								<h3 class="page-content-collider-content-playing-habbo-item-mini-title">Find that special pixel someone</h3>
								<p class="page-content-collider-content-playing-habbo-item-description"><img src="/assets/images/playing-habbo/habboway_3a.png" alt="Find that special pixel someone" class="page-content-collider-content-playing-habbo-item-image">Flirt, Date, fall in love, and maybe meet that special someone... or something!??</p>
							</div>
							<div class="page-content-collider-content-playing-habbo-item">
								<h3 class="page-content-collider-content-playing-habbo-item-mini-title">Help</h3>
								<p class="page-content-collider-content-playing-habbo-item-description"><img src="/assets/images/playing-habbo/habboway_4a.png" alt="Help" class="page-content-collider-content-playing-habbo-item-image">Help a stranger, gain a friend! Or two, or three. You never know who you're going to meet next!</p>
							</div>
							<div class="page-content-collider-content-playing-habbo-item">
								<h3 class="page-content-collider-content-playing-habbo-item-mini-title">Create</h3>
								<p class="page-content-collider-content-playing-habbo-item-description"><img src="/assets/images/playing-habbo/habboway_5a.png" alt="Create" class="page-content-collider-content-playing-habbo-item-image">Let your creativity run wilder than a beaver in a log cabin! Push yourself to the limit in style and design- be the best!</p>
							</div>
							<div class="page-content-collider-content-playing-habbo-item">
								<h3 class="page-content-collider-content-playing-habbo-item-mini-title">Trade</h3>
								<p class="page-content-collider-content-playing-habbo-item-description"><img src="/assets/images/playing-habbo/habboway_6a.png" alt="Trade" class="page-content-collider-content-playing-habbo-item-image">Build your own furni empire by rading your way to the top!</p>
							</div>
							<div class="page-content-collider-content-playing-habbo-item">
								<h3 class="page-content-collider-content-playing-habbo-item-mini-title">Marketplace trading</h3>
								<p class="page-content-collider-content-playing-habbo-item-description"><img src="/assets/images/playing-habbo/habboway_7a.png" alt="Marketplace trading" class="page-content-collider-content-playing-habbo-item-image">If you have a nose for business, use the Marketplace to sell items and stock up on your credits. The more you know about the world of "finances", the easier you get ahead in Habbo.</p>
							</div>
							<div class="page-content-collider-content-playing-habbo-item">
								<h3 class="page-content-collider-content-playing-habbo-item-mini-title">Put on games</h3>
								<p class="page-content-collider-content-playing-habbo-item-description"><img src="/assets/images/playing-habbo/habboway_8a.png" alt="Put on games" class="page-content-collider-content-playing-habbo-item-image">Be the perfect host-creating exiting games for other Habbos to play will mean that everyone will want to come play a game in your room.</p>
							</div>
						</div>
						<div class="page-content-collider-content-right-side">
							<h1 class="page-content-collider-content-playing-habbo-item-big-title">Don't</h3>
							<div class="page-content-collider-content-playing-habbo-item">
								<h3 class="page-content-collider-content-playing-habbo-item-mini-title">Cheat</h3>
								<p class="page-content-collider-content-playing-habbo-item-description"><img src="/assets/images/playing-habbo/habboway_1a.png" alt="Cheat" class="page-content-collider-content-playing-habbo-item-image">Cheater never prosper, they just end up spoiling the experience for everyone else.</p>
							</div>
							<div class="page-content-collider-content-playing-habbo-item">
								<h3 class="page-content-collider-content-playing-habbo-item-mini-title">Troll</h3>
								<p class="page-content-collider-content-playing-habbo-item-description"><img src="/assets/images/playing-habbo/habboway_2b.png" alt="Troll" class="page-content-collider-content-playing-habbo-item-image">No one likes a troll, not even their mothers; bullying will not be tolerated by anyone.</p>
							</div>
							<div class="page-content-collider-content-playing-habbo-item">
								<h3 class="page-content-collider-content-playing-habbo-item-mini-title">Cyber</h3>
								<p class="page-content-collider-content-playing-habbo-item-description"><img src="/assets/images/playing-habbo/habboway_3b.png" alt="Cyber" class="page-content-collider-content-playing-habbo-item-image">Cybering is strictly forbidden, and cam requests will result in punishment. Also remember to never meet up with people you only know from the internet, people aren't always who they claim to be.</p>
							</div>
							<div class="page-content-collider-content-playing-habbo-item">
								<h3 class="page-content-collider-content-playing-habbo-item-mini-title">Trick</h3>
								<p class="page-content-collider-content-playing-habbo-item-description"><img src="/assets/images/playing-habbo/habboway_4b.png" alt="Trick" class="page-content-collider-content-playing-habbo-item-image">Taking advantage of other Habbos usually leads to bad mojo.</p>
							</div>
							<div class="page-content-collider-content-playing-habbo-item">
								<h3 class="page-content-collider-content-playing-habbo-item-mini-title">Script</h3>
								<p class="page-content-collider-content-playing-habbo-item-description"><img src="/assets/images/playing-habbo/habboway_5b.png" alt="Script" class="page-content-collider-content-playing-habbo-item-image">Make it, don't fake it! No one likes a trickster!</p>
							</div>
							<div class="page-content-collider-content-playing-habbo-item">
								<h3 class="page-content-collider-content-playing-habbo-item-mini-title">Scam</h3>
								<p class="page-content-collider-content-playing-habbo-item-description"><img src="/assets/images/playing-habbo/habboway_6b.png" alt="Scam" class="page-content-collider-content-playing-habbo-item-image">Stealing doesn't make you rick, it makes you a criminal. And a very bad role model.</p>
							</div>
							<div class="page-content-collider-content-playing-habbo-item">
								<h3 class="page-content-collider-content-playing-habbo-item-mini-title">Sell for real money</h3>
								<p class="page-content-collider-content-playing-habbo-item-description"><img src="/assets/images/playing-habbo/habboway_7b.png" alt="Sell for real money" class="page-content-collider-content-playing-habbo-item-image">Don't sell your items for real money. You're likely to lose it all in a place that is not safe and to waste the time and dedication you put into getting where you are in the first place.</p>
							</div>
							<div class="page-content-collider-content-playing-habbo-item">
								<h3 class="page-content-collider-content-playing-habbo-item-mini-title">Place or accept bets</h3>
								<p class="page-content-collider-content-playing-habbo-item-description"><img src="/assets/images/playing-habbo/habboway_8b.png" alt="Place or accept bets" class="page-content-collider-content-playing-habbo-item-image">Using furni that randomizes games with the possibility to place bets can get you into trouble. Show off your skills, don't leave it up to chance.</p>
							</div>
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