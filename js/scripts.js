

var imgList = document.getElementById("img-list").getElementsByClassName('list-img');
var slides = document.getElementById("slides");



for (var i = 0; i < imgList.length; i++) {
		imgName = imgList[i];
		imgList[i].addEventListener('click', imgSelected, false);
	}

function imgSelected() {
	this.classList.toggle('img-selected');

	// var listItem = document.createElement("LI");
	// var rawSauce = this.src;
	// var sauce = document.createTextNode(rawSauce);
	// var newListItem = listItem.appendChild(sauce);
	// slides.appendChild(listItem);
}