var idCreation;

$(function () {
	$(".modifierReal").click(getRealisation);
	$(".updateReal").click(updateRealisation);
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
    	$("#nomReal").val(nom);
    	$('#selectType').val(type);
    	idCreation = data["ID"];
    	// $('#selectType').val(type);
    	$('#selectCategorie').val(categorie);
    	$('#descReal').val(desc);
    	$('#previewImage').attr('src', image);
    	$('#previewImageSlideshow').attr('src', data["IMAGESLIDESHOW"]);
    	$('#checkBoxReal').prop('checked', slideshow);
    });

    $("#imageReal").removeAttr('required');
    $("#imageSlideshow").removeAttr('required');
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
    	alert("Save !");
    });
}