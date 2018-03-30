# WordPress Environment
Starting a new WordPress project? Hit the ground running and get your new WordPress repository set up ASAP!


## Features
* WordPress as a Git submodule in /wp/
* Custom content directory in /content/ (cleaner, and also because the /wp/ submodule will be updated clearing any changes made in wp/wp-content)
* All config files in the root
    * `local-config.php`
    * `staging-config.php`
    * `wp-config.php`


## Prerequisites
Local PHP and MYSQL server (ex. MAMP)


## Installation
Clone including submodule

    git clone --recursive https://github.com/geekster909/asap-wp.git <project-name>

IF you cloned without --recursive, you must manually initialize the submodule

    git clone https://github.com/geekster909/asap-wp.git <project-name>
    git submodule update --init

Remove remote origin repository

    git remote rm origin

Update remote origin to your new repository

    git remote add origin <url>


## Configuration
Update database configurations based on environment

* local - local-config.php
* staging - staging-config.php
* production - wp-config.php


## Updating WordPress
Check current version of submodule (WordPress)
    
    git submodule status

Change into submodule directory

    cd wp

Fetch tags (versions of WP)

    git fetch --tags

Show tags (versions of WP)

    git tag

Checkout tag to update working version

    git checkout <tag>


Commit update

    cd ..
    git commit -m "WordPress Update <tag>"


## Inspiration
WordPress Skeleton - [Mark Jaquith](https://github.com/markjaquith/WordPress-Skeleton)


## Todo
Vagrant
