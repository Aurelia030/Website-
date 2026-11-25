# Version 17 bei STRATO installieren

Diese Version enthält echte Unterseiten und gemeinsame JS-/CSS-Dateien. Deshalb bitte nicht nur index.html aus der ZIP in den bisherigen Ordner kopieren.

1. ZIP entpacken und den vollständigen Ordner `Aurelia-v17` mit allen Unterordnern nach `/home/www/public/` hochladen. Dafür eignet sich ein SFTP-Programm wie Cyberduck oder FileZilla: den ganzen Ordner übertragen und die Struktur erhalten. Zugangsdaten nur im Programm eingeben, nicht im Chat. Im STRATO-Dateimanager kann gegebenenfalls ein vollständiger Ordner hochgeladen oder ein ZIP entpackt werden; diese Fähigkeiten wurden noch nicht anhand der Oberfläche bestätigt.
2. Die bestehende `/home/www/public/.htaccess` herunterladen und lokal sichern. Im STRATO-Editor NUR den bisherigen Block von `# BEGIN Aurelia static website` bis `# END Aurelia static website` durch den gesamten Inhalt von `htaccess-v17-block.txt` ersetzen. Alle übrigen vorhandenen Zeilen vollständig erhalten. Den neuen Block nicht zusätzlich unter den alten setzen.
3. Speichern und in einem privaten Browserfenster testen: Hauptdomain, `/apartments/antonius/`, `/en/apartments/antonius/`, `/es/apartamentos/antonius/`, Liste/Karte, Telefon-/E-Mail-Buttons, Datenschutz-Auswahl, Tally. Die Verfügbarkeit und Preise sind unverändert.
4. `https://aurelia-apartments.de/sitemap.xml` öffnen. Erst nach erfolgreichem Upload diese URL in der Google Search Console unter Sitemaps einreichen. Die Domain muss vorher anhand des von Google gelieferten DNS-TXT-Eintrags bestätigt sein.
5. Bei Fehlern nur den neuen Aurelia-Block durch den gesicherten alten Block ersetzen; der bisherige Ordner Aurelia-v13 bleibt für die Rückkehr erhalten.

Der Upload der neuen Dateien und die Serverumstellung sind noch vom Nutzer auszuführen. Diese Vorbereitung ändert die Live-Website nicht.

Tally-Übersetzungen, E-Mail-Benachrichtigungen und die native Dankeseite werden im Tally-Konto eingestellt; dazu die separate Anleitung beachten. Die Website zeigt zwei Werktage als bestätigte Antwortzeit und kann zusätzlich eine vertrauenswürdige Übermittlungsbestätigung des eingebetteten Formulars anzeigen. Ein erfolgreicher Versand an das richtige Postfach muss live getestet werden.

Die Markenleiste enthält derzeit Namen. Für originale farbige Logos werden die Originaldateien benötigt; fremde Logos wurden nicht nachgebaut.
