$(function (){
	genMenu('tableaux.php', '#tableauxMenu');
    genMenu('murales.php', '#muralesMenu');
});

function genMenu (link, id) {
	var isOnLink = false;
	var isOnId = false;
	link = "a[href$='"+link+"']";
	$(id).menu();
    $(id).css("left",$(link).position().left+"px");
    
    $(link).hover(function() {
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
    	if (!isOnLink && !isOnId)
    	    	$(id).slideUp(400, function () {$(id).css("visibility", "hidden");});
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
