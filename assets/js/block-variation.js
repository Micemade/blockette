"use strict";

if (typeof wp !== 'undefined') {
	wp.blocks.registerBlockVariation('core/group', {
		name: 'full-width-group',
		title: 'Full width group',
		attributes: {
			align: 'full',
		},
	});
}
