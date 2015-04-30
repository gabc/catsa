$(function () {
	$("#imageReal").change(loadFile);
})


function loadFile(event){
	console.log("d");
	if(event.target["value"] !== ""){
		var outputId = 'previewImage';
		
		var output = document.getElementById(outputId);
	    output.src = URL.createObjectURL(event.target.files[0]);
	}
}