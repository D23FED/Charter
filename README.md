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
| Content           | Location         |
| ---               | ---              |
| Source files      | `/src`           |
| Build files       | `/dist`          |
| Global includes   | `/src/inc`       |
| Global style      | `/src/style`     |
| Third-party style | `/src/style/lib` |
| JS                | `/src/js/app`    |
| Third-party JS    | `/src/js/lib`    |

###Sandbox/Component Template structure
Blank template folder located at `src/sandbox/_template`. 

Within this folder is the following structure:

| Content           | Location     |
| ---               | ---          |
| Component includes      | `/inc`       |
| Template block: Component page `<head>` content       | `/inc/page-header.php`      |
| Template block: Component page footer content (appended before closing `<body>` tag)   | `/src/inc`       |
| Component page variables      | `/inc/variables.php`     |
| Component JS | `/js/script.js` |
| Component style                | `/style/style.scss`    |

###URL Naming Conventions
Any folders that will be part of a URL should only contain lowercase letters, numbers, and hyphens. No spaces, underscores, or camelCasing. This makes URLs more predictable and consistent

* Bad: `/myAwesomeComponent/`, `/my_awesome_component/`
* Good: `my-awesome-component`

##Running tasks with gulp
| Task | Action  |
|---|---|
| `gulp`  |  Default task, compiles/concatenates CSS and JS |
| `gulp watch`|  Begin folder watcher |
| `gulp style` | Compile Sass to CSS |
| `gulp js`| Copies all JS to build folder, concatenates and uglifies global (non-component) JS (shorthand for running `js-global` and `js-components` in a single task) |
| `gulp markup` | Copy PHP and HTML to build folder |
| `gulp img` | Minify images with [imagemin](https://github.com/imagemin/imagemin) |
| `gulp js-global`| Concatenates and uglifies only global (non-component) JS |
| `gulp js-components`| Processes and copies JS only for components and sandbox projects |
| `gulp jsl` | Lint JS with [ESLint](http://eslint.org/) (set rules with personal [config file](http://eslint.org/docs/user-guide/configuring#using-configuration-files)) |
| `gulp jsp` | Prettify JS |

##Breakpoints
Prefer generic naming convention of "small, medium" etc over "tablet, desktop" to allow flexibility in adding/removing breakpoints in the future.
(All media queries will be written in `em`s, approximate pixel values only listed for reference.)

| Name        | Size           | Shorthand |
| ---         | ---            | ---       |
| Extra Small | >0             | xs        |
| Small       | ≥34em (544px)  | sm        |
| Medium      | ≥46em (768px)  | md        |
| Large       | ≥62em (992px)  | lg        |
| Extra Large | ≥75em (1200px) | xl        |

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
	@media (min-width: 41.6875em) {
		p {
			font-size: 20px;
		}
	}
	@media (min-width: 65em) {
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
