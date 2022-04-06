$('body').append('<div class="page-load"><img src="/assets/images/loader/box.gif"></div>');

$(window).on('load', function() {
	setTimeout(removeLoader, 2000);
	console.log(
	"Mezz CMS - by Hugoyin\n" +
	"You can access front-end files for free on GitHub. https://github.com/yilmazev/Mezz-Layout\n" +
	"Join our Discord server to follow updates! https://discord.gg/rse43jwzSB\n\n" +
	"All rights reserved. Design and coding by Hugoyin.");
});

function removeLoader(){
	$( ".page-load" ).fadeOut(500, function() {
		$( ".page-load" ).remove();
	}); 
}

function dropdown() {
	document.getElementById("user-space-dropdown").classList.toggle("show");
}
  
window.onclick = function(event) {
	if (!event.target.matches('.page-content-user-space-right-side-item-nav-hidden-button')) {
		var dropdowns = document.getElementsByClassName("page-content-user-space-right-side-item-dropdown-content");
		var i;
		for (i = 0; i < dropdowns.length; i++) {
			var openDropdown = dropdowns[i];
			if (openDropdown.classList.contains('show')) {
				openDropdown.classList.remove('show');
			}
		}
	}
}