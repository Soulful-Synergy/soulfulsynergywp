# Soulful Synergy WordPress

Soulful Synergy WordPress theme with Custom Post Types, Taxonomies, etc. tailored for the best User-Experience.

## Installation

### Requirements

soulfulsynergy requires the following dependencies:

-   [Node.js](https://nodejs.org/)
-   [Composer](https://getcomposer.org/)

### Setup

To start using all the tools that come with soulfulsynergy you need to install the necessary Node.js and Composer dependencies :

```sh
$ composer install
$ npm install
```

### Available CLI commands

soulfulsynergy comes packed with CLI commands tailored for WordPress theme development :

-   `composer lint:wpcs` : checks all PHP files against [PHP Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/php/).
-   `composer lint:php` : checks all PHP files for syntax errors.
-   `composer make-pot` : generates a .pot file in the `languages/` directory.
-   `npm run compile:css` : compiles SASS files to css.
-   `npm run compile:rtl` : generates an RTL stylesheet.
-   `npm run watch` : watches all SASS files and recompiles them to css when they change.
-   `npm run lint:scss` : checks all SASS files against [CSS Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/css/).
-   `npm run lint:js` : checks all JavaScript files against [JavaScript Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/javascript/).
-   `npm run bundle` : generates a .zip archive for distribution, excluding development and system files.
