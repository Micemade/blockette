"use strict";

/*
 * Viewport entering animation on elements.
 */
var animElements = document.getElementsByClassName('blockette-animate');
// Trigger animation when element on screen.
function startAnimation(element) {
	if (element.getBoundingClientRect().top > 0 && element.getBoundingClientRect().top <= (window.innerHeight * 0.8)) {
		element.classList.add('blockette-animate-init');
	}
}
for (let element of animElements) {
	window.addEventListener('load', function () {
		startAnimation(element);
	});
	window.addEventListener('scroll', function () {
		startAnimation(element);
	});
}

/*
 * Fix position when submenu goes off screen.
 */
function submenuPosition() {
	// Find all menu items containing sub menus.
	var subMenuHolders = document.getElementsByClassName('has-child');
	// If no menu items with submenus, abort.
	if (!subMenuHolders.length) {
		return;
	}
	for (let subMenuHolder of subMenuHolders) {
		// In each container locate submenu.
		let subMenu = subMenuHolder.querySelector('.wp-block-navigation__submenu-container');
		if (subMenu) {
			// On container mouseover check and fix submenu position.
			subMenuHolder.addEventListener('mouseover', function () {
				let rect = subMenu.getBoundingClientRect(),
					subMenuRight = rect.x + subMenu.offsetWidth;
				if (subMenuRight >= window.innerWidth) {
					subMenu.style.left = 'auto';
					subMenu.style.right = '-1px';
				}
			});
		}
	}
}
window.addEventListener('load', function () {
	submenuPosition();
});
window.addEventListener('resize', function () {
	submenuPosition();
});


/*
 * Modal menu functionalities.
 */
function menuModals() {
	const menuOpeners = document.getElementsByClassName('wp-block-navigation__responsive-container-open');
	for (let menuOpener of menuOpeners) {

		menuOpener.addEventListener('click', function () {

			let menuParent = menuOpener.parentNode,
				menuModals = menuParent.getElementsByClassName('wp-block-navigation__responsive-container'),
				menuCloser = menuParent.getElementsByClassName('wp-block-navigation__responsive-container-close');

			removeReset(menuModals[0]);

			let subParents = menuModals[0].getElementsByClassName('has-child');
			for (let subParent of subParents) {
				// Get submenu container and main link element.
				let subMenuContainer = subParent.querySelectorAll('.wp-block-navigation__submenu-container');
				let subMenuLink = subParent.querySelectorAll('.wp-block-navigation-item__content');

				// Append an arrow element to each sub parent.
				let arrowElm = document.createElement("span");
				let arrow = document.createTextNode("↓");
				arrowElm.appendChild(arrow);
				arrowElm.setAttribute("class", "subarrow");
				subMenuLink[0].appendChild(arrowElm);

				// Add click event to every arrow.
				arrowElm.addEventListener('click', function (event) {
					subMenuContainer[0].classList.toggle('active');
					event.target.classList.toggle('active');
					event.preventDefault();
					event.stopPropagation();
				});

			}
			menuCloser[0].addEventListener('click', function () {
				removeReset(menuModals[0]);
			});

		});
	}
}
function removeReset(modal) {
	// Remove all added subarrows.
	let removeElms = modal.querySelectorAll('.subarrow');
	if (removeElms.length) {
		for (let removeElm of removeElms) {
			removeElm.remove();
		}
	}
	// Deactivate all active elements.
	let elmsToRemoveClass = modal.querySelectorAll('.active');
	if (elmsToRemoveClass.length) {
		for (let elm of elmsToRemoveClass) {
			elm.classList.remove('active');
		}
	}
}

window.addEventListener('load', function () {
	menuModals();
});
