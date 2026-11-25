# Tally und Google Search Console – Einrichtung durch den Kontoinhaber

Stand dieser Vorbereitung: 25.11.2026. Keine Anmeldung, Kontoeinstellung, E-Mail-Zustellung oder Google-Verifizierung wurde durch diese Arbeit durchgeführt. Passwörter und Zugangsdaten gehören nicht in den Chat.

## Was auf der Website umgesetzt werden kann

- Die bisherigen Apartmentanfragen per E-Mail bleiben bestehen; kein zusätzliches Apartmentformular und keine erneut zu pflegende Apartmentauswahl in Tally nötig.
- Die Telefonnummer lässt sich als gut sichtbarer Anruf-Button darstellen.
- Die Eigentümerseite kann die vom Betreiber bestätigte Antwortzeit **innerhalb von zwei Werktagen** anzeigen.
- Nach einem tatsächlich gemeldeten erfolgreichen Tally-Abschluss kann die Website zusätzlich eine übersetzte Bestätigung anzeigen. Die native Tally-Bestätigungsseite bleibt der zuverlässige Fallback.
- Alle Website-Texte und Hinweise können Deutsch, Englisch und Spanisch anbieten. Ein eingebettetes Fremdformular wird dadurch nicht automatisch übersetzt.

## Tally: Was „mehrsprachig“ bedeutet

Die Sprache eingebauter Formularbedienelemente – beispielsweise Weiter, Zurück, Absenden und Fehlermeldungen – ist von den selbst geschriebenen Fragen, Beschreibungen, Antwortoptionen und Bestätigungstexten zu unterscheiden. Das Ändern einer Formulareinstellung übersetzt eigene Inhalte nicht automatisch.

Die aktuelle Tally-Oberfläche, ihre verfügbaren Mehrsprachigkeitsoptionen und eventuelle Tarifgrenzen konnten hier nicht verifiziert werden: Der direkte Abruf der offiziellen Tally-Hilfe wurde vom Cloud-Netzwerk mit CONNECT HTTP 403 blockiert. Deshalb wird weder eine automatische Ein-Klick-Übersetzung noch die Verfügbarkeit einer bestimmten Funktion in einem bestimmten Tarif behauptet.

Praktisches Vorgehen:

