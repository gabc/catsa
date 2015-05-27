var idCreation;
var itemType;
var nomNews;
var texteNews;

$(function () {
	if(itemType === "real"){
		$(".modifierReal").click(getRealisation);
		$(".updateReal").click(updateRealisation);
		$(".removeReal").click(getRealisation);
		$(".removeRealModal").click(removeRealisation);
	}else{ //news
		$(".modifierNews").click(getNews);
		$(".removeNewsModal").click(removeNews);
		$(".updateNews").click(updateNews);
		$(".removeNews").click(getNews);
		init(); //Ckeditor
	}
})


function getRealisation (event) {
	var divPrinc = $(event.target).closest('div').parent().parent().parent().parent();

	var desc = $(divPrinc).find(".descriptionReal").text();
	var nom = $(divPrinc).find(".nomItem").text();
	var type = $(divPrinc).find(".typeReal").text();
	var categorie = $(divPrinc).find(".categorieReal").text();
	var image = $(divPrinc).find(".imageReal").attr('src');
	var slideshow = $(divPrinc).find(".slideshowReal").is(':checked')

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
    	idCreation = data["ID"];

    	if($(event.target).hasClass("modifierReal")){//Modifier
	    	$("#nomReal").val(nom);
	    	$('#selectType').val(type);
	    	$('#selectCategorie').val(categorie);
	    	$('#descReal').val(desc);
	    	$('#previewImage').attr('src', image);
	    	$('#previewImageSlideshow').attr('src', data["IMAGESLIDESHOW"]);
	    	$('#checkBoxReal').prop('checked', slideshow);

		    $("#imageReal").removeAttr('required');
		    $("#imageSlideshow").removeAttr('required');
	    }
    });

}

function removeRealisation(){
	 $.ajax({
	url: "ajax.php",
	type: "POST",
	data: {
	    action: "removeRealisation",
	    idCreation: idCreation
	}
    }).done(function(data) {
    	$("#removeRealModal").modal("hide");
    	alert("Réalisation supprimée !");
    	location.reload();
    });
}

function updateRealisation(event){
	var divPrinc = $(event.target).closest('div');

	var desc = divPrinc.find('#descReal').val();
	var nom = divPrinc.find("#nomReal").val();
	var type = $(divPrinc).find('#selectType option:selected').text();
	var categorie = $(divPrinc).find('#selectCategorie option:selected').text();
	var slideshow = $(divPrinc).find("#checkBoxReal").is(':checked');


	var fileImage = document.getElementById("imageReal").files[0];
	var fileImageSlideshow = document.getElementById("imageReal").files[0];
	var image, imageSlideshow;

	//prendre l'ancienne image si aucune de spécifiée
	if(fileImage !== undefined){
		image = fileImage['name'];
	}else{
		image = $('#previewImage').attr('src');
	}
	if(fileImageSlideshow !== undefined){
		imageSlideshow = fileImageSlideshow['name'];
	}else{
		imageSlideshow = $('#previewImageSlideshow').attr('src');
	}
    
	console.log(imageSlideshow);

    $.ajax({
	url: "ajax.php",
	type: "POST",
	data: {
	    action: "updateRealisation",
	    idCreation: idCreation,
	    image: image,
	    imageSlideshow: imageSlideshow,
	    nom: nom,
	    type: type,
	    categorie: categorie,
	    desc: desc,
	    slideshow: slideshow
	}
    }).done(function(data) {
    	$("#stack1").modal("hide");
    	alert("Modification sauvegardée !");
    	location.reload();
    });
}

//news
function getNews (event) {	
	var divPrinc = $(event.target).closest('div').parent().parent().parent();
	nomNews = $(divPrinc).find(".nomItem").text();
	texteNews = $(divPrinc).find(".texteNews").html();

	$("#titreNews").val(nomNews);
	CKEDITOR.instances['texteNewsModal'].setData(texteNews);
}

function removeNews(){
	console.log(texteNews)
	

	console.log(nomNews)
	$.ajax({
	url: "ajax.php",
	type: "POST",
	data: {
	    action: "removeNews",
	    nom: nomNews,
	    texte: texteNews
	}
    }).done(function(data) {
    	console.log(data)
    	$("#removeNewsModal").modal("hide");
    	// alert("News supprimée !");
    	// location.reload();
    });
}

function updateNews(){
	var nouveauNom = $("#titreNews").val(); ;
	var nouveauTexte = CKEDITOR.instances['texteNewsModal'].getData();
	console.log(nouveauNom, nouveauTexte, nomNews, texteNews)
    $.ajax({
	url: "ajax.php",
	type: "POST",
	data: {
	    action: "updateNews",
	    ancienNom: nomNews,
	    ancienTexte: texteNews,
	    nouveauNom: nouveauNom,
	    nouveauTexte: nouveauTexte
	}
    }).done(function(data) {
    	console.log(data);
    	$("#modifyNewsModal").modal("hide");
    	alert("Modification sauvegardée !");
    	location.reload();
    });
}

function init () {
    CKEDITOR.replace('texteNewsModal', {
	height: 260
    });
}