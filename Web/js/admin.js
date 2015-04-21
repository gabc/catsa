$(init);

function init () {
    CKEDITOR.replace('editor1', {
	height: 260
    });

    $("#tabs").tabs();

    $("#acceuil").click(getAcceuilText);
    $("#contact").click(getContactText);
    $("#presentation").click(getPresentationText);
}

function getAcceuilText () {
    $.ajax({
	url: "ajax.php",
	type: "POST",
	data: {
	    action: "acceuil"
	}
    }).done(changeCkText);
}

function getContactText () {
    $.ajax({
	url: "ajax.php",
	type: "POST",
	data: {
	    action: "contact"
	}
    }).done(changeCkText);
}

function getPresentationText () {
    $.ajax({
	url: "ajax.php",
	type: "POST",
	data: {
	    action: "presentation"
	}
    }).done(changeCkText);
}

function changeCkText(data) {
    data = JSON.parse(data);
    CKEDITOR.instances['editor1'].setData(data);
}
