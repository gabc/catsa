$(function (){
	var images = [{"image":"./img/grenouilles.jpg","caption":"Murale des Grenouilles - Chambre de Louis","link":"javascript:void($(\"#pikame\").data(\"pikachoose\").Next())","title":"Grenouille"},
					{"image":"./img/marin.jpg","caption":"Murale du Fond Marin","link":"javascript:void($(\"#pikame\").data(\"pikachoose\").Next())","title":"Marin"},
					{"image":"./img/terre.jpg","caption":"Murale Autour de la Terre - Garderie","link":"javascript:void($(\"#pikame\").data(\"pikachoose\").Next())","title":"Terre"}];

	$("#pikame").PikaChoose({bindsFinished: preventStageHoverEffect, data:images, carousel:true});
	
	$(".fancybox").fancybox({
	    openEffect      : 'elastic',
	    closeEffect     : 'elastic',

	    helpers : {
		title : {
		    type : 'inside'}}});

	googleAnalytic();
	//facebookStart();

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

    /*$(link).mouseleave(function () {
    	if (!isOnLink && !isOnId)
    	    	$(id).slideUp(400, function () {$(id).css("visibility", "hidden");});
    });
    $(id).mouseleave(function () {
    	if (!isOnLink && !isOnId)
    	    	$(id).slideUp(400, function () {$(id).css("visibility", "hidden");});
    });*/
}

function facebookStart(){
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '100',
          xfbml      : true,
          version    : 'v2.3'
        });
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/fr_FR/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
}

function preventStageHoverEffect(self){
	self.wrap.unbind('mouseenter').unbind('mouseleave');
    self.imgNav.append('<a class="tray"></a>');
    self.imgNav.show();
    self.hiddenTray = true;
    self.imgNav.find('.tray').bind('click',function(){
	    if(self.hiddenTray){
	    	self.list.parents('.jcarousel-container').animate({height:"80px"});
	    }
	    else{
	    	self.list.parents('.jcarousel-container').animate({height:"1px"});
	  	}
	     self.hiddenTray = !self.hiddenTray;
	});
	
	//      Called when page is first loaded or refreshed
	get_hash();

	//      Looks for changes in the URL hash
	$(window).bind('hashchange', function() {
		get_hash();
	});

	//      Called when we click on the tab itself
	$('.tabs_wrapper ul li').click(function() {
		var tab_id = $(this).children('a').attr('rel');
		//      Update the hash in the url
		window.location.hash = tab_id;
		//      Do nothing when tab is clicked
		return false;
	});	 
}

function get_hash(){
	//      Function that gets the hash from URL
	 if (window.location.hash) {
		//      Get the hash from URL
		var url = window.location.hash;

		//      Remove the #
		var current_hash = url.substring(1);

		//      Split the IDs with comma
		var current_hashes = current_hash.split(",");

		//      Loop over the array and activate the tabs if more then one in URL hash
		$.each(current_hashes, function(i, v){
		    set_tab($('a[rel="'+v+'"]').parent().parent().parent().attr('id'), v);
		});
	}
}

function googleAnalytic(){
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-11550760-3']);
	_gaq.push(['_setDomainName', 'muralecatsa.com']);
	_gaq.push(['_trackPageview']);

	(function() {
	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
}
