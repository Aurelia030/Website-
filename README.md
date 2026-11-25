# Aurelia Apartments – Version 17

Website mit eigenen, vorgerenderten Seiten auf Deutsch, Englisch und Spanisch. Deutsch bleibt Standard.

## Bei STRATO installieren

Diese Version ist ein vollständiges Paket: `downloads/Aurelia-Website-17.zip`. Den gesamten Ordner `Aurelia-v17` nach `/home/www/public/` übertragen, zum Beispiel per SFTP. Anschließend ausschließlich den bisherigen Aurelia-Block in der bestehenden root `.htaccess` durch `deployment/htaccess-v17-block.txt` ersetzen; die übrigen vorhandenen Regeln behalten. Den alten Ordner `Aurelia-v13` für die Rückkehr erhalten. Ausführliche Schritte und Tests: `deployment/ANLEITUNG-17.md`. **Nicht nur index.html hochladen.**

Die Uploads sind noch vom Nutzer auszuführen. GitHub-Änderungen verändern STRATO nicht automatisch.

## Änderungen

- Apartmentanfragen bleiben per E-Mail; Anruf-Button vergrößert und auf mobilen Apartmentseiten in der Kontaktleiste ergänzt.
- Eigentümerseite: Sanierung und Möblierung im Vordergrund, Netzwerk qualifizierter Fachbetriebe und Hauschild ergänzend. Nicht verlinkte, nach links laufende Markenleiste mit Pause und reduzierter Bewegung; Nuki ergänzt.
- Originale externe Logodateien fehlen noch: zurzeit ehrliche Namen, keine nachgebauten Logos. Siehe `deployment/PARTNER-LOGOS.md`.
- 45 saubere Adressen (15 Inhalte in drei Sprachen), individuelle Seitentitel und Beschreibungen, Canonical/hreflang, Open Graph und strukturierte Daten. Alte Hash-Einstiege werden übernommen.
- Apartmenttitel verwenden den jeweiligen Apartmentnamen. Beispiel: `/apartments/antonius/`, `/en/apartments/antonius/`, `/es/apartamentos/antonius/`.
- Hauptinhalte sind bereits im ausgelieferten HTML enthalten. Gemeinsame JS-/CSS-Dateien sind separat cachebar.
- `sitemap.xml` und `robots.txt` vorbereitet. Search Console muss im Nutzerkonto mit dem erhaltenen DNS-TXT-Eintrag bestätigt werden. Keine Indexierung garantiert oder als erfolgt behauptet.
- Zusätzliche auswählbare Bezirks-Kartenansicht mit ungefährer Stadtteillage, ohne externe Kartendienste oder genaue Wohnungsadressen. Preise und Verfügbarkeitsanzeigen aus denselben Daten wie die Liste.
- Eigentümeranfragen: bestätigte Antwortzeit zwei Werktage; ergänzende Bestätigung nur nach passendem Ereignis aus dem tatsächlich eingebetteten Tally-Frame. Native Tally-Dankeseite bleibt verfügbar.
- Preise und Verfügbarkeiten aus Version 16 unverändert: ANTONIUS 3.800 €/Monat, LEANDROS 2.800 €/Monat plus 350 € Endreinigung, BRUTUS 1.490 €/Monat plus 290 € Endreinigung.

## Tally und Google-Konto

Die Website kann keine Übersetzungen oder E-Mail-Benachrichtigungen im Tally-Konto ändern. Anleitung und vorbereitete Dankestexte: `deployment/TALLY-SEARCH-CONSOLE.md`. Es wurden keine echten Formulare abgesendet. Tatsächliche Zustellung und Spracheinstellungen sind nach dem Upload im Konto zu prüfen. Der Google-DNS-Nachweis wurde vom Nutzer geliefert; der Erfolg der Kontoverifizierung wurde von hier nicht unabhängig bestätigt.

## Quelle und Build

`src/app.html` ist die bearbeitbare App-Quelle einschließlich Übersetzungen. `node scripts/build-site.cjs` erzeugt die vorgerenderten Seiten, gemeinsamen JS-/CSS-Dateien, Sitemap und robots. Dafür werden Node.js, Playwright und Chromium benötigt. Hier wurde mit dem vorhandenen Cloud-Tooling gebaut und getestet. Root-index.html und die Unterseiten sind erzeugte Dateien. Eigenständige Offline-Ansicht: `standalone/Aurelia-Apartments-17.html`; die Produktion nutzt saubere Pfade. Frühere Versionen bleiben gesichert.

## Prüfung und offene Punkte

1076 integrierte Browserprüfungen über 45 Seiten sowie 29 gezielte Nachprüfungen der endgültigen Karten-/Sprachänderung bestanden. Alle45 Seiten auch ohne JavaScript auf echte Inhalte geprüft; Telefon/E-Mail, Links, Sprachwechsel, Karte/Filter, Marquee und Tally-Ereignisgrenzen geprüft.359 echte Apache-HTTP-Prüfungen der aktuellen Serverregeln bestanden: richtige Statuscodes, Redirects, Assets, Sitemap/robots und Schutz der erhaltenen WordPress-Dateien. Drittanbieter durch Testantworten ersetzt; kein Versand an echte Empfänger.

Offen bleiben Originalpartnerlogos, Einstellungen direkt in Tally, die Live-Prüfung nach STRATO-Upload und die bestehenden Datenschutz-Vertrags-/Speicherangaben. Neue Funktionen ersetzen diese Abgleiche nicht.
