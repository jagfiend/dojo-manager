# Dojo Manager Application

### Overview

This project is a dojo management application for club owner's to:

- manage adult members details, keep insurance up to date, track gradings so on
- manage dojo events with the ability to invite members and external guests to events

Other features such as managing details of junior members; parent registration and external guest registration will be added over time.

### Local installation

To get a local copy of the project running:

1. Install / open Docker Desktop.
2. Clone this project and cd into the project root dir.
3. Add ``127.0.0.1 http://dojo-manager.local`` to your ``/etc/hosts`` file.
4. Run ``composer install`` to install PHP packages.
5. Run ``cp .env.example .env`` to create the project .env file.
6. Run ``php artisan key:generate --ansi`` to generate an application key.
7. Run ``php artisan sail:install`` and select mariadb from the install options.
8. Add ``alias sail='[ -f sail ] && sh sail || sh vendor/bin/sail'`` to your .zshrc or .bashrc.
9. Run ``sail up -d`` to start the Sail Docker containers.
10. Run ``sail artisan migrate`` to populate your local DB. 

The application should now be running at http://dojo-manager.local. Refer to the [official Sail Docs](https://laravel.com/docs/9.x/sail)
for more instructions.

### Larastan

This project uses PHPStan via Larastan for static analysis, the code can be checked manually using this command:

``sail composer run stan``

### Coding Standards

This project uses ECS for coding standards, the code can be checked or fixed using these commands:

``sail composer run ecs:dry`` or ``sail composer run ecs:fix``

### Ide Helper

This project uses the Ide Helper package to assist with autocompletion and so on, the meta data for the package should be rebuilt after adding properties and methods to models using this command:

``sail composer run ide-helper``

### Testing

To run PHPUnit tests, run ``sail artisan test``
