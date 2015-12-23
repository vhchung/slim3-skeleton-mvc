# Slim 3 Skeleton

This is a simple skeleton project for Slim 3 that includes Doctrine, Twig, Flash messages and Monolog.

## Create your project:

    $ composer create-project -n -s dev vhchung/slim3-skeleton-mvc my-app

### Run it:

1. `$ cd my-app`
2. `$ php -S 0.0.0.0:8888 -t public/`
3. Browse to http://localhost:8888

## Key directories

* `app`: Application code
* `app/src`: All class files within the `App` namespace
* `app/templates`: Twig template files
* `cache/twig`: Twig's Autocreated cache files
* `log`: Log files
* `public`: Webserver root
* `vendor`: Composer dependencies

## Key files

* `public/index.php`: Entry point to application
* `app/settings.php`: Configuration
* `app/dependencies.php`: Services for Pimple
* `app/middleware.php`: Application middleware
* `app/routes.php`: All application routes are here
* `app/src/controllers/HomeController.php`: Controller class for the home page
* `app/src/models/Post.php`: Entity class for post table
* `app/templates/home.twig`: Twig template file for the home page
