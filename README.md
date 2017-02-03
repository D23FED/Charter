#Charter Front-end Dev Sandbox and Component Prototyping
| Environment | URL                                                      |
| ---         | ---                                                      |
| Production  | [charter.d23.us](http://charter.d23.us/)                 |
| Staging     | [staging.charter.d23.us](http://staging.charter.d23.us/) |
| Development | [dev.charter.d23.us](http://dev.charter.d23.us/)         |

##Installation

1. `git clone https://github.com/D23FED/Charter.git`
2. `npm install`

##Site structure

| Content           | Location         |
| ---               | ---              |
| Source files      | `/src/`           |
| Production files  | `/dist/`          |

###Line of Business
Source files are divided by line of business. (Another root folder contains the default page layout template that is loaded by all individual projects.)

| Content               | Location     |
| ---                   | ---          |
| Common                | `com/`      |
| Residential           | `res/`      |
| Business              | `bus/`      |
| Enterprise            | `ent/`      |
| Default page template | `template/` |

###Creating a new project
####Sandbox/Component Template structure
**To begin a new project**, duplicate the blank project template folder into `/sandbox/` or `/components/` and rename. The blank project template folder is located at `src/sandbox/_component-template`.

Within this folder is the following structure:

| Content                                              | Location              |
| ---                                                  | ---                   |
| Style (Sass)                                         | `style/style.scss`    |
| JS                                                   | `js/script.js`        |
| Includes                                             | `inc/`                |
| `<head>` template block                              | `inc/page-header.php` |
| Footer template block (js appended before `</body>`) | `inc/page-footer.php` |
| Project Variables (title, category etc)              | `inc/variables.php`   |

The site logic will automatically look for and include these files.

####URL and File Naming Conventions
Any project files or folders that will be part of a URL should only contain lowercase letters, numbers, and hyphens, to be predictable and consistent. No spaces, underscores, or camelCasing.

* Bad: `/myAwesomeComponent/`, `/my_awesome_component/`
* Good: `my-awesome-component`

##Running tasks with Gulp

In the terminal/command line (after running `npm install` once):

| Task         | Action                                                |
| ---          | ---                                                   |
| `gulp`       | Default task, compiles/concatenates CSS and JS        |
| `gulp watch` | Begin folder watcher, compile automatically on change |

###Style
| Task         | Action              |
| ---          | ---                 |
| `gulp style` | Compile Sass to CSS |

###Javascript
| Task         | Action              |
| ---          | ---                 |
| `gulp js`            | Copies all JS to build folder, concatenates and uglifies global (non-component) JS (shorthand for running `js-global` and `js-components` in a single task) |
| `gulp js-global`     | Concatenates and uglifies only global (non-component) JS |
| `gulp js-components` | Processes and copies JS only for components and sandbox projects |
| `gulp jsl`           | Lint JS with [ESLint](http://eslint.org/) (set rules with personal [config file](http://eslint.org/docs/user-guide/configuring#using-configuration-files))  |
| `gulp jsp`           | Prettify JS                                                                                                                                                 |

###Other
| `gulp markup` | Copy PHP and HTML to build folder                                   |
| `gulp img`    | Minify images with [imagemin](https://github.com/imagemin/imagemin) |

##Spectrum Breakpoints
Naming conventions follow "small, medium" etc over "tablet, desktop" to allow flexibility in adding/removing breakpoints in the future.

By default, use mobile-first (`min-width`) media queries, unless there is a specific reason for another type.

| Name              | Size    | Shorthand |
| ---               | ---     | ---       |
| Extra Extra Small | >0      | xxs       |
| Extra Small       | ≥544px  | xs        |
| Small             | ≥768px  | sm        |
| Medium            | ≥992px  | md        |
| Large             | ≥1200px | lg        |

###Using Breakpoints with Sass
#####Media query mixin
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
	/* Small breakpoint */
	@media (min-width: 768px) {
		p {
			font-size: 20px;
		}
	}
	/* Medium breakpoint */
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
