# Version 18 bei STRATO installieren

Diese Version ist vorbereitet und lokal geprüft. Änderungen in GitHub veröffentlichen sie nicht automatisch bei STRATO.

1. `downloads/Aurelia-Website-18.zip` als unveränderte ZIP herunterladen. In Safari gegebenenfalls „Sichere Dateien nach dem Laden öffnen“ unter Einstellungen → Allgemein deaktivieren. Die ZIP nicht neu komprimieren.
2. Die ZIP und `downloads/aurelia-v18-entpacken.php` in den STRATO-Dateimanager nach `/home/www/public/` hochladen, neben die bestehende `.htaccess` und die WordPress-Ordner.
3. Den vollständigen privaten Freigabelink aus dem Chat öffnen und „Version 18 entpacken und prüfen“ anklicken. Die Hilfe prüft die vorbereitete ZIP und alle einzelnen Website-Dateien. Ein eventuell vorhandener Ordner `Aurelia-v18` muss leer sein. Die bestehende Website, WordPress und `.htaccess` werden nicht geändert. Nach Erfolg werden ausschließlich die hochgeladene ZIP und die Entpackhilfe entfernt.
4. Die aktuelle `/home/www/public/.htaccess` herunterladen und sichern. Nur den bisherigen Aurelia-Block (von `# BEGIN Aurelia static website ...` bis `# END Aurelia static website ...`, einschließlich beider Markierungen) durch den vollständigen Inhalt von `htaccess-v18-block.txt` ersetzen. Alle übrigen aktuellen Regeln erhalten. Speichern schaltet die Domain auf Version 18 um.
5. In einem privaten Browserfenster Startseite, `/eigentuemer/`, `/en/owners/`, `/es/propietarios/`, eine Apartmentseite sowie `/sitemap.xml` prüfen. Insbesondere die lesbare weiße Erstanalyse-Karte, die kompakte Partnerleiste und beide Schlüsselübergabe-Bilder ansehen. Datenschutz ablehnen und anschließend die interne Apartmentkarte und Telefon-/E-Mail-Links prüfen. Das Tally-Formular lässt sich weiterhin über den eigenen Lade-Button freigeben.
6. Bei Bedarf den gesicherten bisherigen Aurelia-Block zurücksetzen. Die bisherigen Ordner `Aurelia-v17` und `Aurelia-v13` bleiben für eine Rückkehr erhalten.

## Inhalt der Überarbeitung

- Korrigierte Textfarben in hellen Karten innerhalb dunkler Abschnitte; kompaktere Erstanalyse-Karte.
- Kleinere Partnerkarten, schnellerer Lauf, kein sichtbarer Pause-Button, keine Kategorien oder zusätzliche Überschrift. Kloeber und HVS entfernt, Keyota ergänzt. Bei reduzierter Bewegung bleibt die Leiste statisch; Fokus und Hover ermöglichen ruhiges Lesen.
- Der Absatz unter der Partnerleiste nennt Smart Locks und Keyota-Schlüsselsysteme. Originale Partnerlogos wurden mangels freigegebener Dateien nicht ergänzt; Namen sind nicht verlinkt.
- Neues KI-generiertes Schlüsselübergabe-Motiv auf Startseite und Eigentümerseite, passend zur bestehenden Beratungsszene. Die Bildunterschrift kennzeichnet es als Beispielszene.
- Das bestehende Aurelia-A als quadratisches PNG-Favicon und SVG sowie als Touch-Icon. Google muss die aktualisierte Startseite erneut crawlen, bevor die Suchanzeige das neue Symbol übernehmen kann. Die Anzeige ist nicht unmittelbar steuerbar.
- Kompakter gemeinsamer Abschnitt „Handelsregister und Erlaubnis“. Die zuständige Aufsichtsbehörde bleibt wegen § 5 Abs. 1 Nr. 3 DDG in einer kurzen Zeile enthalten.
- Der Datenschutz-Banner sperrt keine eigene Navigation, Apartmentliste, interne Bezirkskarte oder Kontaktlinks. Optionale externe Inhalte von Google Maps, Matterport und Tally werden erst nach Zustimmung und bewusstem Lade-Klick eingebunden. Eine Ablehnung ist kein dauerhafter Ausschluss: der jeweilige Lade-Button kann den einzelnen Dienst weiterhin freigeben.

Die Texte sind in Deutsch, Englisch und Spanisch umgesetzt. Apartmentdaten, Preise und Verfügbarkeiten bleiben erhalten. Die Favicon-Auswahl und die kompakte Behördenzeile beruhen auf den im Chat mitgeteilten Annahmen; eine andere Logodatei kann nachgereicht werden.
