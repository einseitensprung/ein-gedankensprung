# ein Gedankensprung — WordPress Theme

WordPress-Theme-Version des statischen One-Pagers unter [einseitensprung.github.io/ein-gedankensprung](https://einseitensprung.github.io/ein-gedankensprung/). Gleiches Design, gleiche Fonts, gleicher animierter Hero-Slider — nur als installierbares WP-Theme statt statischer HTML-Datei.

## Installation

1. Diesen `theme`-Ordner in `.zip` packen (der Ordnerinhalt muss direkt in der Zip liegen, nicht in einem weiteren Unterordner).
2. WP-Admin → Design → Themes → Neues Theme → Theme hochladen → Zip auswählen → Installieren → Aktivieren.
3. Fertig. `front-page.php` übernimmt automatisch die Startseite — es muss unter Einstellungen → Lesen nichts umgestellt werden.

Alternativ: Ordner direkt nach `wp-content/themes/ein-gedankensprung/` kopieren (z. B. per FTP/SFTP) und im Theme-Bildschirm aktivieren.

## Struktur

```
theme/
├── style.css          Theme-Header + komplettes CSS (inkl. @font-face)
├── functions.php       Theme-Setup, Enqueue von style.css + main.js
├── header.php           <head>, Nav, versteckte SVG-Verlaufsdefinitionen
├── front-page.php       Der eigentliche One-Pager (Hero, Über mich, Leistungen, Kontakt)
├── footer.php            Footer, Impressum-/Datenschutz-Lightboxen
├── index.php             Fallback-Template (WordPress verlangt es; wird
│                         normalerweise nicht angezeigt, da front-page.php
│                         für die Startseite immer Vorrang hat)
├── screenshot.png        Vorschaubild im Theme-Auswahlbildschirm
└── assets/
    ├── fonts/            League Spartan, Newsreader (normal + kursiv), IBM Plex Mono
    ├── img/               Portraitfoto, Social-Share-Bild (og-image.jpg)
    ├── js/main.js          Hero-Slider, Hamburger-Menü, Impressum-/Datenschutz-Dialoge
    ├── favicon.svg / .ico
    └── apple-touch-icon.png
```

## Was hardcodiert ist (und warum)

Die Inhalte (Leistungstexte, Kontaktdaten, Impressum/Datenschutz-Text) sind direkt in `front-page.php` und `footer.php` hinterlegt, nicht über Custom Fields oder den Block-Editor bearbeitbar. Das ist bewusst so: Die Seite ist ein eng an das Design gekoppeltes One-Pager-Layout (z. B. sind die Nav-Links `#ueber`/`#leistungen`/`#kontakt` feste Sprungmarken zu den Abschnitten), bei dem freie Bearbeitung über die Seitenstruktur leicht etwas kaputt machen würde. Texte lassen sich direkt in den PHP-Dateien anpassen.

Site-Titel/Beschreibung (`bloginfo('name')`/`bloginfo('description')`) werden für die `<meta>`-Tags (OG/Twitter) verwendet, falls im WP-Customizer gesetzt — sonst greift der Standardtext.

## Getestet

Die PHP-Dateien wurden manuell auf Syntax geprüft (kein lokales PHP verfügbar, um `php -l` auszuführen) und das identische Markup/CSS/JS wurde bereits als statische Seite im Browser vollständig getestet. Vor dem Live-Schalten empfiehlt sich trotzdem ein kurzer Blick auf einer Staging-WordPress-Instanz.
