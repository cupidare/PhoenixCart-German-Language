<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2019 osCommerce CE Phoenix

  Released under the GNU General Public License
*/

// look in your $PATH_LOCALE/locale directory for available locales
// or type locale -a on the server.
// Array examples which should work on all servers:
// 'en_US.UTF-8', 'en_US.UTF8', 'enu_usa'
// 'en_GB.UTF-8', 'en_GB.UTF8', 'eng_gb'
// 'en_AU.UTF-8', 'en_AU.UTF8', 'ena_au'
@setlocale(LC_ALL, array('de_DE.UTF-8', 'de_DE.UTF8', 'deu_deu'));

define('DATE_FORMAT_SHORT', '%d/%m/%Y');  // this is used for strftime()
define('DATE_FORMAT_LONG', '%A, %d. %B %Y'); // this is used for strftime()
define('DATE_FORMAT', 'd.m.Y'); // this is used for date()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');
define('JQUERY_DATEPICKER_FORMAT', 'dd.mm.yy'); // see http://docs.jquery.com/UI/Datepicker/formatDate

////
// Return date in raw format
// $date should be in format dd/mm/yyyy
// raw date is in format YYYYMMDD, or DDMMYYYY
function tep_date_raw($date, $reverse = false) {
  if ($reverse) {
    return substr($date, 0, 2) . substr($date, 3, 2) . substr($date, 6, 4);
  } else {
    return substr($date, 6, 4) . substr($date, 3, 2) . substr($date, 0, 2);
  }
}

// if USE_DEFAULT_LANGUAGE_CURRENCY is true, use the following currency, instead of the applications default currency (used when changing language)
define('LANGUAGE_CURRENCY', 'EUR');

// Global entries for the <html> tag
define('HTML_PARAMS', 'dir="ltr" lang="de"');

// charset for web pages and emails
define('CHARSET', 'utf-8');

// page title
define('TITLE', STORE_NAME);

// text in includes/modules/downloads.php
define('HEADER_TITLE_MY_ACCOUNT', 'Mein Konto');

// text in includes/application_top.php
define('HEADER_TITLE_TOP', '<i class="fas fa-home"></i><span class="sr-only"> Startseite</span>');
define('HEADER_TITLE_CATALOG', 'Katalog');

// text for gender
define('MALE', 'Herr');
define('FEMALE', 'Frau');

// checkout procedure text
define('CHECKOUT_BAR_DELIVERY', 'Versandinformationen');
define('CHECKOUT_BAR_PAYMENT', 'Zahlungsweise');
define('CHECKOUT_BAR_CONFIRMATION', 'Bestätigung');

// pull down default text
define('PULL_DOWN_DEFAULT', 'Bitte wählen');

// javascript messages
define('JS_ERROR', 'Notwendige Angaben fehlen!\nBitte richtig ausfüllen.\n\n’');

define('JS_ERROR_NO_PAYMENT_MODULE_SELECTED', '* Bitte wählen Sie eine Zahlungsweise für Ihre Bestellung.\n');

define('ERROR_NO_PAYMENT_MODULE_SELECTED', 'Bitte wählen Sie eine Zahlungsweise für Ihre Bestellung.');

