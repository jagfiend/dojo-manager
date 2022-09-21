# Dojo Manager Application

### Overview

This project is a dojo management application for club owner's to:

- manage adult members details, keep insurance up to date, track gradings so on
- manage dojo events with the ability to invite members and external guests to events

Other features such as managing details of junior members; parent registration and external guest registration will be added over time.

### Local installation

To get a local copy of the project running:

@TODO - add simple docker setup

### Larastan

This project uses PHPStan via Larastan for static analysis, the code can be checked manually using this command:

``composer run stan``

### Coding Standards

This project uses ECS for coding standards, the code can be checked or fixed using these commands:

``composer run ecs:dry`` or ``composer run ecs:fix``

### Ide Helper

This project uses the Ide Helper package to assist with autocompletion and so on, the meta data for the package should be rebuilt after adding properties and methods to models using this command:

``composer run ide-helper``

### Testing

To run PHPUnit tests, run ``php artisan test``