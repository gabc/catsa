$(function () {
	$(".modifierReal").click(getRealisation);
})

function getRealisation (event) {
	var divPrinc = $(event.target).closest('div').parent().parent().parent().parent();

	var desc = $(divPrinc).find(".descriptionReal").text();
	var nom = $(divPrinc).find(".nomReal").text();
	var type = $(divPrinc).find(".typeReal").text();
	var categorie = $(divPrinc).find(".categorieReal").text();
	var image = $(divPrinc).find(".imageReal").attr('src');
	var slideshow = $(divPrinc).find(".slideshowReal").is(':checked')
	console.log(categorie);
    $.ajax({
	url: "ajax.php",
	type: "POST",
	data: {
	    action: "getRealisation",
	    image: image,
	    nom: nom,
	    type: type,
	    categorie: categorie,
	    desc: desc,
	    slideshow: slideshow
	}
    }).done(function(data) {
    	data = JSON.parse(data);
    	console.log(data);
    	
    });
}