#!/bin/sh

# aufräumen
rm -rf /srv/smarthome/var/www/backup.tar.gz

# Templates kopieren für die Seite
cp /srv/smarthome/bin/* /srv/smarthome/var/www/dist/.
cp /srv/smarthome/etc/cron /srv/smarthome/var/www/dist/.
cp /srv/smarthome/docker-compose.yml /srv/smarthome/var/www/dist/.
cp /srv/smarthome/.env /srv/smarthome/var/www/dist/env
cp /srv/smarthome/var/www/index.php /srv/smarthome/var/www/dist/index.php.html

# Sicherung erstellen
tar -czf /tmp/backup.tar.gz /srv/smarthome
mv /tmp/backup.tar.gz /srv/smarthome/var/www/backup.tar.gz

