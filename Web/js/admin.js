$(init);

function init () {
    CKEDITOR.replace('editor1', {
	height: 260
    });

    $("#tabs").tabs();

    $("#acceuil").click(getAcceuilText);
}

function getAcceuilText () {
    $.ajax({
	url: "ajax.php",
	type: "POST",
	data: {
	    action: "acceuil"
	}
    }).done( function (data) {
	data = JSON.parse(data);
	CKEDITOR.instances['editor1'].setData(data)
	console.log(data);
    });
}
