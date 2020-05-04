<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2020 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Werbungsmanager');

define('TABLE_HEADING_ADVERT', 'Werbung');
define('TABLE_HEADING_GROUP', 'Gruppe');
define('TABLE_HEADING_SORT_ORDER', 'Sortierung');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_ACTION', 'Aktion');

define('TEXT_ADVERT_TITLE', 'Überschrift');
define('TEXT_ADVERT_URL', 'URL');
define('TEXT_ADVERT_FRAGMENT', 'Fragment');
define('TEXT_ADVERT_GROUP', 'Gruppe');
define('TEXT_ADVERT_SORT_ORDER', 'Sortierung');
define('TEXT_ADVERT_NEW_GROUP', 'ODER erstellen Sie eine neue Gruppe');
define('TEXT_ADVERT_IMAGE', 'Bild');
define('TEXT_ADVERT_IMAGE_LOCAL', 'ODER geben Sie einen lokalen Dateinamen an');
define('TEXT_ADVERT_IMAGE_TARGET', 'Ins Verzeichnis speichern');
define('TEXT_ADVERT_HTML_TEXT', 'HTML Text');

define('TEXT_ADVERT_TITLE_HELP', 'Dies wird nur für die Liste der Werbungen als Erinnerung für Sie benötigt.');
define('TEXT_ADVERT_URL_HELP', 'Fügen Sie https:// für externe Links ein, oder nur den Name für interne links (z.B. product_info.php oder advanced_search_result.php)');
define('TEXT_ADVERT_FRAGMENT_HELP', 'Wird nur in Verbindung mit intenen Links im Shop benutzt. Fragment-URL steht für (z.B.) products_id=3 oder keywords=xyz');
define('TEXT_ADVERT_SORT_HELP', 'Dies legt die Werbungssortierung innerhalb der Gruppe fest.');

define('TEXT_ADVERT_NOTE', '
<strong>Bitte beachten:</strong>
<ul>
  <li>Sie können ein Bild oder HTML-Text verwenden.</li>
  <li>Die Ausgabe des Bildes/HTML hängt von dem shopseitigem Addon ab.</li>
</ul>');
define('TEXT_INSERT_NOTE', '
<strong>Wichtige Informationen zu Bildern:</strong>
<ul>
  <li>Die Verzeichnisse für den Upload müssen über Schreibberechtigungen für <user> verfügen</li>
  <li>Füllen Sie nicht das Feld "Ins Verzeichnis speichern" aus, wenn Sie ein Bild auf den Server laden.</li>
  <li>Das "Ins Verzeichnis speichern"-Feld muss auf ein exisitierends Verzeichnis verweisen und mit einem "/" enden (z.B. adverts/ oder carousels/).</li>
</ul>');

define('TEXT_IMAGE_NONEXISTENT', 'Bild nicht vorhanden!');

define('TEXT_ADVERT_DATE_ADDED', 'hinzugefügt am: %s');
define('TEXT_ADVERT_STATUS_CHANGE', 'Status Änderung: %s');

define('TEXT_INFO_DELETE_INTRO', 'Möchten Sie diese Werbung löschen?');
define('TEXT_INFO_DELETE_IMAGE', 'Bild löschen');

define('SUCCESS_IMAGE_INSERTED', <strong>Erfolg:</strong> Neue Werbung hinzgefügt.');
define('SUCCESS_IMAGE_UPDATED', '<strong>Erfolg:</strong> Werbung wurde geändert.');
define('SUCCESS_IMAGE_REMOVED', '<strong>Erfolg:</strong> Werbung wurde gelöscht.');
define('SUCCESS_ADVERT_STATUS_UPDATED', '<strong>Erfolg:</strong> Status der Werbung geändert.');

define('ERROR_ADVERT_TITLE_REQUIRED', '<strong>Error:</strong> Überschrift benötigt.');
define('ERROR_ADVERT_GROUP_REQUIRED', '<strong>Error:</strong> Gruppe benötigt.');
define('ERROR_IMAGE_DIRECTORY_DOES_NOT_EXIST', '<strong>Error:</strong> Zielverzeichnis existiert nicht: %s');
define('ERROR_IMAGE_DIRECTORY_NOT_WRITEABLE', '<strong>Error:</strong> Zielverzeichnis ist nicht beschreibbar: %s');
define('ERROR_IMAGE_DOES_NOT_EXIST', '<strong>Error:</strong> Bild existiert nicht.');
define('ERROR_IMAGE_IS_NOT_WRITEABLE', '<strong>Error:</strong> Bild kann nicht gelöscht werden.');
define('ERROR_ADVERT_IMAGE_OR_TEXT_REQUIRED', '<strong>Error:</strong> Sie haben kein Bild oder Text hinzugefügt. Werbungen benötigen einen Text oder ein Bild.');

define('TEXT_DISPLAY_NUMBER_OF_ADVERTS', 'Zeige <b>%s</b> bis <b>%s</b> von <b>%s</b> Werbungen');
define('IMAGE_NEW_ADVERT', 'Neue Werbung');

define('TEXT_ADVERT_EXTERNAL_URL', '<i class="fas fa-external-link-alt mr-1"></i> externer Link:<br>%s');
define('TEXT_ADVERT_INTERNAL_URL', '<i class="fas fa-link mr-1"></i> interner Link:<br>%s');

define('IMAGE_IMPORT_ADVERT', 'Versuche Banner Import');
define('IMAGE_IMPORT_ADVERT_EXPLANATION', 'Dies wird Daten von den "banners" Datenbankeinträgen importieren. Eventuell müssen Sie die Daten anschließend noch anpassen, damit alles korrekt im 
Carousel angezeigt werden kann...');
define('SUCCESS_BANNERS_IMPORTED', '<strong>Erfolg:</strong> Daten aus "banners" Datenbankeinträgen importiert!');
