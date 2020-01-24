function toggleNewsText(num) {
	let element = document.getElementsByClassName("news_text")[num];
	
	if(element.hidden == "") {
		element.hidden = "true";
	} else {
		element.hidden = "";
	}
}

function toggleNewsImage(num) {
	let element = document.getElementsByClassName("news_image")[num];
	if(element.alt != "no image") {
		if(element.hidden == "") {
			element.hidden = "true";
		} else {
			element.hidden = "";
		}
	}
}



function toggleButtonLabel(num) {
	let element = document.getElementsByClassName("show_buttons")[num];
	if(element.innerHTML == "Показать") {
		element.innerHTML = "Скрыть";
	} else {
		element.innerHTML = "Показать";
	}
}


let buttons = document.getElementsByClassName("show_buttons");

for (let i = 0; i < buttons.length; ++i) {
	buttons[i].onclick = function() {
		toggleNewsText(i);
		toggleButtonLabel(i);
		toggleNewsImage(i);
	}
}