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
        <div class="page-content-user-space">
            <div class="page-content-max-width space-between">
                <div class="page-content-user-space-left-side">
                <div class="page-content-user-space-left-side-item">
                        <span class="page-content-user-space-left-side-item-icon credits"></span>
                        <div class="page-content-user-space-left-side-item-column">
                            <p class="page-content-user-space-left-side-item-text bold">25000</p>
                            <p class="page-content-user-space-left-side-item-text">Credits</p>
                        </div>
                    </div>
                    <div class="page-content-user-space-left-side-item">
                        <span class="page-content-user-space-left-side-item-icon duckets"></span>
                        <div class="page-content-user-space-left-side-item-column">
                            <p class="page-content-user-space-left-side-item-text bold">50000</p>
                            <p class="page-content-user-space-left-side-item-text">Duckets</p>
                        </div>
                    </div>
                    <div class="page-content-user-space-left-side-item">
                        <span class="page-content-user-space-left-side-item-icon diamonds"></span>
                        <div class="page-content-user-space-left-side-item-column">
                            <p class="page-content-user-space-left-side-item-text bold">25</p>
                            <p class="page-content-user-space-left-side-item-text">Diamonds</p>
                        </div>
                    </div>
                </div>
                <div class="page-content-user-space-right-side">
                    <div class="page-content-user-space-right-side-item">
                        <div onclick="dropdown()" class="page-content-user-space-right-side-item-nav">
                            <span class="page-content-user-space-right-side-item-nav-figure pixelated" style="background-image: url('https://www.habbo.com/habbo-imaging/avatarimage?figure=hd-3095-1.ch-255-110.lg-285-68.ha-3567-0.sh-290-1408&action=std&direction=2&head_direction=2&img_format=undefined&gesture=sml&headonly=1&size=b')"></span>
                            <span class="page-content-user-space-right-side-item-nav-username">Hugoyin</span>
                            <button class="page-content-user-space-right-side-item-nav-hidden-button"></button>
                        </div>
                        <div id="user-space-dropdown" class="page-content-user-space-right-side-item-dropdown-content">
                            <a class="page-content-user-space-right-side-item-sub-text" href="/profile.php">My Profile</a>
                            <a class="page-content-user-space-right-side-item-sub-text" href="/settings_privacy.php">Settings</a>
                            <a class="page-content-user-space-right-side-item-sub-text" href="#help" target="_blank">Help</a>
                            <a class="page-content-user-space-right-side-item-sub-text" href="#logout">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <header class="page-content-header pixelated">
            <div class="page-content-max-width">
                <div class="page-content-header-column space-between" style="flex-direction: row;">
                    <span class="page-content-header-figure" style="background-image: url('https://www.habbo.com/habbo-imaging/avatarimage?figure=hd-3095-1.ch-255-110.lg-285-68.ha-3567-0.sh-290-1408&direction=2&head_direction=3&gesture=sml&action=wav&size=l')"></span>
                    <div class="page-content-header-buttons">
                        <a href="/hotel" class="page-content-header-default-button">Hotel</a>
                        <a onclick="document.getElementById('download').style.display='block';" class="page-content-header-default-button">Download</a>
                    </div>
                </div>
            </div> 
        </header>
		<div id="download" class="page-content-modal">
            <div class="page-content-modal-center">
                <div class="page-content-modal-center-form">
                    <div class="page-content-modal-center-form-head">
                        <h2 class="page-content-modal-center-form-head-title">Play with the Habbo app</h2>
                        <p class="page-content-modal-center-form-head-description">Access Habbo via the app.</p>
                        <i onclick="document.getElementById('download').style.display='none';" class="page-content-modal-center-form-head-close">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="page-content-modal-center-form-head-close-icon"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" /></svg>
                        </i>
                    </div>
                    <div class="page-content-modal-center-form-content">
                        <button class="page-content-modal-center-form-content-button-launch">Launch App</button>
						<div class="page-content-modal-center-form-content-box">
							<p class="page-content-modal-center-form-content-box-text">You are currently logging in with Hugoyin account.</p>
							<div class="page-content-modal-center-form-content-box-row">
								<img src="https://www.habbo.com/habbo-imaging/avatarimage?figure=hd-3095-1.ch-255-110.lg-285-68.ha-3567-0.sh-290-1408&action=std&direction=2&head_direction=3&img_format=undefined&gesture=sml&headonly=0&size=b" alt="Hugoyin Avatar" class="page-content-modal-center-form-content-box-figure">
								<div class="page-content-modal-center-form-content-box-column">
									<p class="page-content-modal-center-form-content-box-username">Hugoyin</p>
									<p class="page-content-modal-center-form-content-box-motto">That's a horse-habbo</p>
								</div>
							</div>
						</div>
                        <p class="page-content-modal-center-form-content-text">Haven't downloaded the Habbo app yet?</p>
                        <button class="page-content-modal-center-form-content-button-download">Download for Windows</button>
                        <button class="page-content-modal-center-form-content-button-download">Download for Mac</button>
                        <a href="#" target="_blank" class="page-content-modal-center-form-content-button-help">Help</a>
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
                <div class="page-content-nav-item">
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
            <div class="page-content-max-width" style="flex-direction: column;align-items: flex-start;">
                <div class="page-content-collider-item">
                    <div class="page-content-collider-head">
                        <span class="page-content-collider-head-icon news"></span>
                        <div class="page-content-collider-head-column">
                            <h2 class="page-content-collider-head-title">Last News</h2>
                            <p class="page-content-collider-head-description">Keep up to date with the latest hotel gossip.</p>
                        </div>
                    </div>
                    <div class="page-content-collider-content">
                        <a href="" class="page-content-collider-content-article">
                            <span class="page-content-collider-content-article-promo pixelated" style="background-image: url('https://images.habbo.com/web_images/habbo-web-articles/lpromo_habboexpress_generic.png')"></span>
                            <h2 class="page-content-collider-content-article-title">Red VS Blue</h2>
                            <div class="page-content-collider-content-article-bottom-side">
                                <div class="page-content-collider-content-article-bottom-side-avatar">
                                    <span class="page-content-collider-content-article-bottom-side-avatar-figure pixelated" style="background-image: url('https://www.habbo.com/habbo-imaging/avatarimage?figure=hd-3095-1.ch-255-110.lg-285-68.ha-3567-0.sh-290-1408&action=std&direction=2&head_direction=2&img_format=undefined&gesture=sml&headonly=1&size=b')"></span>
                                    <span class="page-content-collider-content-article-bottom-side-avatar-username">Hugoyin</span>
                                </div>
                            </div>
                        </a>
                        <a href="" class="page-content-collider-content-article">
                            <span class="page-content-collider-content-article-promo pixelated" style="background-image: url('https://images.habbo.com/web_images/habbo-web-articles/lpromo_habboexpress_generic.png')"></span>
                            <h2 class="page-content-collider-content-article-title">Red VS Blue</h2>
                            <div class="page-content-collider-content-article-bottom-side">
                                <div class="page-content-collider-content-article-bottom-side-avatar">
                                    <span class="page-content-collider-content-article-bottom-side-avatar-figure pixelated" style="background-image: url('https://www.habbo.com/habbo-imaging/avatarimage?figure=hd-3095-1.ch-255-110.lg-285-68.ha-3567-0.sh-290-1408&action=std&direction=2&head_direction=2&img_format=undefined&gesture=sml&headonly=1&size=b')"></span>
                                    <span class="page-content-collider-content-article-bottom-side-avatar-username">Hugoyin</span>
                                </div>
                            </div>
                        </a>
                        <a href="" class="page-content-collider-content-article">
                            <span class="page-content-collider-content-article-promo pixelated" style="background-image: url('https://images.habbo.com/web_images/habbo-web-articles/lpromo_habboexpress_generic.png')"></span>
                            <h2 class="page-content-collider-content-article-title">Red VS Blue</h2>
                            <div class="page-content-collider-content-article-bottom-side">
                                <div class="page-content-collider-content-article-bottom-side-avatar">
                                    <span class="page-content-collider-content-article-bottom-side-avatar-figure pixelated" style="background-image: url('https://www.habbo.com/habbo-imaging/avatarimage?figure=hd-3095-1.ch-255-110.lg-285-68.ha-3567-0.sh-290-1408&action=std&direction=2&head_direction=2&img_format=undefined&gesture=sml&headonly=1&size=b')"></span>
                                    <span class="page-content-collider-content-article-bottom-side-avatar-username">Hugoyin</span>
                                </div>
                            </div>
                        </a>
                        <a href="" class="page-content-collider-content-article">
                            <span class="page-content-collider-content-article-promo pixelated" style="background-image: url('https://images.habbo.com/web_images/habbo-web-articles/lpromo_habboexpress_generic.png')"></span>
                            <h2 class="page-content-collider-content-article-title">Red VS Blue</h2>
                            <div class="page-content-collider-content-article-bottom-side">
                                <div class="page-content-collider-content-article-bottom-side-avatar">
                                    <span class="page-content-collider-content-article-bottom-side-avatar-figure pixelated" style="background-image: url('https://www.habbo.com/habbo-imaging/avatarimage?figure=hd-3095-1.ch-255-110.lg-285-68.ha-3567-0.sh-290-1408&action=std&direction=2&head_direction=2&img_format=undefined&gesture=sml&headonly=1&size=b')"></span>
                                    <span class="page-content-collider-content-article-bottom-side-avatar-username">Hugoyin</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="page-content-collider-item">
                    <div class="page-content-collider-head">
                        <span class="page-content-collider-head-icon camera"></span>
                        <div class="page-content-collider-head-column">
                            <h2 class="page-content-collider-head-title">Last Photos</h2>
                            <p class="page-content-collider-head-description">Have a look at some of the great moments captured by Habbos around the hotel.</p>
                        </div>
                    </div>
                    <div class="page-content-collider-content">
                        <div class="page-content-collider-content-photos">
                            <span class="page-content-collider-content-photos-promo pixelated" style="background-image: url('https://habbo-stories-content.s3.amazonaws.com/servercamera/purchased/hhtr/p-6268103-1648994843217.png')"></span>
                            <div class="page-content-collider-content-photos-bottom-side">
                                <a href="profile-url" class="page-content-collider-content-photos-bottom-side-avatar">
                                    <span class="page-content-collider-content-photos-bottom-side-avatar-figure pixelated" style="background-image: url('https://www.habbo.com/habbo-imaging/avatarimage?figure=hd-3095-1.ch-255-110.lg-285-68.ha-3567-0.sh-290-1408&action=std&direction=2&head_direction=2&img_format=undefined&gesture=sml&headonly=1&size=b')"></span>
                                    <span class="page-content-collider-content-photos-bottom-side-avatar-username">Hugoyin</span>
                                </a>
                            </div>
                        </div>
                        <div class="page-content-collider-content-photos">
                            <span class="page-content-collider-content-photos-promo pixelated" style="background-image: url('https://habbo-stories-content.s3.amazonaws.com/servercamera/purchased/hhtr/p-6268103-1648994843217.png')"></span>
                            <div class="page-content-collider-content-photos-bottom-side">
                                <a href="profile-url" class="page-content-collider-content-photos-bottom-side-avatar">
                                    <span class="page-content-collider-content-photos-bottom-side-avatar-figure pixelated" style="background-image: url('https://www.habbo.com/habbo-imaging/avatarimage?figure=hd-3095-1.ch-255-110.lg-285-68.ha-3567-0.sh-290-1408&action=std&direction=2&head_direction=2&img_format=undefined&gesture=sml&headonly=1&size=b')"></span>
                                    <span class="page-content-collider-content-photos-bottom-side-avatar-username">Hugoyin</span>
                                </a>
                            </div>
                        </div>
                        <div class="page-content-collider-content-photos">
                            <span class="page-content-collider-content-photos-promo pixelated" style="background-image: url('https://habbo-stories-content.s3.amazonaws.com/servercamera/purchased/hhtr/p-6268103-1648994843217.png')"></span>
                            <div class="page-content-collider-content-photos-bottom-side">
                                <a href="profile-url" class="page-content-collider-content-photos-bottom-side-avatar">
                                    <span class="page-content-collider-content-photos-bottom-side-avatar-figure pixelated" style="background-image: url('https://www.habbo.com/habbo-imaging/avatarimage?figure=hd-3095-1.ch-255-110.lg-285-68.ha-3567-0.sh-290-1408&action=std&direction=2&head_direction=2&img_format=undefined&gesture=sml&headonly=1&size=b')"></span>
                                    <span class="page-content-collider-content-photos-bottom-side-avatar-username">Hugoyin</span>
                                </a>
                            </div>
                        </div>
                        <div class="page-content-collider-content-photos">
                            <span class="page-content-collider-content-photos-promo pixelated" style="background-image: url('https://habbo-stories-content.s3.amazonaws.com/servercamera/purchased/hhtr/p-6268103-1648994843217.png')"></span>
                            <div class="page-content-collider-content-photos-bottom-side">
                                <a href="profile-url" class="page-content-collider-content-photos-bottom-side-avatar">
                                    <span class="page-content-collider-content-photos-bottom-side-avatar-figure pixelated" style="background-image: url('https://www.habbo.com/habbo-imaging/avatarimage?figure=hd-3095-1.ch-255-110.lg-285-68.ha-3567-0.sh-290-1408&action=std&direction=2&head_direction=2&img_format=undefined&gesture=sml&headonly=1&size=b')"></span>
                                    <span class="page-content-collider-content-photos-bottom-side-avatar-username">Hugoyin</span>
                                </a>
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