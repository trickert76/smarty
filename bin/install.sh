#!/bin/sh

apt update
apt upgrade -y
curl -sSL https://get.docker.com | sh

mkdir -p etc/grafana/provisioning/datasources
mkdir -p var/evcc
mkdir -p var/grafana
mkdir -p var/influxdb2
mkdir -p var/www/dist
chown -R 472:472 var/grafana

chmod 755 bin/*

cron etc/cron

docker compose pull
docker compose up -d

#eof
