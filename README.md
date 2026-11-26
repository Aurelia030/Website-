# Aurelia Apartments – Version 18

Vollständige Website auf Deutsch, Englisch und Spanisch. Deutsch bleibt Standard. Alle 45 Inhaltsseiten besitzen eigene Adressen, Canonical-/hreflang-Angaben und vorgerenderte Inhalte.

## Überarbeitung

- Lesbare Textfarben in weißen Karten innerhalb dunkler Abschnitte, insbesondere bei der kostenlosen Erstanalyse. Kompaktere Kartenhöhe und verbesserte mobile Kontaktbuttons.
- Kleinere und schnellere Partnerleiste ohne sichtbaren Pause-Button, Kategorien oder zusätzliche Überschrift. Kloeber und HVS entfernt, Keyota ergänzt; Nuki erscheint als Firmenname. Der Absatz nennt Smart Locks und Keyota-Schlüsselsysteme. Namen sind nicht verlinkt. Für fremde Originalpartnerlogos fehlen freigegebene Dateien.
- Neues Schlüsselübergabe-Motiv auf Startseite und Eigentümerseite, passend zur bestehenden Beratungsszene. Die Bildunterschrift kennzeichnet die KI-generierte Beispielszene. Bild als WebP optimiert.
- Quadratisches PNG-Favicon, SVG und Touch-Icon mit dem aktuellen Aurelia-A. Google muss die geänderte Startseite erneut crawlen, bevor die Suchanzeige das neue Symbol übernehmen kann.
- Kompakter Abschnitt „Handelsregister und Erlaubnis“. Die erforderliche Aufsichtsbehörde bleibt nach § 5 Abs. 1 Nr. 3 DDG als kurze Zeile enthalten.
- Datenschutz-Auswahl ohne Sperrung eigener Navigation, Listen, interner Bezirkskarte oder Kontaktlinks. Optionale externe Karten, Matterport und Tally werden nach Zustimmung und bewusstem Lade-Klick eingebunden. Nach Ablehnung lässt sich der einzelne Dienst weiterhin über seinen Lade-Button freigeben.

Apartmentdaten, Preise und Verfügbarkeiten sind unverändert. ANTONIUS: 3.800 €/Monat. LEANDROS: 2.800 €/Monat und 350 € Endreinigung. BRUTUS: 1.490 €/Monat und 290 € Endreinigung. Eigentümeranfragen: bestätigte Antwortzeit zwei Werktage.

## Bei STRATO installieren

Paket: `downloads/Aurelia-Website-18.zip`. Browser-Hilfe: `downloads/aurelia-v18-entpacken.php`. Beide als unveränderte Dateien nach `/home/www/public/` hochladen und den privaten Freigabelink aus dem Chat öffnen. Der Code ist nicht in GitHub gespeichert; die Hilfe enthält nur seinen Hash. Nach vollständiger Paket- und Dateiprüfung erstellt sie `Aurelia-v18`. Anschließend entfernt sie ausschließlich die hochgeladene ZIP und sich selbst.

Danach die aktuelle root `.htaccess` sichern und ausschließlich den bisherigen Aurelia-Block durch `deployment/htaccess-v18-block.txt` ersetzen. Übrige WordPress-Regeln und ältere Installationsordner erhalten. Vollständige Anleitung: [deployment/ANLEITUNG-18.md](deployment/ANLEITUNG-18.md).

GitHub-Änderungen veröffentlichen nichts automatisch bei STRATO. Das Paket enthält auch die bisherigen JS-/CSS-Dateien aus Version 17 für noch zwischengespeicherte Seiten.

## Quelle und Vorschau

`src/app.html` ist die bearbeitbare Quelle einschließlich Übersetzungen. `node scripts/build-site.cjs` erzeugt HTML, gemeinsame JS-/CSS-Dateien, Sitemap und robots. Benötigt werden Node.js, Playwright und Chromium; hier wurde mit dem vorhandenen Cloud-Tooling gebaut und geprüft.

Eigenständige Offline-Vorschau: `standalone/Aurelia-Apartments-18.html`. Frühere Versionen bleiben gesichert. Das ZIP enthält die vollständige Ordnerstruktur; einzelne index.html-Dateien reichen für die Installation nicht aus.

## Prüfung

350 Browserprüfungen bestanden: alle 45 Routen, Sprach- und Canonical-Angaben, Inhalte ohne JavaScript, unveränderte Apartmentdaten, mobile Breiten von 320 bis 760 Pixeln, Desktop, Bilder, Partnerleiste, reduzierte Bewegung und Datenschutz-Abläufe. Keine JavaScript-Fehler oder fehlenden Assets. Externe Dienste wurden durch lokale Testantworten ersetzt; kein echtes Formular wurde abgesendet.

365 HTTP-Prüfungen mit echtem lokalem Apache bestanden: Routen, Weiterleitungen einschließlich alter Versionsadressen, Statuscodes, Assets, Sitemap/robots und erhaltene WordPress-Schutzregeln. 40 Prüfungen der Entpackhilfe mit ZipArchive und PharData bestanden, einschließlich falscher ZIPs, Verknüpfungen, nichtleerer Zielordner und Bereinigung.

## Verbleibende Kontoeinstellungen

Tally-Übersetzungen, Benachrichtigungen und tatsächliche Zustellung werden im Tally-Konto gepflegt. Anleitung: `deployment/TALLY-SEARCH-CONSOLE.md`. Search-Console-Verifizierung und Live-Prüfung nach Upload erfolgen im Nutzerkonto. Datenschutz-Vertrags- und Speicherangaben sind mit den tatsächlich verwendeten Diensten abzugleichen.
