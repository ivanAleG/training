#! /bin/bash

# install all dependencies "php libraries, drupal libraries, modules, themes
# and patches" for drupal and after move to web folder "document root".
/usr/bin/composer install --no-interaction --no-progress --profile --prefer-dist && \
  cd /var/www/bootcamp/web;

# Install site using drus site install
# referrer: https://drushcommands.com/drush-8x/core/site-install/
# and after clear cache for reload the presentation of Drupal.
/usr/local/bin/drush si bootcamp_profile install_configure_form.enable_update_status_module=NULL install_configure_form.enable_update_status_emails=NULL --account-name=admin --account-pass=admin --db-url=mysql://drupal:drupal@127.0.0.1/drupal -y && \
  /usr/local/bin/drush cr;

#
line=$(head -n 1 /var/www/bootcamp/config/sync/system.site.yml) && \
  uuid=$(echo $line | sed 's/uuid: //g') && \
  /usr/local/bin/drush config-set "system.site" uuid "$uuid" --y && \
  /usr/local/bin/drush cr;

# clear drupal cache, after improt previous configurations and clean cache
# for apply all configurations in the presentation.
/usr/local/bin/drush cim -y && \
  /usr/local/bin/drush cr;


# Run npm install for enable all modules npm necessary for the custom theme.
cd /var/www/bootcamp/web/themes/custom/bootcamp_theme && \
  npm install && \
  gulp build:all;