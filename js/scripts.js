

var imgList = document.getElementById("img-list").getElementsByClassName('list-img');

for (var i = 0; i < imgList.length; i++) {
		imgList[i].addEventListener('click', imgSelected, false);
	}

function imgSelected() {
	this.classList.toggle('img-selected');
}