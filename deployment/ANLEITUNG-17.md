# Version 17 bei STRATO installieren

Diese Version enthält echte Unterseiten und gemeinsame JS-/CSS-Dateien. Deshalb bitte nicht nur index.html aus der ZIP in den bisherigen Ordner kopieren.

## Upload direkt im STRATO-Browser

Der hier gezeigte STRATO-Dateimanager nimmt einzelne Dateien an; sein ZIP-Menü bietet kein Entpacken. Dafür gibt es jetzt zusätzlich `downloads/aurelia-v17-entpacken.php`:

1. `Aurelia-Website-17.zip` und die Hilfsdatei `aurelia-v17-entpacken.php` direkt nach `/home/www/public/` hochladen, neben die bestehende `.htaccess` und die WordPress-Ordner. Ein vollständiger Ordnerupload und ein zusätzliches Programm sind dafür nicht nötig.
2. Den vollständigen privaten Freigabelink aus dem Chat öffnen und „Version 17 entpacken und prüfen“ anklicken. Der Freigabecode steht ausschließlich im Fragment nach `#`; die Hilfsdatei enthält nur seinen Hash. Der Code wird nicht in GitHub gespeichert.
3. Die Hilfe akzeptiert ausschließlich die geprüfte ZIP mit SHA-256 `5676731e04d99e181b3c2c87e560ec3952685f725bc6c25d875b8cd76a924261`. Sie prüft außerdem jede der 125 Website-Dateien einzeln und legt `Aurelia-v17` erst nach vollständiger Prüfung an. Ein bestehender Zielordner muss leer sein. Schreibweisen sind relevant: `Aurelia-v17` mit großem A.
4. Nach Erfolg werden nur die hochgeladene ZIP und die Entpackhilfe entfernt. Falls STRATO das Löschen verhindert, nennt die Bestätigungsseite die verbliebenen Hilfsdateien zum manuellen Entfernen. Die bisherige Installation, WordPress-Dateien und die vorhandene `.htaccess` werden nicht verändert.
5. Anschließend mit der Umschaltung ab Schritt 2 unten fortfahren. Auf STRATO selbst wurden PHP-Funktionen und Schreibrechte noch nicht überprüft; die Hilfe meldet fehlende Voraussetzungen, ohne vorhandene Dateien zu überschreiben.

Die Hilfe benötigt PHP ab 7.4 mit `ZipArchive` oder `PharData`. Beide Varianten wurden lokal mit echten HTTP-Aufrufen geprüft, einschließlich Schutz bestehender Dateien, falscher ZIPs, Verknüpfungen und automatischer Bereinigung. Es werden keine Shellbefehle, externen Downloads, Cookies oder WordPress-Zugangsdaten verwendet.

## Umschalten und prüfen

1. Den vollständigen Ordner `Aurelia-v17` mit allen Unterordnern nach `/home/www/public/` übertragen: über die Browser-Hilfe oben oder alternativ per SFTP. Bei SFTP den ganzen Ordner samt Struktur übertragen und Zugangsdaten nur im eigenen Programm eingeben. Wenn die Browser-Hilfe bereits Erfolg gemeldet hat, ist dieser Schritt erledigt.
2. Die bestehende `/home/www/public/.htaccess` herunterladen und lokal sichern. Im STRATO-Editor NUR den bisherigen Block von `# BEGIN Aurelia static website` bis `# END Aurelia static website` durch den gesamten Inhalt von `htaccess-v17-block.txt` ersetzen. Alle übrigen vorhandenen Zeilen vollständig erhalten. Den neuen Block nicht zusätzlich unter den alten setzen.
3. Speichern und in einem privaten Browserfenster testen: Hauptdomain, `/apartments/antonius/`, `/en/apartments/antonius/`, `/es/apartamentos/antonius/`, Liste/Karte, Telefon-/E-Mail-Buttons, Datenschutz-Auswahl, Tally. Die Verfügbarkeit und Preise sind unverändert.
4. `https://aurelia-apartments.de/sitemap.xml` öffnen. Erst nach erfolgreichem Upload diese URL in der Google Search Console unter Sitemaps einreichen. Die Domain muss vorher anhand des von Google gelieferten DNS-TXT-Eintrags bestätigt sein.
5. Bei Fehlern nur den neuen Aurelia-Block durch den gesicherten alten Block ersetzen; der bisherige Ordner Aurelia-v13 bleibt für die Rückkehr erhalten.

Der Upload der neuen Dateien und die Serverumstellung sind noch vom Nutzer auszuführen. Diese Vorbereitung ändert die Live-Website nicht.

Tally-Übersetzungen, E-Mail-Benachrichtigungen und die native Dankeseite werden im Tally-Konto eingestellt; dazu die separate Anleitung beachten. Die Website zeigt zwei Werktage als bestätigte Antwortzeit und kann zusätzlich eine vertrauenswürdige Übermittlungsbestätigung des eingebetteten Formulars anzeigen. Ein erfolgreicher Versand an das richtige Postfach muss live getestet werden.

Die Markenleiste enthält derzeit Namen. Für originale farbige Logos werden die Originaldateien benötigt; fremde Logos wurden nicht nachgebaut.
