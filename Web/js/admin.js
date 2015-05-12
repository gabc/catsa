$(init);

function init () {
    activationMenu();
    try{
	    var href = window.location.href.match(/.*\/(?!.*admin.php)(.*\.php)/)[1];
	    $("a[href*='"+ href +"']").css("background-color", "#FAFFBA");
	}catch (e){
		// Gotta catch 'em all!
	}
}

function activationMenu(){
	$(function() {
	    $( "#sideMenuAdmin" ).menu({
	      items: "> :not(.ui-widget-header)"
	    });
  	});
}