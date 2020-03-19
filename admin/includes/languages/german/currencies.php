<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2020 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Währungen');

define('TABLE_HEADING_CURRENCY_NAME', 'Währung');
define('TABLE_HEADING_CURRENCY_CODES', 'Kürzel');
define('TABLE_HEADING_CURRENCY_VALUE', 'Wert');
define('TABLE_HEADING_ACTION', 'Aktion');

define('TEXT_INFO_EDIT_INTRO', 'Bitte führen Sie alle notwendigen Änderungen durch');
define('TEXT_INFO_COMMON_CURRENCIES', '-- Verbreitete Währungen--');
define('TEXT_INFO_CURRENCY_TITLE', 'Name: %s');
define('TEXT_INFO_CURRENCY_CODE', 'Kürzel: %s');
define('TEXT_INFO_CURRENCY_SYMBOL_LEFT', 'Symbol Links: %s');
define('TEXT_INFO_CURRENCY_SYMBOL_RIGHT', 'Symbol Rechts: %s');
define('TEXT_INFO_CURRENCY_DECIMAL_POINT', 'Dezimalkomma: %s');
define('TEXT_INFO_CURRENCY_THOUSANDS_POINT', 'Tausenderpunkt: %s');
define('TEXT_INFO_CURRENCY_DECIMAL_PLACES', 'Dezimalstellen: %s');
define('TEXT_INFO_CURRENCY_LAST_UPDATED', 'letzte Änderung: %s');
define('TEXT_INFO_CURRENCY_VALUE', 'Wert: %s');
define('TEXT_INFO_CURRENCY_EXAMPLE', 'Beispiel: %s= %s');
define('TEXT_INFO_INSERT_INTRO', 'Bitte geben Sie die neue Währung mit allen relevanten Daten ein');
define('TEXT_INFO_DELETE_INTRO', 'Sind Sie sicher, dass Sie diese Währung löschen möchten?');
define('TEXT_INFO_HEADING_NEW_CURRENCY', 'neue Währung');
define('TEXT_INFO_HEADING_EDIT_CURRENCY', 'Währung bearbeiten');
define('TEXT_INFO_HEADING_DELETE_CURRENCY', 'Währung löschen');
define('TEXT_INFO_SET_AS_DEFAULT', TEXT_SET_DEFAULT . ' (manuelles Aktualisieren der Wechselkurse erforderlich.)');
define('TEXT_INFO_CURRENCY_UPDATED', 'Die Verbrauchssteuer für %s (%s) wurde erfolgreich aktualisiert via %s.');

define('ERROR_REMOVE_DEFAULT_CURRENCY', 'Fehler: Die Standardwährung darf nicht gelöscht werden. Bitte definieren Sie eine neue Standardwährung und wiederholen Sie den Vorgang.');
define('ERROR_CURRENCY_INVALID', 'Error: Die Verbrauchssteuer für %s (%s) wurde nicht aktualisiert via %s. Ist es ein gültiger Währungcode?');
define('WARNING_PRIMARY_SERVER_FAILED', 'Warnung: Der primäre Server (%s) scheiterte bei %s (%s) - teste sekundären Server.');
define('ERROR_INSTALL_CURRENCY_CONVERTER', 'Derzeit ist kein Währungsumrechner installiert.  <a class="alert-link font-weight-bold" href="' . tep_href_link('modules.php', 'set=currencies') . '">jetzt installieren</a>');
