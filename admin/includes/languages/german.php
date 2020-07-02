<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2020 osCommerce

  Released under the GNU General Public License
*/

// look in your $PATH_LOCALE/locale directory for available locales..
// Array examples which should work on all servers:
// 'en_US.UTF-8', 'en_US.UTF8', 'enu_usa'
// 'en_GB.UTF-8', 'en_GB.UTF8', 'eng_gb'
// 'en_AU.UTF-8', 'en_AU.UTF8', 'ena_au'

setlocale(LC_ALL, ['de_DE.UTF8', 'de_DE.UTF-8', 'deu_deu' ]);
const DATE_FORMAT_SHORT = '%d/%m/%Y';  // this is used for strftime()
const DATE_FORMAT_LONG = '%A %d %B, %Y'; // this is used for strftime()
const DATE_FORMAT = 'd/m/Y'; // this is used for date()
const PHP_DATE_TIME_FORMAT = 'd/m/Y H:i:s'; // this is used for date()
const DATE_TIME_FORMAT = DATE_FORMAT_SHORT . ' %H:%M:%S';
const JQUERY_DATEPICKER_I18N_CODE = ''; // leave empty for en_US; see http://jqueryui.com/demos/datepicker/#localization
const JQUERY_DATEPICKER_FORMAT = 'dd/mm/yy'; // see http://docs.jquery.com/UI/Datepicker/formatDate

// Global entries for the <html> tag
const HTML_PARAMS ='dir="ltr" lang="de"';

// charset for web pages and emails
const CHARSET = 'utf-8';

// page title
const TITLE = 'OSCOM CE Phoenix Administration Tool';

// header text in includes/header.php
const HEADER_TITLE_ONLINE_CATALOG = '<i class="fas fa-shopping-cart text-primary"></i> <span class="border-bottom border-primary">Front-End</span>';
const HEADER_TITLE_PHOENIX_CLUB = '<span class="border-bottom border-primary">Phoenix Club</span>';
const HEADER_TITLE_CERTIFIED_ADDONS = '<span class="border-bottom border-primary">zertifizierte Addons</span>';
const HEADER_TITLE_LOGOFF = '<i class="fas fa-lock"></i> <span class="border-bottom border-danger"> %s, sicher ausloggen</span>';

// javascript messages
const JS_STATE_SELECT = '-- Wählen Sie oberhalb --';

// images
const IMAGE_ANI_SEND_EMAIL = 'eMail versenden';
const IMAGE_BACK = 'Zurück';
const IMAGE_BACKUP = 'Datensicherung';
const IMAGE_CANCEL = 'Abbruch';
const IMAGE_CONFIRM = 'Bestätigen';
const IMAGE_COPY = 'Kopieren';
const IMAGE_COPY_TO = 'Kopieren nach';
const IMAGE_DETAILS = 'Details';
const IMAGE_DELETE = 'Löschen';
const IMAGE_EDIT = 'Bearbeiten';
const IMAGE_EMAIL = 'eMail versenden';
const IMAGE_EXPORT = 'Export';
const IMAGE_ICON_STATUS_GREEN = 'aktiv';
const IMAGE_ICON_STATUS_GREEN_LIGHT = 'aktivieren';
const IMAGE_ICON_STATUS_RED = 'inaktiv';
const IMAGE_ICON_STATUS_RED_LIGHT = 'deaktivieren';
const IMAGE_ICON_INFO = 'Information';
const IMAGE_INSERT = 'Einfügen';
const IMAGE_LOCK = 'Sperren';
const IMAGE_MODULE_INSTALL = 'Module Installieren';
const IMAGE_MODULE_REMOVE = 'Module Entfernen';
const IMAGE_MOVE = 'Verschieben';
const IMAGE_NEW_CATEGORY = 'Neue Kategorie erstellen';
const IMAGE_NEW_COUNTRY = 'Neues Land aufnehmen';
const IMAGE_NEW_CURRENCY = 'Neue Währung einfügen';
const IMAGE_NEW_CUSTOMER_DATA_GROUP = 'Neue Nutzerdatengruppe';
const IMAGE_NEW_FILE = 'Neue Datei';
const IMAGE_NEW_FOLDER = 'Neues Verzeichnis';
const IMAGE_NEW_LANGUAGE = 'Neue Sprache anlegen';
const IMAGE_NEW_NEWSLETTER = 'Neues Rundschreiben';
const IMAGE_NEW_PRODUCT = 'Neuen Artikel aufnehmen';
const IMAGE_NEW_TAX_CLASS = 'Neue Steuerklasse erstellen';
const IMAGE_NEW_TAX_RATE = 'Neuen Steuersatz anlegen';
const IMAGE_NEW_TAX_ZONE = 'Neue Steuerzone erstellen';
const IMAGE_NEW_ZONE = 'Neues Bundesland einfügen';
const IMAGE_ORDERS = 'Bestellungen';
const IMAGE_ORDERS_INVOICE = 'Rechnung';
const IMAGE_ORDERS_PACKINGSLIP = 'Lieferschein';
const IMAGE_PREVIEW = 'Vorschau';
const IMAGE_RESTORE = 'Zurücksichern';
const IMAGE_RESET = 'Zurücksetzen';
const IMAGE_SAVE = 'Speichern';
const IMAGE_SEARCH = 'Suchen';
const IMAGE_SELECT = 'Auswählen';
const IMAGE_SEND = 'Versenden';
const IMAGE_SEND_EMAIL = 'eMail versenden';
const IMAGE_UNLOCK = 'Entsperren';
const IMAGE_UPDATE = 'Aktualisieren';
const IMAGE_UPDATE_CURRENCIES = 'Wechselkurse aktualisieren';
const IMAGE_UPLOAD = 'Hochladen';

