$(init);

function init () {
    activationMenu();
    try{
    	var reg = window.location.href.match(/.*\/(?!.*admin.php)(.*\.php)(?:.*item=(real|news))?/);
	    // var href = window.location.href.match(/.*\/(?!.*admin.php)(.*\.php)item=(.*)/)[1];
	    if(reg[2] === undefined) {
	    	$("a[href*='"+ reg[1] +"']").css("background-color", "#FAFFBA");
	    } else {
	    	$("a[href*='"+ reg[1] + "?page=1&item=" + reg[2] +"']").css("background-color", "#FAFFBA");
	    }
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