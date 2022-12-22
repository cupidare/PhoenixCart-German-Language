<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2021 Phoenix Cart

  Released under the GNU General Public License
*/

const MODULE_NOTIFICATIONS_UPDATE_ORDER_TEXT_TITLE = 'Status der Bestellung aktualisieren';
const MODULE_NOTIFICATIONS_UPDATE_ORDER_TEXT_DESCRIPTION = 'Eine Nachricht schicken, wenn der Status aktualisiert wird.';

const MODULE_NOTIFICATIONS_UPDATE_ORDER_SEPARATOR = '------------------------------------------------------';
const MODULE_NOTIFICATIONS_UPDATE_ORDER_TEXT_SUBJECT = 'Ihre Bestellung wurde aktualisiert';
const MODULE_NOTIFICATIONS_UPDATE_ORDER_TEXT_ORDER_NUMBER = 'Bestellnummer:  %d';
const MODULE_NOTIFICATIONS_UPDATE_ORDER_TEXT_INVOICE_URL = 'Detaillierte Rechnung:  %s';
const MODULE_NOTIFICATIONS_UPDATE_ORDER_TEXT_DATE_ORDERED = 'Bestelldatum:  %s';
const MODULE_NOTIFICATIONS_UPDATE_ORDER_TEXT_STATUS_UPDATE = <<<'EOT'
Ihre Bestellung wurde aktualisiert.

Neuer Status: %s

Bitte antworten Sie auf diese Mail, wenn Sie Fragen haben.


EOT;
const MODULE_NOTIFICATIONS_UPDATE_ORDER_TEXT_COMMENTS_UPDATE = 'Kommentare für Ihre Bestellung sind ' . "\n\n%s\n\n";
