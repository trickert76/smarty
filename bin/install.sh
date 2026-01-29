#!/bin/sh

apt update
apt upgrade -y
curl -sSL https://get.docker.com | sh
mkdir -p /srv/smarthome/etc/evcc
mkdir -p /srv/smarthome/etc/grafana/provisioning/datasources
mkdir -p /srv/smarthome/var/evcc
mkdir -p /srv/smarthome/var/grafana
mkdir -p /srv/smarthome/var/influxdb2
mkdir -p /srv/smarthome/var/www/dist
chown -R 472:472 /srv/smarthome/var/grafana
