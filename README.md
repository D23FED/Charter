#Charter Front-end Dev Sandbox and Component Prototyping
| Server           | URL                                                      |
| ---              | ---                                                      |
| Production site  | [charter.d23.us](http://charter.d23.us/)                 |
| Staging site     | [staging.charter.d23.us](http://staging.charter.d23.us/) |
| Development site | [dev.charter.d23.us](http://dev.charter.d23.us/)         |

##Installation

1. `git clone https://github.com/D23FED/Charter.git`
2. `npm install`

##Site structure
###Source files
| Content           | Location         |
| ---               | ---              |
| Source files      | `/src`           |
| Global includes   | `/src/inc`       |
| Global style      | `/src/style`     |
| Third-party style | `/src/style/lib` |
| JS                | `/src/js/app`    |
| Third-party JS    | `/src/js/lib`    |

###Production files
| Content           | Location         |
| ---               | ---              |
| Build files       | `/dist`          |

###Creating a new project
####Sandbox/Component Template structure
The blank template folder located at `src/sandbox/_component-template`.

**To begin a new project**, duplicate this folder inside `/sandbox/` or `/components/` and rename.

Within this folder is the following structure:

| Content           | Location     |
| ---               | ---          |
| Includes      | `inc/`       |
| `<head>` template blpck       | `inc/page-header.php`      |
| Footer template block (primary for js files, contents are appended before closing `<body>` tag)   | `inc/page-footer.php`       |
| Variables (project title, category etc)      | `inc/variables.php`     |
| JS | `js/script.js` |
| Style                | `style/style.scss`    |

The site logic will automatically look for and include `style/style.css`, `js/script.js`,  and under `inc/`,`page-header.php`, `page-footer.php` and `variables.php`.

###URL and File Naming Conventions
Any files or folders that will be part of a URL should only contain lowercase letters, numbers, and hyphens. No spaces, underscores, or camelCasing. This makes URLs more predictable and consistent.

* Bad: `/myAwesomeComponent/`, `/my_awesome_component/`
* Good: `my-awesome-component`

##Running tasks with gulp

In the terminal/command line (after running `npm install`):

| Task | Action  |
|---|---|
| `gulp`  |  Default task, compiles/concatenates CSS and JS |
| `gulp watch`|  Begin folder watcher |

###Style
| Task | Action  |
|---|---|
| `gulp style` | Compile Sass to CSS |

###Javascript
| `gulp js`| Copies all JS to build folder, concatenates and uglifies global (non-component) JS (shorthand for running `js-global` and `js-components` in a single task) |
| `gulp js-global`| Concatenates and uglifies only global (non-component) JS |
| `gulp js-components`| Processes and copies JS only for components and sandbox projects |
| `gulp jsl` | Lint JS with [ESLint](http://eslint.org/) (set rules with personal [config file](http://eslint.org/docs/user-guide/configuring#using-configuration-files)) |
| `gulp jsp` | Prettify JS |

###Other
| `gulp markup` | Copy PHP and HTML to build folder |
| `gulp img` | Minify images with [imagemin](https://github.com/imagemin/imagemin) |

##Breakpoints
Naming conventions follow "small, medium" etc over "tablet, desktop" to allow flexibility in adding/removing breakpoints in the future.

| Name              | Size    | Shorthand |
| ---               | ---     | ---       |
| Extra Extra Small | >0      | xxs       |
| Extra Small       | ≥544px  | xs        |
| Small             | ≥768px  | sm        |
| Medium            | ≥992px  | md        |
| Large             | ≥1200px | lg        |

###Usage in Sass
#####Mobile-first media query mixin
By default, use mobile-first (`min-width`) media queries, unless there is a specific reason for another type.
Use the `breakpoint` mixin for easy use inline. Example:

```Sass
p {
	font-size: 10px;
	// respond to medium breakpoint
	@include breakpoint(md) {
		font-size: 20px;
	}
	// respond to large breakpoint
	@include breakpoint(lg) {
		font-size: 30px;
	}
}
```

Compiles to:

```css
p {
	font-size: 10px;
	@media (min-width: 768px) {
		p {
			font-size: 20px;
		}
	}
	@media (min-width: 992px ) {
		p {
			font-size: 30px;
		}
	}
}
```

## JS Debouncing and Throttling
Events such as resizing and scrolling should be debounced or throttled to avoid unnecessary performance losses ([more info](https://css-tricks.com/the-difference-between-throttling-and-debouncing/)). A custom build of lodash is included with the `_.debounce` and `_.throttle` functions.

Example usage, debounce resize event with 100ms timeout:

```js
$(window).on('resize', _.debounce(function() {
	doStuff();
}, 100));
```
