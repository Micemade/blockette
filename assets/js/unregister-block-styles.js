"use strict";

if (typeof wp !== 'undefined') {
	wp.domReady(() => {
		wp.blocks.unregisterBlockStyle('core/quote', 'large');
		wp.blocks.unregisterBlockStyle('core/quote', 'plain');
	});
}

