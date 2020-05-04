<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2020 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Datenbanksicherung'); 

define('TABLE_HEADING_TITLE', 'Titel');
define('TABLE_HEADING_FILE_DATE', 'Datum');
define('TABLE_HEADING_FILE_SIZE', 'Größe');
define('TABLE_HEADING_ACTION', 'Aktion');

define('TEXT_INFO_HEADING_NEW_BACKUP', 'Neue Sicherung');
define('TEXT_INFO_HEADING_RESTORE_LOCAL', 'Lokal wiederherstellen');
define('TEXT_INFO_NEW_BACKUP', 'Bitte den Sicherungsprozess AUF KEINEN FALL unterbrechen. Dieser kann einige Minuten in Anspruch nehmen.');
define('TEXT_INFO_UNPACK', '<br><br>(nach dem die Dateien aus dem Archiv extrahiert wurden)');
define('TEXT_INFO_RESTORE', 'Den Wiederherstellungsprozess AUF KEINEN FALL unterbrechen.<br><br>Je grösser die Sicherungsdatei - desto länger dauert die Wiederherstellung!<br><br>Bitte wenn möglich den mysql client benutzen.<br><br>Beispiel:<br><br><b>mysql -h' . DB_SERVER . ' -u' . DB_SERVER_USERNAME . ' -p ' . DB_DATABASE . ' < %s </b> %s');
define('TEXT_INFO_RESTORE_LOCAL', 'Den Wiederherstellungsprozess AUF KEINEN FALL unterbrechen.<br><br>Je grösser die Sicherungsdatei - desto länger dauert die Wiederherstellung!');
define('TEXT_INFO_RESTORE_LOCAL_RAW_FILE', 'Die Datei, welche hochgeladen wird muss eine sogenannte raw sql Datei sein (nur Text).');
define('TEXT_INFO_DATE', 'Datum: %s');
define('TEXT_INFO_SIZE', 'Größe: %s');
define('TEXT_INFO_COMPRESSION', 'Kompression: %s');
define('TEXT_INFO_USE_GZIP', 'Mit GZIP');
define('TEXT_INFO_USE_ZIP', 'Mit ZIP');
define('TEXT_INFO_USE_NO_COMPRESSION', 'Keine Komprimierung (Raw SQL)');
define('TEXT_INFO_DOWNLOAD_ONLY', 'Nur herunterladen (nicht auf dem Server speichern)');
define('TEXT_INFO_BEST_THROUGH_HTTPS', 'Sichere HTTPS Verbindung verwenden!');
define('TEXT_DELETE_INTRO', 'Möchten Sie dieses Backup löschen?');
define('TEXT_NO_EXTENSION', 'Keine');
define('TEXT_BACKUP_DIRECTORY', 'Backup Verzeichnis:<br>%s');
define('TEXT_LAST_RESTORATION', 'Letzte Wiederherstellung:<br>%s');
define('TEXT_FORGET', 'Abbrechen');

define('ERROR_BACKUP_DIRECTORY_DOES_NOT_EXIST', '<strong>Error:</strong> Das Sicherungsverzeichnis ist nicht vorhanden.');
define('ERROR_BACKUP_DIRECTORY_NOT_WRITEABLE', '<strong>Error:</strong> Das Sicherungsverzeichnis ist schreibgeschützt.');
define('ERROR_DOWNLOAD_LINK_NOT_ACCEPTABLE', '<strong>Error:</strong> Download Link nicht akzeptabel.');

define('SUCCESS_LAST_RESTORE_CLEARED', '<strong>Erfolg:</strong> Das letzte Wiederherstellungdatum wurde gelöscht.');
define('SUCCESS_DATABASE_SAVED', '<strong>Erfolg:</strong> Die Datenbank wurde gesichert.');
define('SUCCESS_DATABASE_RESTORED', '<strong>Erfolg:</strong> Die Datenbank wurde wiederhergestellt.');
define('SUCCESS_BACKUP_DELETED', '<strong>Erfolg:</strong> Die Sicherungsdatei wurde gelöscht.');

define('TEXT_INFO_BACKUP_SIZE', '%s MB');
