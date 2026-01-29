<html>
<head>
<title>smarthome-raspi</title>
<style>
body {
  font-family: Helvetica;
}
</style>
</head>
<body>
<h2>Smarthome</h2>
<p>
Dieses System sammelt Daten via EVCC von der Solaranlage und der Wallbox und übergibt diese Daten an eine InfluxDB. Die Daten können dann dort oder via Grafana visualisiert werden.
</p>
<h3>Links</h3>
<ul>
<li><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>:7070/">EVCC</a></li>
<li><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>:8086/">InfluxDB2</a></li>
<li><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>:3000/">Grafana</a></li>
<li><a href="backup.tar.gz">Letzte Sicherung</a></li>
</ul>
<h3>Wiederherstellung</h3>
<p>
Falls der Raspberry kaputt geht oder ersetzt werden soll, ladet die letzt Sicherung von oben herunter, kopiert sie via SSH auf den Raspberry und entpackt sie dort.
</p>
<h3>Installationsanleitung</h3>
<p>
Diese Teil der Anleitung ist nur relevant, wenn man von null anfängt.
</p>
<ul>
<li>Raspberry PI 4 4GB RAM empfohlen</li>
<li>Raspberry PI Installer <a href="https://www.raspberrypi.com/software/" target="_new">herunterladen</a> und auf dem eigenen Rechner installieren</li>
<li>Installer starten und im Wizard folgende Einträge machen:
<ul>
<li>das korrekte Modell auswählen (z.B. Raspberry PI 4)</li>
<li>Betriebssystem: Raspberry PI OS (64-bit)</li>
<li>Speicher: den korrekten Micro-SD-Card Slot auswählen.</li>
<li>Hostname wählen: evcc</li>
<li>Location setzen: Hauptstadt Berlin, Zeitzone: Europe/Berlin, Tastatur: de</li>
<li>Benutzer anlegen: Name evcc, Passwort evcc</li>
<li>WLAN konfigurieren, wenn nötig</li>
<li>SSH aktivieren, mit Passwortauthentifizierung</li>
<li>Raspberry PI Connect nicht akivieren</li>
<li>Dann den Button: Schreiben auswählen</li>
</ul>Dann wird das Betriebssystem auf die MicroSD Karte geschrieben
</li>
<li>Die MicroSD Karte in den Raspberry einlegen</li>
<li>Raspberry Strom, Netzwerkkabel und evtl. für die Einrichtung Monitor, Tastatur und Maus anschleßen</li>
<li>der Raspberry startet automatisch, sofern Strom anliegt</li>
<li>via SSH einloggen oder via Terminal auf dem Rechner eine Konsole öffnen und folgende Befehle eingeben</li>
<li><code>sudo su -</code></li>
<li><code>apt update</code></li>
<li><code>apt upgrade -y</code></li>
<li><code>curl -sSL https://get.docker.com | sh</code></li>
<li><code>mkdir -p /srv/smarthome/bin</code></li>
<li><code>mkdir -p /srv/smarthome/etc/evcc</code></li>
<li><code>mkdir -p /srv/smarthome/etc/grafana/provisioning</code></li>
<li><code>mkdir -p /srv/smarthome/var/evcc</code></li>
<li><code>mkdir -p /srv/smarthome/var/grafana</code></li>
<li><code>mkdir -p /srv/smarthome/var/influxdb2</code></li>
<li><code>mkdir -p /srv/smarthome/var/www/dist</code></li>
<li><code>chown -R 472:472 /srv/smarthome/var/grafana</code></li>
<li>Es müssen noch einige Dateien erstellt und mit Inhalt gefüllt werden.
<ul>
<li><a href="dist/backup.sh">/srv/smarthome/bin/backup.sh</a>
<li><a href="dist/update.sh">/srv/smarthome/bin/update.sh</a>
<li><a href="dist/cron">/srv/smarthome/etc/cron</a>
<li><a href="dist/index.php.html">/srv/smarthome/var/www/index.php</a>
<li><a href="dist/docker-compose.yml">/srv/smarthome/docker-compose.yml</a>
<li><a href="dist/env">/srv/smarthome/.env</a>
</ul>
</li>
<li><code>chmod 755 /srv/smarthome/bin/*</code></li> <!-- */ -->
<li><code>cron /srv/smarthome/etc/cron</code></li>
<li><code>cd /srv/smarthome</code></li>
<li><code>docker compose pull</code></li>
<li><code>docker compose up -d</code></li>
<li>Damit ist das System eingerichtet.</li>
</ul>
</body>
</html>