1. In [Tally](https://tally.so/) anmelden und das bestehende Eigentümerformular `Gee7GL` öffnen.
2. Die aktuellen **Settings** öffnen und die vorhandenen Sprach-/Übersetzungsoptionen ansehen. Ein Screenshot dieser Ansicht genügt zur genauen Anleitung; keine Zugangsdaten senden.
3. Alle eigenen Fragen, Beschreibungen, Antwortoptionen, Pflichtfeldhinweise und die Bestätigung vollständig ins Englische und Spanische übertragen.
4. Falls Tally im vorhandenen Konto einen vollständigen mehrsprachigen Ablauf im selben Formular anbietet, diesen nutzen und jede Sprache separat testen.
5. Falls nur die eingebauten Bedienelemente übersetzt werden, braucht es einen ausdrücklich aufgebauten Sprachablauf, etwa über Sprachwahl und bedingte Abschnitte, soweit die aktuelle Oberfläche das unterstützt. Eine robuste Alternative sind zwei übersetzte Kopien des Eigentümerformulars und getrennte Embed-URLs je Website-Sprache. Diese Option sollte erst gewählt werden, nachdem die tatsächlichen Tally-Möglichkeiten im Konto geprüft sind.
6. Für die Website nur veröffentlichte Form-/Embed-URLs mitteilen; die Sprachzuordnung wird im Code hinterlegt. Keinen unbekannten URL-Parameter als vermeintliche Komplettübersetzung verwenden.

Offizielle Anlaufstelle: [Tally Help](https://tally.so/help). Der Abruf dieser Inhalte war in der Cloud nicht möglich; die konkrete Bedienoberfläche entscheidet über die nächsten Klicks.

## Benachrichtigungen und tatsächliche Zustellung

1. Das Formular öffnen und die vorhandenen Einstellungen unter **Settings → Email notifications**, insbesondere Benachrichtigungen an den Formularinhaber (**Self email notifications**, sofern so bezeichnet), prüfen.
2. Kontrollieren, an welche E-Mail-Adresse Antworten gemeldet werden. Die Kontaktadresse `info@aurelia-apartments.de` auf der Website setzt den Tally-Empfänger nicht automatisch.
3. Gewünschte Benachrichtigungen aktivieren und speichern. Ob ein abweichender Empfänger, mehrere Empfänger oder eine individuelle Gestaltung im vorhandenen Konto/Tarif verfügbar ist, anhand der Oberfläche prüfen.
4. Falls eine Bestätigungs-E-Mail an Kunden gewünscht ist, die gesonderten Antwortenden-Benachrichtigungen prüfen. Dafür wird eine E-Mail-Frage im Formular benötigt; dies ist nicht dieselbe Einstellung wie eine Benachrichtigung an den Betreiber.
5. Nach Veröffentlichung einmal bewusst eine Testanfrage über die echte Website absenden. Anschließend **Submissions**, Betreiber-Posteingang und Spamordner kontrollieren. Die reine Anzeige einer Dankeseite beweist keine E-Mail-Zustellung.

Es wurde hier kein Formular abgeschickt und niemandem eine Nachricht gesendet.

## Bestätigungstext nach erfolgreichem Absenden

Die folgenden Texte lassen sich direkt für die native Tally-Dankeseite verwenden:

**Deutsch**

> Vielen Dank für Ihre Anfrage! Ihre Angaben wurden übermittelt. Wir melden uns innerhalb von zwei Werktagen bei Ihnen. Bei dringenden Rückfragen erreichen Sie uns unter +49 157 72119082 oder info@aurelia-apartments.de.

**English**

> Thank you for your enquiry! Your details have been submitted. We will get back to you within two working days. For urgent questions, please call +49 157 72119082 or email info@aurelia-apartments.de.

**Español**

> ¡Gracias por su consulta! Sus datos se han enviado. Nos pondremos en contacto con usted en un plazo de dos días laborables. Para consultas urgentes, puede llamarnos al +49 157 72119082 o escribir a info@aurelia-apartments.de.

Die Formulierung gilt ausschließlich nach dem tatsächlichen erfolgreichen Absenden – nicht bereits nach dem Laden des Formulars, einem Klick auf den Lade-Button oder einem beliebigen Nachrichtenereignis.

### Technischer Hinweis zum eingebetteten Formular

`Tally.FormSubmitted` ist als Tally-Embed-Ereignis bekannt; die aktuelle offizielle Ereignisdokumentation konnte wegen der Netzwerksperre nicht unabhängig abgerufen werden. Eine optionale Website-Ergänzung darf nur Nachrichten vom Ursprung `https://tally.so` und vom tatsächlichen `contentWindow` des eingebetteten `#tally-form` akzeptieren. Bei fehlendem Ereignis bleibt die native Tally-Dankeseite sichtbar. Ein lokaler Ereignis-Test ist kein Nachweis für eine reale Tally-Zustellung; der echte Formularabschluss muss nach dem Upload geprüft werden.

## Google Search Console – empfohlen: Domain-Property

Für das Google-Konto des Betreibers ist Search Console noch nicht eingerichtet. Die Website kann Sitemap, Canonical-URLs und Sprachverweise vorbereiten; die Eigentumsbestätigung erfordert einen von Google vergebenen Nachweis.

1. [Google Search Console](https://search.google.com/search-console/welcome) mit dem gewünschten Google-Konto öffnen.
2. **Domain** wählen und exakt `aurelia-apartments.de` eintragen – ohne `https://`, Pfad oder Schrägstrich.
3. Google zeigt einen persönlichen TXT-Nachweis, üblicherweise beginnend mit `google-site-verification=`. Genau diesen Wert kopieren. Dies ist ein Verifizierungsnachweis, kein Passwort. Keine Werte erfinden.
4. Bei STRATO die **Domainverwaltung → aurelia-apartments.de → Zahnrad → DNS** öffnen. Diese Domain- und DNS-Ansicht war in den bereitgestellten Screenshots vorhanden.
5. Einen **zusätzlichen TXT-Eintrag** mit Googles Wert anlegen. Den genauen Hostnamen gemäß Google-/STRATO-Anzeige verwenden; das kann je nach Oberfläche leer beziehungsweise `@` für die Hauptdomain sein. Bei Unklarheit vor dem Speichern die Eingabemaske zeigen.
6. Bestehende SPF-, DKIM-, DMARC-, MX- und andere TXT-Einträge erhalten. Der Google-Nachweis ersetzt keinen E-Mail-Eintrag.
7. Speichern, anschließend in Search Console **Bestätigen** wählen. DNS-Übernahme kann Zeit benötigen. Den Nachweis auch nach erfolgreicher Bestätigung bestehen lassen.
8. Nach dem Upload der neuen Website unter **Sitemaps** `https://aurelia-apartments.de/sitemap.xml` einreichen.
9. Mit **URL-Prüfung** die Startseite und repräsentative Apartmentseiten prüfen. Bei Bedarf die Indexierung anfordern. Eine Einreichung garantiert weder sofortige Indexierung noch eine bestimmte Platzierung.

Eine Domain-Property deckt die Domain einschließlich Subdomains sowie HTTP/HTTPS ab. Für die Website sollten trotzdem eindeutige bevorzugte HTTPS-Adressen, passende Weiterleitungen und Canonical-/Sprachverweise verwendet werden.

## Alternative: URL-Präfix-Property

Falls die DNS-Methode nicht möglich ist, `https://aurelia-apartments.de/` als URL-Präfix-Property anlegen. Google kann unter anderem eine HTML-Datei oder einen Meta-Tag anbieten:

- **HTML-Datei:** Originaldateiname und Originalinhalt müssen von Google stammen und öffentlich unter der angegebenen Adresse abrufbar sein.
- **Meta-Tag:** Den vollständigen `google-site-verification`-Tag beziehungsweise seinen echten Token vom Konto übernehmen und im HTML-Kopf bereitstellen.

Die beiden Nachweise sind kein Ersatz für einen erfundenen Testwert. Die URL-Präfix-Property bestätigt nur den gewählten Präfix. Die in diesem Projekt vorhandenen STRATO-Rewrite-Regeln müssen den echten Nachweis beim späteren Upload direkt zugänglich machen.

Offizielle Referenz: [Google – Website-Inhaberschaft bestätigen](https://support.google.com/webmasters/answer/9008080). Die oben genannten DNS-Schritte sind allgemeine Einrichtungsschritte; die tatsächliche Bestätigung ist erst nach Googles erfolgreichem Ergebnis abgeschlossen.


## Bestätigter Google-DNS-Wert dieses Projekts

Domain: aurelia-apartments.de
Typ: TXT, Hauptdomain (ohne Subdomain)
Wert: `google-site-verification=atSM2XnTZaNWhtU4Y_vQipBwWVWexmA0yiZtPFh5HrE`

Dieser Wert wurde vom Nutzer aus der Search Console übermittelt. Es wurde von hier aus noch kein DNS-Eintrag angelegt und keine Verifizierung bestätigt. Vorhandene SPF-/MX-/TXT-Einträge erhalten.
