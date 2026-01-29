#!/bin/sh

cd /srv/smarthome
docker compose pull
docker compose up -d --remove-orphans

#eof
