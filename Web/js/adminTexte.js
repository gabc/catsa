$(init);

var current;

function init () {
    CKEDITOR.replace('editor1', {
	height: 260
    });

    $("#tabs").tabs();

    $("#acceuil").click(getAcceuilText);
    $("#contact").click(getContactText);
    $("#presentation").click(getPresentationText);
    $("#formTexte").click(envoieTexte);

    CKEDITOR.on("instanceReady", function(event) {
    	getAcceuilText();
	});
}

function getAcceuilText () {
	current = "acceuil";
    $.ajax({
	url: "ajax.php",
	type: "POST",
	data: {
	    action: "acceuil"
	}
    }).done(changeCkText);
}

function getContactText () {
	current = "contact";
    $.ajax({
	url: "ajax.php",
	type: "POST",
	data: {
	    action: "contact"
	}
    }).done(changeCkText);
}

function getPresentationText () {
	current = "presentation";
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

function envoieTexte() {
	temp = CKEDITOR.instances['editor1'].getData();
	$.ajax({
	url: "ajax.php",
	type: "POST",
	data: {
	    action: "changeTexte",
	    text: temp,
	    current: current
	}
    }).done(function () {
    	CKEDITOR.instances['editor1'].setData(temp);
    });
}