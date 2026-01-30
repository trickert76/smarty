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
  <h2>Smarty</h2>
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
  
  <p>
  Die Docker Umgebung wird täglich um ca. 0:30 aktualisiert. Das System wird einmal im Monat um 6:30 aktualisiert. Und ein Backup erfolgt ebenfalls monatlich.
  </p>

  <h3>Wiederherstellung</h3>
  <p>
   Falls der Raspberry kaputt geht oder ersetzt werden soll, ladet die letzt Sicherung von oben herunter, kopiert sie via SSH auf den Raspberry und entpackt sie dort im Verzeichnis <code>/srv/smarty</code>.
  </p>

  <h3>Installationsanleitung</h3>
  <p>
   Diese Teil der Anleitung ist nur relevant, wenn man von null anfängt.
  </p>
  <ul>
   <li>Raspberry PI 4 4GB RAM empfohlen</li>
   <li>Raspberry PI Installer <a href="https://www.raspberrypi.com/software/" target="_new">herunterladen</a> und auf dem eigenen Rechner installieren</li>
   <li>
    Installer starten und im Wizard folgende Einträge machen:
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
    </ul>
    Dann wird das Betriebssystem auf die MicroSD Karte geschrieben
   </li>
   <li>Die MicroSD Karte in den Raspberry einlegen</li>
   <li>Raspberry Strom, Netzwerkkabel und evtl. für die Einrichtung Monitor, Tastatur und Maus anschleßen</li>
   <li>der Raspberry startet automatisch, sofern Strom anliegt</li>
   <li>via SSH einloggen oder via Terminal auf dem Rechner eine Konsole öffnen und folgende Befehle eingeben</li>
   <li><code>sudo su -</code></li>
   <li><code>cd /srv</code></li>
   <li><code>git clone https://github.com/trickert76/smarty.git</code></li>
   <li><code>cd /srv/smarty</code></li>
   <li><code>./bin/install.sh</code></li>
   <li>Der Script macht eine Aktualisierung des OS, installiert Docker und konfiguriert die Basis-Informationen für die Umgebung. Anschließend werden die Dienste gestartet.</li>
   <li>Nun muss in InfluxDB eine Organisation angelegt werden und ein allgmeiner Token erzeugt werden.</li>
   <li>Diesen Token in folgende Dateien eintragen (<code>.env</code>, <code>etc/grafana/provisioning/datasources/datasources.yml</code>)
   <li>In EVCC muss der Token via der WebUI eingetragen</li>
   <li>Damit ist das System eingerichtet.</li>
  </ul>
  <h3>Versionsverlauf</h3>
  <ul>
   <li>v1.0.0 - 30.01.2026
    <ul>
     <li>Initiale Version mit einem automatischen Upgrade Mechanismus</li>
    </ul>
   </li>
  </ul>
 </body>
</html>

