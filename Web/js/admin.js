$(init);

function init () {
    activationMenu();
    var href = window.location.href.match(/.*\/(.*\.php)$/)[1];
    $("a[href='"+ href +"']").css("background-color", "black");
}

function activationMenu(){
	$(function() {
	    $( "#sideMenuAdmin" ).menu({
	      items: "> :not(.ui-widget-header)"
	    });
  	});
}