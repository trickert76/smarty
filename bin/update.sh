#!/bin/sh

cd /srv/smarty

docker compose pull
docker compose up -d --remove-orphans

#eof
