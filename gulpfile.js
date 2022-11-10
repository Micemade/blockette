const gulp = require('gulp'),
	clean = require('gulp-clean'),
	concatCss = require('gulp-concat-css'),
	rename = require('gulp-rename'),
	uglifycss = require('gulp-uglifycss'),
	wpPot = require("gulp-wp-pot"),
	sort = require("gulp-sort");

gulp.task('watch', () => {
	gulp.watch(['assets/css/**/*.css']).on(
		'change',
		gulp.series(
			'clean-shared',
			'clean-blocks',
			'minify-shared',
			'minify-blocks'
		)
	);
});

gulp.task('clean-shared', () => {
	return gulp.src('assets/css/style-shared.min.css', {
		read: false,
		allowEmpty: true,
	})
		.pipe(clean());
});

gulp.task('clean-blocks', () => {
	return gulp.src('assets/css/blocks/*.min.css', {
		read: false,
		allowEmpty: true,
	})
		.pipe(clean());
});

gulp.task('minify-shared', () => {
	return gulp.src('assets/css/style-shared/*.css')
		.pipe(concatCss('style-shared.min.css'))
		.pipe(uglifycss())
		.pipe(gulp.dest('assets/css/'));
});

gulp.task('minify-blocks', () => {
	return gulp.src('assets/css/blocks/*.css')
		.pipe(uglifycss())
		.pipe(rename({ suffix: '.min' }))
		.pipe(gulp.dest('assets/css/blocks'));
});

gulp.task('translate', () => {
	return gulp
		.src("./**/*.php")
		.pipe(sort())
		.pipe(
			wpPot({
				domain: "blockette",
				package: "Blockette",
				bugReport: "https://micemade.com/contact/",
				lastTranslator: "Alen Sirola <alen@micemade.com>",
				team: "Micemade <alen@micemade.com>",
			})
		)
		.pipe(
			gulp.dest("./languages/blockette.pot")
		)
});

gulp.task(
	'default',
	gulp.series(
		'clean-shared',
		'clean-blocks',
		'minify-shared',
		'minify-blocks'
	)
);
