# Headless Wordpress with Laravel front

This package is experimental, don't use it for production.

##  Installation

This package is not yet available with packagist, so you have to create a repositories section in you composer.json file.

```
"repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/laravel-admin/headless-wordpress"
        }
]
```

###	Composer.json changes

Add a repositories section to you composer.json to fetch the Wordpress packagist.

```
"repositories": [
   {
	   "type": "composer",
	   "url": "https://wpackagist.org"
   }
],
```

Add some installer paths

```
"extra": {
   "installer-paths": {
	   "public/mu-plugins/{$name}": ["type:wordpress-muplugin"],
	   "public/plugins/{$name}": ["type:wordpress-plugin"],
	   "public/themes/{$name}": ["type:wordpress-theme"]
   },
   "wordpress-install-dir": "public/wordpress"
}
```

Run composer

```
composer require laravel-admin/headless-wordpress
```

Add the service provider to your config/app.php

```
LaravelAdmin\HeadlessWordpress\HeadlessWordpressServiceProvider::class,
```

Add some folders to your gitignore:

```
public/languages
public/plugins
public/upgrade
public/uploads
public/wordpress
```

Publish the public files

```
artisan vendor:publish --tag="public"
```

## Usage

* Make sure your Laravel .env is configured correctly.
* Go to /wordpress/wp-admin to start with setup your Wordpress site.
* Configure your custom post types and taxonomies within public/themes/wordplate/library/posttypes
