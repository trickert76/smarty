#!/bin/sh

cd /srv/smarty
git pull
chmod 755 bin/*

apt update
apt upgrade -y

crontab etc/cron

#eof
