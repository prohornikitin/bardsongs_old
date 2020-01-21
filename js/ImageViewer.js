// alert(fileNames);
// alert(currentFileIndex);

nextButton = document.getElementById("next");
previousButton = document.getElementById("previous");
image = document.getElementById("image");

nextButton.onclick = nextImage;
previousButton.onclick = previousImage;
window.onload = updateImage;

document.addEventListener('keyup', function(event) {
	console.log(event.code);
	if (event.code == 'ArrowRight') {
		nextImage();
	}
	if(event.code == 'ArrowLeft') {
		previousImage();
	}
});

function nextImage() {
	++currentFileIndex;
	updateImage();
}

function previousImage() {
	--currentFileIndex;
	updateImage();
}

function updateImage() {
	currentFileIndex += fileNames.length;
	currentFileIndex %= fileNames.length;
	image.src = fileNames[currentFileIndex];
	if(window.innerHeight > window.innerWidth) {
		if(image.height > image.width) {
			image.width = window.innerWidth/100*75;
			console.log(image.width);
		}
	} else {
		image.height = window.innerHeight/100*75;
	}
	console.log(image.clientWidth + "x" + image.clientHeight);

}


