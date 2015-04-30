$(function () {
	$("#previewImage").change(loadFile);
})


function loadFile(event){
	if(event.target["value"] !== ""){
		var outputId = 'previewImage';
		// if(event.srcElement["id"] === "imageBackUp"){
		// 	outputId = 'outputBack';
		//}
		var output = document.getElementById(outputId);
	    output.src = URL.createObjectURL(event.target.files[0]);
	}
}