#! /bin/bash

/bin/chmod 777 /var/www/bootcamp/web/sites/default/settings.php;
/bin/rm /var/www/bootcamp/web/sites/default/settings.php;
sudo -E /bin/chmod 777 /var/www/bootcamp/web/sites/default;

/usr/bin/composer install;

cd /var/www/bootcamp/web;

/usr/local/bin/drush si bootcamp_profile install_configure_form.enable_update_status_module=NULL install_configure_form.enable_update_status_emails=NULL --account-name=admin --account-pass=admin --db-url=mysql://drupal:drupal@127.0.0.1/drupal -y;

/usr/local/bin/drush cr;

line=$(head -n 1 /var/www/bootcamp/config/sync/system.site.yml);
uuid=$(echo $line | sed 's/uuid: //g');

/usr/local/bin/drush config-set "system.site" uuid "$uuid" --y;

/usr/local/bin/drush cr;

/usr/local/bin/drush cim -y;

/usr/local/bin/drush cr;