const ICON_CROSS = 'Falsch';
const ICON_CURRENT_FOLDER = 'aktueller Ordner';
const ICON_DELETE = 'Löschen';
const ICON_ERROR = 'Fehler';
const ICON_FILE = 'Datei';
const ICON_FILE_DOWNLOAD = 'Herunterladen';
const ICON_FOLDER = 'Ordner';
const ICON_LOCKED = 'Gesperrt';
const ICON_PREVIOUS_LEVEL = 'Vorherige Ebene';
const ICON_PREVIEW = 'Vorschau';
const ICON_STATISTICS = 'Statistik';
const ICON_SUCCESS = 'Erfolg';
const ICON_TICK = 'Wahr';
const ICON_UNLOCKED = 'Entsperrt';
const ICON_WARNING = 'Warnung';

// constants for use in tep_prev_next_display function
const TEXT_RESULT_PAGE = 'Seite %s von %d';
const TEXT_DISPLAY_NUMBER_OF_BANNERS = 'Angezeigt werden <strong>%d</strong> bis <strong>%d</strong> (von insgesamt <strong>%d</strong> Bannern)';
const TEXT_DISPLAY_NUMBER_OF_COUNTRIES = 'Angezeigt werden <strong>%d</strong> bis <strong>%d</strong> (von insgesamt <strong>%d</strong> Ländern)';
const TEXT_DISPLAY_NUMBER_OF_CUSTOMERS = 'Angezeigt werden <strong>%d</strong> bis <strong>%d</strong> (von insgesamt <strong>%d</strong> Kunden)';
const TEXT_DISPLAY_NUMBER_OF_CURRENCIES = 'Angezeigt werden <strong>%d</strong> bis <strong>%d</strong> (von insgesamt <strong>%d</strong> Währungen)';
const TEXT_DISPLAY_NUMBER_OF_ENTRIES = 'Zeige <strong>%d</strong> bis <strong>%d</strong> (von <strong>%d</strong> Einträge)';
const TEXT_DISPLAY_NUMBER_OF_LANGUAGES = 'Angezeigt werden <strong>%d</strong> bis <strong>%d</strong> (von insgesamt <strong>%d</strong> Sprachen)';
const TEXT_DISPLAY_NUMBER_OF_MANUFACTURERS = 'Angezeigt werden <strong>%d</strong> bis <strong>%d</strong> (von insgesamt <strong>%d</strong> Herstellern)';
const TEXT_DISPLAY_NUMBER_OF_NEWSLETTERS = 'Angezeigt werden <strong>%d</strong> bis <strong>%d</strong> (von insgesamt <strong>%d</strong> Rundschreiben)';
const TEXT_DISPLAY_NUMBER_OF_ORDERS = 'Angezeigt werden <strong>%d</strong> bis <strong>%d</strong> (von insgesamt <strong>%d</strong> Bestellungen)';
const TEXT_DISPLAY_NUMBER_OF_ORDERS_STATUS = 'Angezeigt werden <strong>%d</strong> bis <strong>%d</strong> (von insgesamt <strong>%d</strong> Bestellstatus)';
const TEXT_DISPLAY_NUMBER_OF_PRODUCTS = 'Angezeigt werden <strong>%d</strong> bis <strong>%d</strong> (von insgesamt <strong>%d</strong> Artikeln)';
const TEXT_DISPLAY_NUMBER_OF_PRODUCTS_EXPECTED = 'Angezeigt werden <strong>%d</strong> bis <strong>%d</strong> (von insgesamt <strong>%d</strong> erwarteten Artikeln)';
const TEXT_DISPLAY_NUMBER_OF_REVIEWS = 'Angezeigt werden <strong>%d</strong> bis <strong>%d</strong> (von insgesamt <strong>%d</strong> Bewertungen)';
const TEXT_DISPLAY_NUMBER_OF_SPECIALS = 'Angezeigt werden <strong>%d</strong> bis <strong>%d</strong> (von insgesamt <strong>%d</strong> Sonderangeboten)';
const TEXT_DISPLAY_NUMBER_OF_TAX_CLASSES = 'Angezeigt werden <strong>%d</strong> bis <strong>%d</strong> (von insgesamt <strong>%d</strong> Steuerklassen)';
const TEXT_DISPLAY_NUMBER_OF_TAX_ZONES = 'Angezeigt werden <strong>%d</strong> bis <strong>%d</strong> (von insgesamt <strong>%d</strong> Steuerzonen)';
const TEXT_DISPLAY_NUMBER_OF_TAX_RATES = 'Angezeigt werden <strong>%d</strong> bis <strong>%d</strong> (von insgesamt <strong>%d</strong> Steuersätzen)';
const TEXT_DISPLAY_NUMBER_OF_ZONES = 'Angezeigt werden <strong>%d</strong> bis <strong>%d</strong> (von insgesamt <strong>%d</strong> Bundesländern)';

