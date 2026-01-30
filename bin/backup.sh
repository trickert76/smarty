#!/bin/sh
cd /srv/smarty

# clean up
rm -rf var/www/backup.tar.gz

# create backup
tar -czf /tmp/backup.tar.gz .
mv /tmp/backup.tar.gz var/www/backup.tar.gz

#eof