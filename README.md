# smarty

Dieses Repository enthält alle relevanten Dateien, um einen Raspberry für EVCC und PV Historie vorzubereiten. Sinn ist es, die gesammelten Daten (neben der genaueren Steuerung der Wallbox durch EVCC) auch sinnvoll zu präsentieren.
Dazu wird EVCC als Container gestartet und dieses meldet regelmäßig die Daten an eine InfluxDB2. Von dort werden die Daten durch ein Grafana ausgelesen und in entsprechenden Dashboards präsentiert.

## Links

- EVCC - https://evcc.io
- Grafana EVCC Dashboards - https://github.com/ha-puzzles/evcc-grafana-dashboards

