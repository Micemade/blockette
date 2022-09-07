"use strict";
var elements = document.getElementsByClassName('blockette-animate');

function startAnimation(element) {
	if (element.getBoundingClientRect().top > 0 && element.getBoundingClientRect().top <= (window.innerHeight * 0.75)) {
		element.classList.add('blockette-animate-init');
	}
}

for (let element of elements) {
	window.addEventListener('load', function () {
		startAnimation(element);
	});
	window.addEventListener('scroll', function () {
		startAnimation(element);
	});
}