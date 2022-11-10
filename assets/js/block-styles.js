"use strict";

if (typeof wp !== 'undefined') {
	// Unregister block styles.
	wp.domReady(() => {
		wp.blocks.unregisterBlockStyle('core/quote', 'large');
		wp.blocks.unregisterBlockStyle('core/quote', 'plain');
	});

}

