$(function () {
	$("#previewImage").change(loadFile);
})


function loadFile(event){
	if(event.target["value"] !== ""){
		var outputId = 'previewImage';
		
		var output = document.getElementById(outputId);
	    output.src = URL.createObjectURL(event.target.files[0]);
	}
}