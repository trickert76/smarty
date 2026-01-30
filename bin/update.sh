#!/bin/sh

cd /srv/smarty
git pull
docker compose pull
docker compose up -d --remove-orphans

#eof
