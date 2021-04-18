# ASAP WordPress
Starting a new WordPress project? Hit the ground running and get your new WordPress repository set up ASAP!

## Features
  * Allows developer to easily choose their WordPress installation either as a Git submodule in `/wp/` or in its regular root directory
  * Custom content directory in `/content/`. This arrangement results in a clean, safe install (the `/wp/` submodule will be updated clearing any changes made in `/wp/wp-content`)
  * All config files in the root
      * `local-config.php`
      * `staging-config.php`
      * `wp-config.php`

## Installation Directory Considerations

You probably already know if you need to use the `/wp` installation directory. Some WordPress integrations—namely Magento—require this kind of installation.

In most cases, the default root installation of WordPress is easier to debug and maintain.

## Prerequisites
Local PHP and MYSQL server (e.g., MAMP)

## Installation
  1. Clone including submodule:
    ```
    git clone --recursive https://github.com/geekster909/asap-wp.git <project-name>
    ```

  2. _If_ you cloned without `--recursive`, you must manually initialize the submodule:
    ```
    git clone https://github.com/geekster909/asap-wp.git <project-name>
    git submodule update --init
    ```

  3. Remove remote origin repository:
    ```
    git remote rm origin
    ```

  4. Update remote origin to your new repository:
    ```
    git remote add origin <url>
    ```
  5. Select the directory you wish to use WordPress from
     1. `cd` to the WordPress environment directory
     2. Run `bash directory-config.sh` with either of the following arguments:
        - `wp`: Sets WordPress installation to submodule
        - `root`: Sets WordPress installation to root

## Configuration
Update database configurations based on environment:

  * Local: `local-config.php`
  * Staging: `staging-config.php`
  * Production: `wp-config.php`

## Updating WordPress
### Submodule
  1. Check current version of submodule (WordPress):
  ```
  git submodule status
  ```
  2. Change into submodule directory:
  ```
  cd wp
  ```
  3. Fetch tags (versions of WordPress):
  ```
  git fetch --tags
  ```
  4. Show tags (versions of WordPress):
  ```
  git tag
  ```
  5. Checkout tag to update working version:
  ```
  git checkout <tag>
  ```
  6. Commit update:
  ```
  cd ..
  git commit -m "WordPress Update <tag>"
  ```

### Root
  1. [Download the latest version of WordPress](https://wordpress.org/latest.zip)
  2. Unzip the file
  3. Copy the resulting directory into the root of this repository
  4. Commit the changes

## Inspiration
[WordPress Skeleton](https://github.com/markjaquith/WordPress-Skeleton) - Mark Jaquith