const SPLIT_PAGES = 'Seite auswählen';

const TEXT_DEFAULT = 'Standard';
const TEXT_SET_DEFAULT = 'als Standard definieren';

const TEXT_NONE = '--keine--';
const TEXT_TOP = 'Top';
const TEXT_ALL = 'Alle';

const ERROR_DESTINATION_DOES_NOT_EXIST = '<strong>Error:</strong> Zielverzeichnis existiert nicht.';
const ERROR_DESTINATION_NOT_WRITEABLE = '<strong>Error:</strong> Zielverzeichnis ist nicht beschreibbar.';
const ERROR_FILE_NOT_SAVED = '<strong>Error:</strong> Datei nach hochladen nicht gespeichert.';
const ERROR_FILETYPE_NOT_ALLOWED = '<strong>Error:</strong> Dateien von diesem Typ dürfen nicht hochgeladen werden.';
const SUCCESS_FILE_SAVED_SUCCESSFULLY = '<strong>Erfolg:</strong> Datei erfolgreich gespeichert.';
const WARNING_NO_FILE_UPLOADED = '<strong>Warnung:</strong> keine Datei hochgeladen.';

// bootstrap helper
const MODULE_CONTENT_BOOTSTRAP_ROW_DESCRIPTION = '<p>Die Breite des Inhalts einer Box kann 12 Spalten (oder weniger) betragen.</p><p>12/12 = 100% Breite, 6/12 = 50% Breite, 4/12 = 33% Breite.</p><p>Die Summe aller Spalten aller Boxen muss 12 ergeben (zB.:  3 Boxen je 4 Spalten, 1 Box mit 12 Spalten, usw.).</p>';

// seo helper
const PLACEHOLDER_COMMA_SEPARATION = 'Muss, durch, Komma, getrennt, werden';

// message for required inputs
const FORM_REQUIRED_INPUT = '<span class="form-control-feedback text-danger"><i class="fas fa-asterisk"></i></span>';

const TEXT_IMAGE_NON_EXISTENT = 'BILD IST NICHT VORHANDEN';
