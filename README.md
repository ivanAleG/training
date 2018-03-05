# MTA Project

This is the bootcamp website based on Drupal 8 and BLT, an open-source project template and tool that enables building, testing, using the best practices.

## Getting Started

To set up your local environment and begin developing for this project follow those steps:
* git clone git@github.com:apina-globant/training.git bootcamp

* cd bootcamp
* git clone git@github.com:geerlingguy/drupal-vm.git --branch 4.6.0 --single-branch vm
* cp tpl-drupalvm-config.yml vm/config.yml
* cd vm
* vagrant up
* vagrant ssh
* cd /var/www/bootcamp
* execute: ./drupal_install.sh