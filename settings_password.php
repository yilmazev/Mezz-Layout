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
                        <a href="/flash" class="page-content-header-default-button">Download</a>
                    </div>
                </div>
            </div> 
        </header>
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
        <div class="page-content-collider" style="background-color: transparent;">
            <div class="page-content-max-width">
                <div class="page-content-collider-item">
                    <div class="page-content-collider-content">
                        <div class="page-content-collider-content-settings">
                            <div class="page-content-collider-content-settings-left-side">
                                <a href="/settings_privacy.php" class="page-content-collider-content-settings-left-side-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="page-content-collider-content-settings-left-side-item-icon"><line x1="4" y1="21" x2="4" y2="14"></line><line x1="4" y1="10" x2="4" y2="3"></line><line x1="12" y1="21" x2="12" y2="12"></line><line x1="12" y1="8" x2="12" y2="3"></line><line x1="20" y1="21" x2="20" y2="16"></line><line x1="20" y1="12" x2="20" y2="3"></line><line x1="1" y1="14" x2="7" y2="14"></line><line x1="9" y1="8" x2="15" y2="8"></line><line x1="17" y1="16" x2="23" y2="16"></line></svg>
                                    <h3 class="page-content-collider-content-settings-left-side-item-title">Privacy</h3>
                                </a>
                                <a href="/settings_mail.php" class="page-content-collider-content-settings-left-side-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="page-content-collider-content-settings-left-side-item-icon"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                    <h3 class="page-content-collider-content-settings-left-side-item-title">Change Email Address</h3>
                                </a>
                                <a href="/settings_password.php" class="page-content-collider-content-settings-left-side-item active">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="page-content-collider-content-settings-left-side-item-icon"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                    <h3 class="page-content-collider-content-settings-left-side-item-title">Change Password</h3>
                                </a>
                                <a href="/settings_wardrope.php" class="page-content-collider-content-settings-left-side-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="page-content-collider-content-settings-left-side-item-icon"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                    <h3 class="page-content-collider-content-settings-left-side-item-title">My Wardrope</h3>
                                </a>
                            </div>
                            <div class="page-content-collider-content-settings-right-side">
                                <span class="page-content-collider-content-settings-right-side-successful">Your privacy settings have been saved. Thanks for controlling your privacy!</span>
                                <div class="page-content-collider-content-settings-right-side-item">
                                    <div class="page-content-collider-content-settings-right-side-item-column">
										<h3 class="page-content-collider-content-settings-right-side-item-title">Current password</h3>
										<input type="password" class="page-content-collider-content-settings-right-side-item-input" placeholder="">
                                    </div>
								</div>
								<div class="page-content-collider-content-settings-right-side-item">
									<div class="page-content-collider-content-settings-right-side-item-column">
										<h3 class="page-content-collider-content-settings-right-side-item-title">New password</h3>
										<input type="password" class="page-content-collider-content-settings-right-side-item-input" placeholder="">
										<p class="page-content-collider-content-settings-right-side-item-description">Choose a strong password, make sure that nobody here can just crack your password.</p>
									</div>
								</div>
                                <button class="page-content-collider-content-settings-right-side-default-button fill save">Save</button>
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