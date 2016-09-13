/* global require */
/* jslint node: true */
"use strict";

// Settings
var
	gulp = require('gulp'),
	$ = require('gulp-load-plugins')({
		pattern: [
			'gulp-*',
			'gulp.*',
			'autoprefixer',
			'pixrem',
			'postcss-*',
			'css-*'
		]
	}),
	//browserSync = require('browser-sync').create(),
	path = require('path'),
	paths = {
		source: 'src/',
		scripts: 'js/app/',
		scriptLibs: 'js/lib/',
		css: 'style/',
		sass: 'style/',
		dist: 'dist/',
		images: 'images/',
		components: 'components/',
		sandbox: 'sandbox/'
	},
	globs = {
		css: '**/*.css',
		sass: '**/*.scss',
		sassPartials: 'scss/**/_*.scss',
		html: '**/*.html',
		php: '**/*.php',
		markdown: '**/*.md',
		scripts: '**/*.js',
		img: '**/*.{jpg,jpeg,gif,png,svg}'
	},
	postCssProcessors = [
		$.autoprefixer({
			browsers: 'last 3 versions'
		}),
		$.pixrem({
			rootValue: 10,
			atrules: true,
			unitPrecision: 1
		}),
		$.postcssFontAwesome,
		$.postcssDiscardDuplicates,
		$.postcssAssets({
			loadPaths: [
				paths.dist + paths.images,
				paths.source + paths.images,
				paths.source + paths.sass
			],
			relative: paths.dist
		})
	],
	sassIncludePaths = [
		'src/style/',
		'style/',
	];

// Compile style
gulp.task('style', function() {
	return gulp.src([
		paths.source + globs.sass
		])
		// Output names of files being processed
		.pipe($.debug({
			title: 'Processing:'
		}))
		// Begin recording sourcemaps
		.pipe($.sourcemaps.init())
		// Compile Sass
		.pipe($.sass({
			includePaths: sassIncludePaths,
			outputStyle: 'expanded'
		})).on('error', $.sass.logError)
		// CSS post-processing
		.pipe($.postcss(postCssProcessors))
		.pipe($.sourcemaps.write('.'))
		// Write CSS to disk
		.pipe(gulp.dest(paths.dist))
		.pipe($.debug({
			title: 'Output:',
			minimal: true
		}))
		.on('end', function() {
			$.util.log('CSS Processed');
		});
});

// Concat JS
gulp.task('js', function() {
	return gulp.src([
			paths.source + paths.scriptLibs + globs.scripts,
			paths.source + paths.scripts + globs.scripts,
		])
		.pipe($.debug({
			title: 'Processing:'
		}))
		.pipe($.sourcemaps.init())
		// Concat
		.pipe($.concat('scripts.js', {newLine: ';\r\n'}))
		// Uglify
		.pipe($.uglify())
		.pipe($.rename({
			suffix: '.min'
		}))
		.pipe($.sourcemaps.write('.'))
		.pipe(gulp.dest(paths.dist))
		.pipe($.debug({
			title: 'Output:',
			minimal: true
		}));
});

// Lint  JS
gulp.task('jsl', function() {
	return gulp.src([
		paths.source + paths.scripts + globs.scripts,
		'!node_modules/**/*'])
		.pipe($.debug({
			title: 'Linting:'
		}))
		// Lint
		.pipe($.eslint({
			extends: 'eslint:recommended',
			ecmaFeatures: {
				'impliedStrict': true
			},
			rules: {
				'strict': ['off', 'global'],
				'indent': 'off',
				'no-console': 'warn',
				'no-debugger': 'warn',
				'no-extra-semi': 'warn',
				'no-empty': 'warn',
				'comma-dangle': 'warn',
				'linebreak-style': 'off'
			},
			env: {
				browser: true,
				node: true,
				amd: true,
				es6: true,
				jquery: true
			},
			globals: {
				'$': true
			}
		}))
		// Output results
		.pipe($.eslint.format());
});

// Prettify JS
gulp.task('jsp', function() {
	return gulp.src([
		paths.source + paths.scripts + globs.scripts,
		'!node_modules/**/*'])
		.pipe($.debug({
			title: 'Prettifying:'
		}))
	.pipe($.jsPrettify({
		"indent_size": 1,
		"indent_char": "	",
		"eol": "\n",
		"indent_level": 0,
		"indent_with_tabs": true,
		"preserve_newlines": true,
		"max_preserve_newlines": 2,
		"space_after_anon_function": false,
		"brace_style": "collapse",
		"keep_array_indentation": true,
		"keep_function_indentation": false,
		"space_before_conditional": true,
		"break_chained_methods": false,
		"eval_code": false,
		"unescape_strings": false,
		"wrap_line_length": 0,
		"wrap_attributes": "auto",
		"wrap_attributes_indent_size": 4,
		"end_with_newline": true
	}))
	.pipe(gulp.dest(paths.source + paths.scripts));
});

// Image compression and copying
gulp.task('img', function() {
	return gulp.src(paths.source + paths.images + globs.img)
		.pipe($.plumber())
		.pipe($.changed(paths.dist + paths.images))
		.pipe($.imagemin({
			optimizationLevel: 3,
			progressive: true,
			interlaced: true,
			multipass: true
		}))
		.pipe($.plumber.stop())
		.pipe(gulp.dest(paths.dist + paths.images))
		.pipe($.debug({
			title: 'Processing image:'
		}));
});

// Copy HTML to build folder
gulp.task('html', function() {
	return gulp.src(
			[paths.source + globs.html]
			)
	.pipe($.changed(paths.dist))
	.pipe(gulp.dest(paths.dist))
})

// Copy PHP to build folder
gulp.task('php', function() {
	return gulp.src(
			[paths.source + globs.php])
	.pipe($.changed(paths.dist))
	.pipe(gulp.dest(paths.dist))
	.pipe($.debug({
		title: 'Output:'
	}))
})

//Live reloading of changes
// gulp.task('browser-sync', function() {
// 	browserSync.init({
// 		proxy: 'charter.local',
// 		port: '8888'
// 	});
// });

// Default
gulp.task('default',
	gulp.parallel('style', 'js'));

// Default
gulp.task('markup',
	gulp.parallel('php', 'html'));

// File watcher
gulp.task('watch', function() {
	gulp.watch([
			paths.source + paths.scriptLibs + globs.scripts,
			paths.source + paths.scripts + globs.scripts,
		], gulp.parallel(['js']));
	gulp.watch(paths.source + globs.sass, gulp.parallel(['style']));
	gulp.watch(paths.source + paths.images + globs.img, gulp.parallel(['img']));
});

// Todo
/*
Browsersync
*/
