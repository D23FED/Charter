/* global require */
/* jslint node: true */
"use strict";
// Settings
var
	gulp = require('gulp'),
	// Load plugins at runtime, instead of manually `require`-ing each one
	$ = require('gulp-load-plugins')({
		pattern: [
			'gulp-*',
			'gulp.*',
			'autoprefixer',
			'pixrem',
			'postcss-*',
			'css-*',
			'cssnano',
			'perfectionist',
			'stylefmt'
		]
	}),
	// cssnano = require('cssnano'),
	// filter = require('gulp-filter'),
	//browserSync = require('browser-sync').create(),
	// path = require('path'),
	paths = {
		source: 'src/',
		scripts: 'js/app/',
		scriptLibs: 'js/lib/',
		siteTemplate: 'template/',
		css: 'style/',
		sass: 'style/',
		dist: 'dist/',
		images: 'images/',
		components: 'components/',
		sandbox: 'sandbox/',
		lobResidential: 'res/',
		lobBusiness: 'bus/',
		lobEnterprise: 'ent/',
		lobCommon: 'com/'
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
	// PostCSS plugins
	postCssProcessors = [
		$.autoprefixer({
			// Supported browsers
			browsers: 'ie > 8, Chrome > 34,  Firefox > 34,  Safari > 5, ChromeAndroid > 17, iOS > 7, ExplorerMobile > 10',
			// Ignore @supports
			supports: false
		}),
		$.cssnano({
			//Removes unnecessary prefixes based on the browsers option.
			autoprefixer: false,
			// Reduces CSS calc expressions
			calc: false,
			// Converts between hex, hsl, rgb and CSS keywords
			colormin: false,
			//Converts between equivalent length, time & angle values
			convertValues: false,
			// Trims whitespace and semicolons
			core: false,
			// Removes comments unless marked with '!'
			discardComments: false,
			// Removes duplicated rules
			discardDuplicates: true,
			// Removes empty rules
			discardEmpty: true,
			// Removes at-rules which have the same identifier as another
			discardOverridden: false,
			// Removes at-rules that do not have any bearing on the CSS file
			discardUnused: false,
			// Trims whitespace in filter functions
			filterOptimiser: true,
			// Trims whitespace in CSS functions
			functionOptimiser: true,
			// Merge rule identifiers with different naming that do the same thing
			mergeIdents: false,
			// Collapses longhand properties into the shorthand representation,
			mergeLonghand: true,
			// Merges adjacent rules by selectors
			mergeRules: true,
			// Normalizes font & font-family declarations
			minifyFontValues: true,
			// Normalizes linear and radial gradient parameters.
			minifyGradients: true,
			// Trims whitespace from/normalizes at-rule parameters
			minifyParams: true,
			// trims & normalizes selector strings
			minifySelectors: false,
			// Ensures that only a single @charset is present in the CSS file
			normalizeCharset: true,
			// In URLs, resolve unnecessary directory traversal & unquote the value
			normalizeUrl: false,
			// Normalizes argument order
			orderedValues: true,
			// Reduces the two value syntax for background-repeat into the single value syntax
			reduceBackgroundRepeat: true,
			// Renames at-rules such as @keyframes
			reduceIdents: false,
			// Replaces `initial` keyword with actual value (if smaller)
			reduceInitial: true,
			// Normalizes position values
			reducePositions: false,
			// Normalizes transition timing
			reduceTimingFunctions: true,
			// Converts between transform functions when there is a shorthand
			reduceTransforms: false,
			// with other Postcss plugins: normalize the whitespace created by generating rules
			styleCache: false,
			// Compresses inline SVG definitions with SVGO.
			svgo: false,
			// Naturally sorts selectors for every rule, and removes duplicates.
			uniqueSelectors: false,
			// Rebases z-index values
			zindex: false
		}),
		$.postcssFontAwesome,
		$.postcssDiscardDuplicates,
		$.postcssAssets({
			loadPaths: [
				paths.dist + paths.images,
				paths.source + paths.images,
				paths.images,
				paths.source + paths.sass
			],
			relative: paths.dist
		}),
		$.cssMqpacker({ sort: true })
		// $.perfectionist({
		// 	indentSize: 4
		// }),
		// $.stylefmt()
	],
	sassIncludePaths = [
		paths.source,
		paths.source + paths.lobCommon + 'style/',
		paths.source + 'template/style/',
		paths.source + paths.lobResidential + 'style/',
		paths.source + paths.lobBusiness + 'style/'
	];
// Sass => CSS
gulp.task('style', function() {
	return gulp
		.src([
			paths.source + globs.sass,
			'!' + paths.source + '**/_component-template/**'
		])
		// Begin recording sourcemaps
		// .pipe($.sourcemaps.init())
		// Compile Sass
		.pipe($.sass({
			includePaths: sassIncludePaths,
			outputStyle: 'compressed'
		}))
		.on('error', $.sass.logError)
		// CSS post-processing
		.pipe($.postcss(postCssProcessors))
		// Replace 'content' unicode with hex code, after sass compile
		.pipe($.sassUnicode())
		// .pipe($.stylefmt)
		// Create sourcemaps
		// .pipe($.sourcemaps.write('.'))
		// Write CSS to disk
		.pipe(gulp.dest(paths.dist))
		// Ignore maps
		.pipe($.filter([
			'**',
			'!**/*.map'
			// '!dist/sandbox/**'
		]))
		.pipe($.debug({
			title: 'Output:',
			minimal: true
		}))
		.on('end', function() {
			$.util.log('Sass processing complete');
		});
});
// Concatenate and Uglify Global Template JS
gulp.task('js-global', function() {
	return gulp.src([
			paths.source + paths.siteTemplate + paths.scriptLibs + globs.scripts,
			paths.source + paths.siteTemplate + paths.scripts + globs.scripts,
			'!node_modules/**/*'
		])
		.pipe($.debug({
			title: 'Processing:'
		}))
		// .pipe($.sourcemaps.init())
		// Concat
		.pipe($.concat('script.js', {
			newLine: ';\r\n'
		}))
		// Uglify
		.pipe($.uglify())
		.pipe($.rename({
			suffix: '.min'
		}))
		// .pipe($.sourcemaps.write('.'))
		.pipe(gulp.dest(paths.dist + paths.siteTemplate + 'js/'))
		.pipe($.debug({
			title: 'Output:',
			minimal: true
		}));
});
// Copy Individual Component/Sandbox project JS to build folder
gulp.task('js-components', function() {
	return gulp.src([
			paths.source + paths.lobCommon + globs.scripts,
			paths.source + paths.lobResidential + globs.scripts,
			paths.source + paths.lobBusiness + globs.scripts,
			// paths.source + paths.lobEnterprise + globs.scripts,
			'!' + paths.source + paths.siteTemplate + globs.scripts,
			'!node_modules/**/*'
		], {
			base: './' + paths.source
		})
		.pipe(gulp.dest(paths.dist))
		.pipe($.debug({
			title: 'Output:',
			minimal: true
		}));
});
// Lint JS with ESLint
gulp.task('jsl', function() {
	return gulp.src([
			paths.source + paths.scripts + globs.scripts,
			'!node_modules/**/*'
		])
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
			'!node_modules/**/*'
		])
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
// Image compression and copying. Currently only works on images at root /images/ folder, need to expand to cover individual component images.
// Todo: replace with gulp-pipe-media
gulp.task('img', function() {
	return gulp.src(paths.source + paths.images + globs.img)
		// Prevent errors from breaking `watch` task
		.pipe($.plumber())
		// Only process new images
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
		// .pipe($.changed(paths.dist))
		.pipe(gulp.dest(paths.dist));
});
// Copy PHP to build folder
gulp.task('php', function() {
	return gulp.src(
			[paths.source + globs.php])
		// .pipe($.changed(paths.dist))
		.pipe(gulp.dest(paths.dist))
		.pipe($.debug({
			title: 'Copied:'
		}));
});
// All JS build tasks
gulp.task('js',
	gulp.parallel('js-global', 'js-components'));
// PHP + HTML
gulp.task('markup',
	gulp.parallel('php', 'html'));
// File watcher
gulp.task('watch', function() {
	// JS
	gulp.watch([
		paths.source + globs.scripts
	], gulp.parallel(['js']));
	// Sass
	gulp.watch(paths.source + globs.sass, gulp.parallel(['style']));
	// Images
	gulp.watch(paths.source + paths.images + globs.img, gulp.parallel(['img']));
	// PHP & HTML
	gulp.watch([
		paths.source + globs.php,
		paths.source + globs.html
	], gulp.parallel(['markup']));
});
// Dev
// Sass => CSS
gulp.task('s', function() {
	var f = $.filter(['**', '!**/*.map']);
	return gulp
		.src([
			paths.source + globs.sass,
			'!' + paths.source + '**/_component-template/**'
		])
		// Begin recording sourcemaps
		// .pipe($.sourcemaps.init())
		// Compile Sass
		.pipe($.sass({
			includePaths: sassIncludePaths,
			outputStyle: 'expanded'
		}))
		.on('error', $.sass.logError)
		.pipe($.postcss(postCssProcessors))
		.pipe($.sassUnicode())
		// .pipe($.sourcemaps.write())
		.pipe(gulp.dest(paths.dist))
		.pipe(f)
		.pipe($.debug({
			title: 'Dev Sass | ',
			minimal: true
		}))
		.on('end', function() {
			$.util.log('==> C S S  G O <==');
		});
});

gulp.task('devwatch', function() {
	// JS
	gulp.watch([
		paths.source + globs.scripts
	], gulp.parallel(['js']));
	// Sass
	gulp.watch(paths.source + globs.sass, gulp.parallel(['s']));
	// Images
	gulp.watch(paths.source + paths.images + globs.img, gulp.parallel(['img']));
	// PHP & HTML
	gulp.watch([
		paths.source + globs.php,
		paths.source + globs.html
	], gulp.parallel(['markup']));
});


// Default
gulp.task('default',
	gulp.parallel('style', 'js', 'markup'));
