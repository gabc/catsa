$(function () {
	$("#imageReal").change(loadFile);
	$("#selectType").change(stateCategorie);
})

function loadFile(event){
	console.log("d");
	if(event.target["value"] !== ""){
		var outputId = 'previewImage';
		
		var output = document.getElementById(outputId);
	    output.src = URL.createObjectURL(event.target.files[0]);
	}
}

function stateCategorie(event){
	if($( "#selectType option:selected" ).text() === "Tableau"){
		$("#selectCategorie").removeAttr("disabled");
	}else{
		$("#selectCategorie").attr("disabled", "disabled");
	}
}