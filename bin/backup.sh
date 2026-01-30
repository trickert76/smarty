#!/bin/sh
cd /srv/smarty

# aufräumen
rm -rf var/www/backup.tar.gz

# Templates kopieren für die Seite
cp bin/*               var/www/dist/.
cp etc/cron            var/www/dist/.
cp docker-compose.yml  var/www/dist/.
cp .env                var/www/dist/env
cp var/www/index.php   var/www/dist/index.php.html

# Sicherung erstellen
tar -czf /tmp/backup.tar.gz .
mv /tmp/backup.tar.gz var/www/backup.tar.gz

