# Dojo Manager Application

### Overview

This is sketch of a dojo manager application, mostly to consolidate my recent learning around using
Larastan, ECS, unit and feature units and single action controllers.

### Local installation

To get a local copy of the project running (steps use Oh-my-zsh Docker aliasing):

1. Install / open Docker Desktop.
2. Clone this project and cd into the project root dir.
3. Add ``127.0.0.1 dojo-manager.local`` to your ``/etc/hosts`` file.
4. Create an SSL key and crt pair in docker/nginx/certs/ with mkcert or equivalent tool.
5. Run ``cp .env.example .env`` to create the project .env file, populate super user vars as appropriate. 
6. Run ``dcupd --build`` to build the Docker containers and run them. 
7. Run ``dce php composer install`` to install PHP packages. 
8. Run ``dce php php artisan key:generate --ansi`` to generate an application key. 
9. Run ``dce php php artisan migrate:fresh --seed`` to populate your local DB.

The application should now be running at https://dojo-manager.local.

### Larastan

This project uses PHPStan via Larastan for static analysis, the code can be checked manually using this command:

``dce php composer stan``

### Coding Standards

This project uses ECS for coding standards, the code can be checked or fixed using these commands:

``dce php composer ecs:dry`` or ``dce php composer ecs:fix``

### Ide Helper

This project uses the Ide Helper package to assist with autocompletion and so on, the meta data for the package should
be rebuilt after adding properties and methods to models using this command:

``dce php composer ide-helper``

### Testing

To run PHPUnit tests, run ``dce php composer test``

### TODO

- add stricter ECS rule set

