$(function () {
	$("#imageReal").change(loadFile);
	$("#imageSlideshow").change(loadFile);
	$("#selectType").change(stateCategorie);
	stateCategorie();
})

function loadFile(event){
	if(event.target["value"] !== ""){ //Pour chrome
		var outputId;
		if(event.target.name === "imageReal")
			outputId = 'previewImage';
		else
			outputId = 'previewImageSlideshow';
		
		var output = document.getElementById(outputId);
	    output.src = URL.createObjectURL(event.target.files[0]);
	}
}

function stateCategorie(event){
	if($( "#selectType option:selected" ).text() === "Tableau"){
		 $("#selectCategorieDiv").css("visibility", "visible");
	}else{
		$("#selectCategorieDiv").css("visibility", "hidden");
	}
}