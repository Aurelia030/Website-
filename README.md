# Aurelia Apartments – Version 14

Website in Deutsch, Englisch und Spanisch. Deutsch ist Standard; Tally bleibt vorerst deutsch.

## Version 14 bei STRATO aktualisieren

1. `downloads/Aurelia-Update-14.zip` herunterladen und entpacken.
2. Die beiden neuen WebP-Dateien aus `assets/` nach `/home/www/public/Aurelia-v13/assets/` hochladen.
3. Danach die neue `index.html` nach `/home/www/public/Aurelia-v13/` hochladen und die bisherige Datei ersetzen.
4. Hauptdomain in einem privaten Browserfenster testen: Bilder, Sprachen, Menüs, Galerien, Datenschutz-Auswahl und Formular. Die bestehende .htaccess bleibt erhalten. Der Installationsordner heißt weiterhin `Aurelia-v13`; sein Inhalt ist danach Version 14.

## Lokal ansehen und sichern

`standalone/Aurelia-Apartments-14.html` ist die eigenständige Vorschau mit allen benötigten Bildern und Schriften. Version 13 bleibt separat als Sicherung erhalten. Externe Dienste benötigen eine Internetverbindung und Einwilligung.

## Änderungen

- Mobile Textabstände an ausgeblendeten Zeilenumbrüchen korrigiert, auch Englisch/Spanisch.
- Native Touch-/Mausradnavigation statt eigener Scroll-Bremse; mobile Effekte reduziert.
- Handy-Menü mit den drei Hauptzielen; einzelne Apartments weiterhin auf der Apartmentseite und im Desktop-Menü erreichbar.
- Mobile Typografie, Header, Abstände und Karten überarbeitet.
- Eindeutige Kurzzeitangaben bei beiden Kurzzeitangeboten; der widersprüchliche Hinweis auf längere Aufenthalte ab 28 Tagen ist entfernt. Übrige Inhalte und Mietdauern bleiben erhalten.
- Berlin- und Eigentümermotiv mit gleicher Auflösung in WebP, zusammen rund 87 Prozent kleiner und früh geladen.
- Datenschutz-Auswahl mit gleichermaßen erreichbarem Ablehnen/Erlauben, separater Auswahl für Google Maps/Matterport/Tally, Widerruf und 180 Tagen lokaler Speicherung. Keine Analyse- oder Marketingwerkzeuge hinzugefügt.

## Aufrufe und offene Punkte

Die Website enthält kein eigenes Besuchertracking. Im STRATO-Kundenbereich waren die Menüpunkte Statistik und Logfiles sichtbar. Für die statische HTML-Seite sind serverseitige Webspace-/Zugriffsstatistiken relevant; ein WordPress-Analyseplugin erfasst sie nicht automatisch. Serverzugriffe können auch Bots und Ressourcenabrufe enthalten und sind nicht mit eindeutigen Besuchern gleichzusetzen.

Die Datenschutzseiten enthalten weiterhin Entwurfshinweise zu noch nicht bestätigten Vertrags-, Speicher- und Löschangaben bei STRATO/Tally. Diese tatsächlichen Einstellungen müssen weiterhin abgeglichen werden. Die neuen Einwilligungsfunktionen ersetzen diese Prüfung nicht.

## Prüfung

734 Browserchecks über 48 Seiten-/Sprachkombinationen mit 320/390/430/1440 Pixeln sowie 6 gezielte Titelbildchecks bestanden. Externe Dienste wurden dabei durch Testantworten ersetzt; es wurden keine Formulare abgeschickt. Tatsächliche Zustellung und Live-Verhalten sind nach dem STRATO-Upload zu prüfen.

Das GitHub-Update allein verändert die öffentliche STRATO-Website nicht.
