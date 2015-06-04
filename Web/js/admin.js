$(init);

function init () {
    activationMenu();
    try{
    	var reg = window.location.href.match(/Web\/((?:.*)admin)(?:\/(real|news))?/i);
	    if(reg[2] === undefined) {
	    	var a = $("a[href*='"+ reg[1] +"']");
	    	for(var i = 0; i < a.length; i++){
	    		if(a[i].className.match(/adminLink/)){
	    			a[i].style.backgroundColor = "#FAFFBA"
	    		}
	    	}
	    } else {
	    	var a = $("a[href*='"+ reg[1] + "/" + reg[2] +"/1']");
	    	for(var i = 0; i < a.length; i++){
	    		if(a[i].className.match(/adminLink/)){
	    			a[i].style.backgroundColor = "#FAFFBA"
	    		}
	    	}
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