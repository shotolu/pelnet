function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}


var slideIndex = 0;
showSlides();

function showSlides() {

var i;
var slides = document.getElementsByClassName('mySlide');
var dots = document.getElementsByClassName('dot');
for (i = 0; i < slides.length; i++) {
	slides[i].style.display = 'none';
}
slideIndex++;
if (slideIndex > slides.length) {
	slideIndex = 1
}
for (i = 0; i < dots.length; i++) {
	dots[i].className = dots[i].className.replace('active', '');
}
slides[slideIndex-1].style.display = 'block';
dots[slideIndex-1].className += ' active';
setTimeout(showSlides, 4000);}




var coll = document.getElementsByClassName('collapsible');
var i;

for (i = 0; i < coll.length; i++) {
	coll[i].addEventListener('click', function () {
		this.classList.toggle('active');
		var content = this.nextElementSibling;
		if (content.style.display === 'block') {
			content.style.display ='none';
		} else {
			content.style.display = 'block';
		}
	});
}
