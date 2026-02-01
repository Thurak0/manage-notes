### manage-notes

Verschiedene Benutzer können sich ihre eigenen Notizen anlegen.

Das hier sind meine ersten Schritte in Laravel.

Installation:

* Projekt auschecken
* Wahrscheinlich möchte man sich einen eigenen DB-user / ein eigenes DB Schema anlegen
* Die DB-Verbindung muss dann in lokaler `.env` konfiguriert werden. Als Vorlage kann man die `.env.example` nutzen. Wenn man so wie ich PSQL verwendet hat, muss man ggf. noch Treiber nachinstallieren und PHP.ini extensions ergänzen.
* Konsole öffnen und im Projektorder durchführen:
  * `composer install`
  * `php artisan migrate --seed` sollte Daten für den Testuser anlegen. (test@example.com mit Laravel-Standard-Passwort)
  * `php artisan key:generate`
  * `npm install`
  * `npm run build`
  * `composer run dev`
* Jetzt sollte die App hoffentlich unter localhost:8000 erreichbar sein.

