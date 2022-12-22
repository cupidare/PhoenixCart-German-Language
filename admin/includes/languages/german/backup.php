<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2022 Phoenix Cart

  Released under the GNU General Public License
*/

const HEADING_TITLE = 'Datenbanksicherung';

const TABLE_HEADING_TITLE = 'Titel';
const TABLE_HEADING_FILE_DATE = 'Datum';
const TABLE_HEADING_FILE_SIZE = 'Grösse';
const TABLE_HEADING_ACTION = 'Aktion';

const TEXT_INFO_HEADING_NEW_BACKUP = 'Neue Sicherung';
const TEXT_INFO_HEADING_RESTORE_LOCAL = 'Lokal wiederherstellen';
const TEXT_INFO_NEW_BACKUP = 'Bitte den Sicherungsprozess AUF KEINEN FALL unterbrechen. Dieser kann einige Minuten in Anspruch nehmen.';
const TEXT_INFO_UNPACK = '<br><br>(nach dem die Dateien aus dem Archiv extrahiert wurden)';
const TEXT_INFO_RESTORE = 'Den Wiederherstellungsprozess AUF KEINEN FALL unterbrechen.<br /><br />Je grösser die Sicherungsdatei - desto länger dauert die Wiederherstellung!<br /><br />Bitte wenn möglich den mysql client benutzen.<br /><br />Beispiel:<br /><br /><strong>mysql -h' . DB_SERVER . ' -u' . DB_SERVER_USERNAME . ' -p ' . DB_DATABASE . ' < %s </strong> %s';
const TEXT_INFO_RESTORE_LOCAL = 'Den Wiederherstellungsprozess AUF KEINEN FALL unterbrechen.<br><br>Je grösser die Sicherungsdatei - desto länger dauert die Wiederherstellung!';
const TEXT_INFO_RESTORE_LOCAL_RAW_FILE = 'Die Datei, welche hochgeladen wird muss eine sogenannte raw sql Datei sein (nur Text).';
const TEXT_INFO_DATE = 'Datum: %s';
const TEXT_INFO_SIZE = 'Grösse: %s';
const TEXT_INFO_COMPRESSION = 'Kompression: %s';
const TEXT_INFO_USE_GZIP = 'Mit GZIP';
const TEXT_INFO_USE_ZIP = 'Mit ZIP';
const TEXT_INFO_USE_NO_COMPRESSION = 'Keine Komprimierung (reines SQL)';
const TEXT_INFO_DOWNLOAD_ONLY = 'Nur herunterladen (nicht auf dem Server speichern)';
const TEXT_INFO_BEST_THROUGH_HTTPS = 'Sichere HTTPS Verbindung verwenden!';
const TEXT_DELETE_INTRO = 'Möchten Sie dieses Backup löschen?';
const TEXT_NO_EXTENSION = 'Keine';
const TEXT_BACKUP_DIRECTORY = 'Backup Verzeichnis:<br>%s';
const TEXT_LAST_RESTORATION = 'Letzte Wiederherstellung:<br>%s';
const TEXT_FORGET = 'Abbrechen';

const ERROR_BACKUP_DIRECTORY_DOES_NOT_EXIST = '<strong>Fehler:</strong> Das Sicherungsverzeichnis ist nicht vorhanden. Bitte stellen Sie dies in der configure.php ein.';
const ERROR_BACKUP_DIRECTORY_NOT_WRITEABLE = '<strong>Fehler:</strong> Das Sicherungsverzeichnis ist schreibgeschützt.';
const ERROR_DOWNLOAD_LINK_NOT_ACCEPTABLE = '<strong>Fehler:</strong> Download Link nicht akzeptabel.';
const ERROR_INVALID_FILE = 'Die Datei [%s] wird nicht als gültige Sicherung erkannt. Stellen Sie sicher, dass diese vorhanden ist, die Erweiterung .sql hat und eine angemessene Grösse hat.';
const ERROR_FILE_TOO_LARGE = 'Die Datei hat "%d" Bytes, aber das Limit ist "%s".';
const ERROR_PATH_NOT_REMOVEABLE = '<strong>Fehler:</strong> "%s" kann nicht entfernt werden.';

const SUCCESS_LAST_RESTORE_CLEARED = '<strong>Erfolgreich:</strong> Das letzte Wiederherstellungdatum wurde gelöscht.';
const SUCCESS_DATABASE_SAVED = '<strong>Erfolg:</strong> Die Datenbank wurde gesichert.';
const SUCCESS_DATABASE_RESTORED = '<strong>Erfolg:</strong> Die Datenbank wurde wiederhergestellt.';
const SUCCESS_BACKUP_DELETED = '<strong>Erfolg:</strong> Die Sicherungsdatei wurde gelöscht.';

const TEXT_INFO_BACKUP_SIZE = '%s MB';