define('ENTRY_COMPANY', 'Firmenname:');
define('ENTRY_COMPANY_TEXT', '');
define('ENTRY_GENDER', 'Anrede:');
define('ENTRY_GENDER_ERROR', 'Bitte das Geschlecht angeben.');
define('ENTRY_GENDER_TEXT', '');
define('ENTRY_FIRST_NAME', 'Vorname:');
define('ENTRY_FIRST_NAME_ERROR', 'Der Vorname sollte mindestens ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' Zeichen enthalten.');
define('ENTRY_FIRST_NAME_TEXT', '');
define('ENTRY_LAST_NAME', 'Nachname:');
define('ENTRY_LAST_NAME_ERROR', 'Der Nachname sollte mindestens ' . ENTRY_LAST_NAME_MIN_LENGTH . ' Zeichen enthalten.');
define('ENTRY_LAST_NAME_TEXT', '');
define('ENTRY_DATE_OF_BIRTH', 'Geburtsdatum:');
define('ENTRY_DATE_OF_BIRTH_ERROR', 'Bitte geben Sie Ihr Geburtsdatum in folgendem Format ein: TT/MM/JJJJ (z.B. 21/05/1970)');
define('ENTRY_DATE_OF_BIRTH_TEXT', '* (z.B. 21/05/1970)');
define('ENTRY_EMAIL_ADDRESS', 'eMail-Adresse:');
define('ENTRY_EMAIL_ADDRESS_ERROR', 'Die eMail Adresse sollte mindestens ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' Zeichen enthalten.');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', 'Die eMail Adresse scheint nicht gültig zu sein - bitte korrigieren.');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', 'Die eMail Adresse ist bereits gespeichert - bitte melden Sie sich mit dieser Adresse an oder eröffnen Sie ein neues Konto mit einer anderen Adresse.');
define('ENTRY_EMAIL_ADDRESS_TEXT', '');
define('ENTRY_STREET_ADDRESS', 'Strasse/Hausnr.:');
define('ENTRY_STREET_ADDRESS_ERROR', 'Die Straße sollte mindestens ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' Zeichen enthalten.');
define('ENTRY_STREET_ADDRESS_TEXT', '');
define('ENTRY_SUBURB', 'Stadtteil:');
define('ENTRY_SUBURB_TEXT', '');
define('ENTRY_POST_CODE', 'Postleitzahl:');
define('ENTRY_POST_CODE_ERROR', 'Die Postleitzahl sollte mindestens ' . ENTRY_POSTCODE_MIN_LENGTH . ' Zeichen enthalten.');
define('ENTRY_POST_CODE_TEXT', '');
define('ENTRY_CITY', 'Ort:');
define('ENTRY_CITY_ERROR', 'Der Ort sollte mindestens ' . ENTRY_CITY_MIN_LENGTH . ' Zeichen enthalten.');
define('ENTRY_CITY_TEXT', '');
define('ENTRY_NAME_TEXT', '');
define('ENTRY_STATE', 'Bundesland:');
define('ENTRY_STATE_ERROR', 'Das Bundesland sollte mindestens ' . ENTRY_STATE_MIN_LENGTH . ' Zeichen enthalten.');
define('ENTRY_STATE_ERROR_SELECT', 'Bitte wählen Sie ein Bundesland aus der Liste.');
define('ENTRY_STATE_TEXT', '');
define('ENTRY_COUNTRY', 'Land:');
define('ENTRY_COUNTRY_ERROR', 'Bitte wählen Sie ein Land aus der Liste.');
define('ENTRY_COUNTRY_TEXT', '');
define('ENTRY_TELEPHONE_NUMBER', 'Telefonnummer:');
define('ENTRY_TELEPHONE_NUMBER_ERROR', 'Die Telefonnummer sollte mindestens ' . ENTRY_TELEPHONE_MIN_LENGTH . ' Zeichen enthalten.');
define('ENTRY_TELEPHONE_NUMBER_TEXT', '');
define('ENTRY_FAX_NUMBER', 'Telefaxnummer:');
define('ENTRY_FAX_NUMBER_TEXT', '');
define('ENTRY_NEWSLETTER', 'ich möchte einen Newsletter erhalten ');
define('ENTRY_NEWSLETTER_TEXT', '');
define('ENTRY_NEWSLETTER_YES', 'abonniert');
define('ENTRY_NEWSLETTER_NO', 'nicht abonniert');
define('ENTRY_PASSWORD', 'Passwort:');
define('ENTRY_PASSWORD_ERROR', 'Das Passwort sollte mindestens ' . ENTRY_PASSWORD_MIN_LENGTH . ' Zeichen enthalten.');
define('ENTRY_PASSWORD_ERROR_NOT_MATCHING', 'Beide eingegebenen Passwörter müssen identisch sein.');
define('ENTRY_PASSWORD_TEXT', '');
define('ENTRY_PASSWORD_CONFIRMATION', 'Bestätigung:');
define('ENTRY_PASSWORD_CONFIRMATION_TEXT', '');
define('ENTRY_PASSWORD_CURRENT', 'Aktuelles Passwort:');
define('ENTRY_PASSWORD_CURRENT_TEXT', '');
define('ENTRY_PASSWORD_CURRENT_ERROR', 'Das Passwort sollte mindestens ' . ENTRY_PASSWORD_MIN_LENGTH . ' Zeichen enthalten.');
define('ENTRY_PASSWORD_NEW', 'Neues Passwort:');
define('ENTRY_PASSWORD_NEW_TEXT', '');
define('ENTRY_PASSWORD_NEW_ERROR', 'Das neue Passwort sollte mindestens ' . ENTRY_PASSWORD_MIN_LENGTH . ' Zeichen enthalten.');
define('ENTRY_PASSWORD_NEW_ERROR_NOT_MATCHING', 'Die Passwort-Bestätigung muss mit Ihrem neuen Passwort übereinstimmen.');

// constants for use in tep_prev_next_display function
define('TEXT_RESULT_PAGE', 'Seiten:');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'angezeigte Produkte: <b>%d</b> bis <b>%d</b> (von <b>%d</b> insgesamt)');

define('PREVNEXT_TITLE_FIRST_PAGE', 'erste Seite');
define('PREVNEXT_TITLE_PREVIOUS_PAGE', 'vorherige Seite');
define('PREVNEXT_TITLE_NEXT_PAGE', 'nächste Seite');
define('PREVNEXT_TITLE_LAST_PAGE', 'letzte Seite');
define('PREVNEXT_TITLE_PAGE_NO', 'Seite %d');
define('PREVNEXT_TITLE_PREV_SET_OF_NO_PAGE', 'Vorhergehende %d Seiten');
define('PREVNEXT_TITLE_NEXT_SET_OF_NO_PAGE', 'Nächste %d Seiten');
define('PREVNEXT_BUTTON_FIRST', '&lt;&lt;ERSTE');
define('PREVNEXT_BUTTON_PREV', '[&lt;&lt;&nbsp;vorherige]');
define('PREVNEXT_BUTTON_NEXT', '[nächste&nbsp;&gt;&gt;]');
define('PREVNEXT_BUTTON_LAST', 'LETZTE&gt;&gt;');

define('IMAGE_BUTTON_ADD_ADDRESS', 'Neue Adresse');
define('IMAGE_BUTTON_BACK', 'Zurück');
define('IMAGE_BUTTON_BUY_NOW', 'In den Warenkorb');
define('IMAGE_BUTTON_CHANGE_ADDRESS', 'Adresse ändern');
define('IMAGE_BUTTON_CHECKOUT', 'Kasse');
define('IMAGE_BUTTON_CONFIRM_ORDER', 'jetzt zahlungspflichtig bestellen');
define('IMAGE_BUTTON_CONTINUE', 'Weiter');
define('IMAGE_BUTTON_DELETE', 'Löschen');
define('IMAGE_BUTTON_LOGIN', 'Anmelden');
define('IMAGE_BUTTON_IN_CART', 'In den Warenkorb');
define('IMAGE_BUTTON_SEARCH', 'Suchen');
define('IMAGE_BUTTON_UPDATE', 'Aktualisieren');
define('IMAGE_BUTTON_UPDATE_PREFERENCES', 'Einstellungen aktualisieren');

define('SMALL_IMAGE_BUTTON_DELETE', 'Löschen');
define('SMALL_IMAGE_BUTTON_EDIT', 'Bearbeiten');
define('SMALL_IMAGE_BUTTON_VIEW', 'zum Artikel');
define('SMALL_IMAGE_BUTTON_BUY', 'in den Warenkorb');

define('ICON_ARROW_RIGHT', 'Zeige mehr');

define('TEXT_SORT_PRODUCTS', 'Sortierung der Artikel ist ');
define('TEXT_DESCENDINGLY', 'absteigend');
define('TEXT_ASCENDINGLY', 'aufsteigend');
define('TEXT_BY', ' nach ');

define('TEXT_UNKNOWN_TAX_RATE', 'Unbekannter Steuersatz');

define('TEXT_CCVAL_ERROR_INVALID_DATE', 'The expiry date entered for the credit card is invalid. Please check the date and try again.');
define('TEXT_CCVAL_ERROR_INVALID_NUMBER', 'The credit card number entered is invalid. Please check the number and try again.');
define('TEXT_CCVAL_ERROR_UNKNOWN_CARD', 'The first four digits of the number entered are: %s. If that number is correct, we do not accept that type of credit card. If it is wrong, please try again.');

// category views
define('TEXT_VIEW', 'Ansicht: ');
define('TEXT_VIEW_LIST', ' Listen');
define('TEXT_VIEW_GRID', ' Raster');

// search placeholder
define('TEXT_SEARCH_PLACEHOLDER','Suche');

// message for required inputs
define('FORM_REQUIRED_INFORMATION', '<i class="fas fa-asterisk text-danger"></i> benötigte Informationen');
define('FORM_REQUIRED_INPUT', '<span class="form-control-feedback text-danger"><i class="fas fa-asterisk"></i></span>');

// grid/list
define('TEXT_SORT_BY', 'Sortieren nach ');
// moved from index
define('TABLE_HEADING_IMAGE', '');
define('TABLE_HEADING_MODEL', 'Modell');
define('TABLE_HEADING_PRODUCTS', 'Produktbezeichung');
define('TABLE_HEADING_MANUFACTURER', 'Hersteller');
define('TABLE_HEADING_QUANTITY', 'Lager');
define('TABLE_HEADING_PRICE', 'Preis');
define('TABLE_HEADING_WEIGHT', 'Gewicht');
define('TABLE_HEADING_BUY_NOW', 'jetzt kaufen');
define('TABLE_HEADING_LATEST_ADDED', 'hinzugefügt');
define('TABLE_HEADING_ORDERED', 'beliebt');

// product notifications
define('PRODUCT_SUBSCRIBED', '%s wurde zu Ihren beobachteten Artikeln hinzugefügt');
define('PRODUCT_UNSUBSCRIBED', '%s wurde von Ihren beobachteten Artikeln entfernt');
define('PRODUCT_ADDED', '%s wurde dem Warenkorb hinzugefügt');
define('PRODUCT_REMOVED', '%s wurde aus dem Warenkorb entfernt');

// bootstrap helper
define('MODULE_CONTENT_BOOTSTRAP_ROW_DESCRIPTION', '');

// noscript helper
define('TEXT_NOSCRIPT', '<p><strong>JavaScript scheint nicht aktiviert zu sein.</strong></p><p>Bitte aktivieren Sie JavaScript, um den vollen Umfang dieser Seite nutzen zu können. <br><a class="alert-link" href="https://www.enable-javascript.com/" target="_blank" rel="nofollow">Hier</a> gibt es Informationen zum Aktivieren von Javascript in Ihrem Browser.</p>');

// sitewide is-product 
define('IS_PRODUCT_SHOW_PRICE', '%s');
define('IS_PRODUCT_SHOW_PRICE_SPECIAL', '<del>%s</del> <span class="text-danger">jetzt %s</span>');
define('IS_PRODUCT_BUTTON_BUY', '<i class="fas fa-shopping-cart"></i>');
define('IS_PRODUCT_BUTTON_VIEW', '<i class="fas fa-eye"></i> Anzeigen');
// sitewide product listing
define('LISTING_SORT_DOWN', '<i class="fas fa-level-down-alt text-primary"></i>');
define('LISTING_SORT_UP', '<i class="fas fa-level-up-alt text-primary"></i>');
define('LISTING_SORT_UNSELECTED', '<i class="fas fa-level-up-alt text-black-50"></i>');
// for new style internal pages
define('LINK_TEXT_EDIT', '<small><a class="%s" href="' . tep_href_link('%s', '', 'SSL') . '">Bearbeiten</a></small>');
define('SHIPPING_FA_ICON', '<i class="fas fa-shipping-fast fa-fw fa-3x float-right text-black-50"></i>');
define('PAYMENT_FA_ICON', '<i class="fas fa-file-invoice-dollar fa-fw fa-3x float-right text-black-50"></i>');

define('ENTRY_COMMENTS', 'Wollen Sie uns etwas mitteilen?');
define('ENTRY_COMMENTS_PLACEHOLDER', 'Kommentar einfügen...');
define('TABLE_HEADING_OR', '-oder-');
