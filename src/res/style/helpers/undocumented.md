#Undocumented Helpers
A number of helper classes are useful in specific situations but are too powerful if used incorrectly. Therefore we've a number of undocmented helper classes, to be used sparingly, that are not exposed in the Style Guide.

##Display
| Class                  | Function               |
| ----------             | ----------             |
| `.display-flex`        | `display: flex`        |
| `.display-inline-flex` | `display: inline-flex` |
| `.flex-1`              | `flex: 1`              |

##Position
| Category                  | Function                           |
| ----------                | ----------                         |
| `.vertical-center-flex`   | Vertically center, using Flexbox   |
| `.horizontal-center-flex` | Horizontally center, using Flexbox |
| `.absolute-center-flex`   | Absolutely center, using Flexbox   |

##Spacing
| Category       | Function                                      |
| ----------     | ----------                                    |
| `.p-0-sm`, etc | Spacing classes with legacy naming convention |

##Borders
| Category          | Function                                                       |
| ----------        | ----------                                                     |
| `.bd-1-gray`, etc | Border classes with legacy "width AND color" naming convention |

##Text
| Category     | Function                                                               |
| ----------   | ----------                                                             |
| `.center-sm` | Legacy class used for centering text at the smallest breakpoint (only) |
| `.text-bold` | Legacy, replaced with `.font-bold`                                     |
