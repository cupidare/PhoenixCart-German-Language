<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2020 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Bestellungen');
define('HEADING_TITLE_SEARCH', 'Bestell-Nr.:');
define('HEADING_TITLE_STATUS', 'Status:');
define('HEADING_TITLE_ORDER', 'Bestellung #%s');

define('TAB_TITLE_SUMMARY','<i class="fas fa-info-circle fa-fw mr-1"></i>Zusammenfassung');
define('TAB_TITLE_PRODUCTS','<i class="fas fa-box-open fa-fw mr-1"></i>Produkte');
define('TAB_TITLE_STATUS_HISTORY','<i class="fas fa-history fa-fw mr-1"></i>bisheriger Status');

define('TABLE_HEADING_OID', 'Bestellung');
define('TABLE_HEADING_COMMENTS', 'Kommentar');
define('TABLE_HEADING_CUSTOMERS', 'Kunde');
define('TABLE_HEADING_ORDER_TOTAL', 'Gesamtwert');
define('TABLE_HEADING_DATE_PURCHASED', 'Bestelldatum');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_ACTION', 'Aktion');
define('TABLE_HEADING_QUANTITY', 'Anzahl');
define('TABLE_HEADING_PRODUCTS_MODEL', 'Artikel-Nr.');
define('TABLE_HEADING_PRODUCTS', 'Artikel');
define('TABLE_HEADING_TAX', 'MwSt.');
define('TABLE_HEADING_TOTAL', 'Gesamtsumme');
define('TABLE_HEADING_PRICE_EXCLUDING_TAX', 'Preis (exkl.)');
define('TABLE_HEADING_PRICE_INCLUDING_TAX', 'Preis (inkl.)');
define('TABLE_HEADING_TOTAL_EXCLUDING_TAX', 'Total (exkl.)');
define('TABLE_HEADING_TOTAL_INCLUDING_TAX', 'Total (inkl.)');

define('TABLE_HEADING_CUSTOMER_NOTIFIED', 'Kunde benachrichtigt');
define('TABLE_HEADING_DATE_ADDED', 'hinzugefügt am');

define('ENTRY_CUSTOMER', 'Kunde');
define('ENTRY_SOLD_TO', 'Kunde');
define('ENTRY_DELIVERY_TO', 'Lieferanschrift');
define('ENTRY_SHIP_TO', 'Lieferanschrift');
define('ENTRY_SHIPPING_ADDRESS', 'Versandadresse');
define('ENTRY_BILLING_ADDRESS', 'Rechnungsadresse');
define('ENTRY_PAYMENT_METHOD', 'Zahlungsweise');
define('ENTRY_CREDIT_CARD_TYPE', 'Kreditkartentyp');
define('ENTRY_CREDIT_CARD_OWNER', 'Kreditkarteninhaber');
define('ENTRY_CREDIT_CARD_NUMBER', 'Kerditkartennnummer');
define('ENTRY_CREDIT_CARD_EXPIRES', 'Kreditkarte läuft ab am');
define('ENTRY_SUB_TOTAL', 'Zwischensumme');
define('ENTRY_TAX', 'MwSt.');
define('ENTRY_SHIPPING', 'Versandkosten');
define('ENTRY_TOTAL', 'Gesamtsumme');
define('ENTRY_DATE_PURCHASED', 'Bestelldatum');
define('ENTRY_STATUS', 'Status:');
define('ENTRY_DATE_LAST_UPDATED', 'letzte Aktualisierung am');
define('ENTRY_NOTIFY_CUSTOMER', 'Kunde benachrichtigen');
define('ENTRY_NOTIFY_COMMENTS', 'Kommentare mitsenden');
define('ENTRY_PRINTABLE', 'Rechnung drucken');

define('TEXT_INFO_HEADING_DELETE_ORDER', 'Bestellung löschen');
define('TEXT_INFO_DELETE_INTRO', 'Sind Sie sicher, das Sie diese Bestellung löschen möchten?');
define('TEXT_INFO_RESTOCK_PRODUCT_QUANTITY', 'Artikelanzahl dem Lager gutschreiben');
define('TEXT_DATE_ORDER_CREATED', 'erstellt am: %s');
define('TEXT_DATE_ORDER_LAST_MODIFIED', 'letzte Änderung: %s');
define('TEXT_INFO_PAYMENT_METHOD', 'Zahlungsweise: %s');

define('TEXT_ALL_ORDERS', 'Alle Bestellungen');
define('TEXT_NO_ORDER_HISTORY', 'Keine Bestellhistorie verfügbar');

define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('EMAIL_TEXT_SUBJECT', 'Statusänderung Ihrer Bestellung');
define('EMAIL_TEXT_ORDER_NUMBER', 'Bestell-Nr.:');
define('EMAIL_TEXT_INVOICE_URL', 'Ihre Bestellung können Sie unter folgender Adresse einsehen:');
define('EMAIL_TEXT_DATE_ORDERED', 'Bestelldatum:');
define('EMAIL_TEXT_STATUS_UPDATE', 'Der Status Ihrer Bestellung wurde geändert.' . "\n\n" . 'Neuer Status: %s' . "\n\n" . 'Bei Fragen zu Ihrer Bestellung antworten Sie bitte auf diese eMail.' . "\n\n" . 'Mit freundlichen Grüßen' . "\n");
define('EMAIL_TEXT_COMMENTS_UPDATE', 'Anmerkungen und Kommentare zu Ihrer Bestellung:' . "\n\n%s\n\n");

define('ERROR_ORDER_DOES_NOT_EXIST', '<strong>Error:</strong> Die Bestellung existiert nicht!.');
define('SUCCESS_ORDER_UPDATED', '<strong>Erfolg:</strong> Die Bestellung wurde erfolgreich aktualisiert.');
define('WARNING_ORDER_NOT_UPDATED', '<strong>Warnung:</strong> Es wurde nichts geändert. Daher wurde diese Bestellung nicht aktualisiert.');

define('ENTRY_ADD_COMMENT', 'Kommentar hinzufügen:');

define('ENTRY_NOTIFY_CUSTOMER_TEXT', 'Kunde benachrichtigen, dass Bestellung aktualisiert wurde');
define('ENTRY_NOTIFY_COMMENTS_TEXT', 'Kommentare zur Bestellung und E-Mail ergänzen');

define('TEXT_ORDER_STATUS', '<strong>%s</strong> [%s]');
define('TEXT_ORDER_PAYMENT', '<strong>%s</strong> [%s]');
