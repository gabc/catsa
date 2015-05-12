$(function (){
	genMenu('tableaux.php', '#tableauxMenu');
    genMenu('murales.php', '#muralesMenu');
});

function genMenu (link, id) {
	var isOnLink = false;
	var isOnId = false;
    var done = true;

	link = "a[href$='"+link+"']";
	$(id).menu();
    $(id).css("left",$(link).position().left+"px");
    $(id).css("top",$(link).position().top +17 + "px");

    $(link).hover(function() {
        if (!done)
            return;
    	isOnLink = true;
       	$(id).css("visibility", "visible");
        $(id).slideDown(400);
    }, function (){
    	isOnLink = false;
	});

    $(id).hover(function (){
    	isOnId = true;
    }, function (){
        isOnId = false;
    });

    $(document).mousemove(function () {
    	if (!isOnLink && !isOnId) {
            done = false;
   	    	$(id).slideUp(400, function () {
                                    $(id).css("visibility", "hidden");
                                    done = true;
                               });
        }
    });
    $( id ).menu({
    focus: function( event, ui ) {}
    });
    /*$(link).mouseleave(function () {
    	if (!isOnLink && !isOnId)
    	    	$(id).slideUp(400, function () {$(id).css("visibility", "hidden");});
    });
    $(id).mouseleave(function () {
    	if (!isOnLink && !isOnId)
    	    	$(id).slideUp(400, function () {$(id).css("visibility", "hidden");});
    });*/
}

function showError () {
    $(".box").slideUp();
    $(".error").slideDown();
}

function hideError () {
    $(".box").slideUp();
    $(".error").slideUp();
}

function showSuccess () {
    $(".box").slideUp();
    $(".success").slideDown();
}

function hideSuccess () {
    $(".box").slideUp();
    $(".success").slideUp();
}