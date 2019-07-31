<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2019 osCommerce CE Phoenix

  Released under the GNU General Public License
*/

define('NAVBAR_TITLE_1', 'Anmelden');
define('NAVBAR_TITLE_2', 'Passwort vergessen');

define('HEADING_TITLE', 'Ich habe mein Passwort vergessen!');

define('TEXT_MAIN', 'Wenn Sie Ihr Passwort vergessen haben, geben Sie Ihre E-Mail-Adresse ein und wir senden Ihnen Anweisungen, wie Sie Ihr Passwort sicher ändern können.');

define('TEXT_PASSWORD_RESET_INITIATED', 'Eine Email wurde an Ihre angegebene Adresse gesendet. Folgen Sie dem darin enthaltenen Link, um Ihr Passwort zu ändern. Der Link ist für 24 Stunden gültig');

define('TEXT_NO_EMAIL_ADDRESS_FOUND', 'Fehler: Die eingegebene eMail-Adresse ist nicht registriert. Bitte versuchen Sie es noch einmal.');

define('EMAIL_PASSWORD_RESET_SUBJECT', STORE_NAME . ' - Neues Passwort');
define('EMAIL_PASSWORD_RESET_BODY', 'Ein neues Passwort für Ihr Konto bei ' . STORE_NAME  . " wurde angefordert\n\n" . 'Folgen Sie diesem Link, um Ihr Passwort sicher zu ändern:' . "\n\n" . '%s' . 
"\n\n" . 'Dieser Link wird automatisch nach 24 Stunden, oder nachdem Ihr Passwort geändert wurde, verworfen.' . "\n\n" . 'Wenn Sie Hilfe mit einem unserer Online-Dienste benötigen, mailen Sie an: ' . 
STORE_OWNER_EMAIL_ADDRESS . '.' . "\n\n");

define('ERROR_ACTION_RECORDER', ' Fehler: Ein Link zum Zurücksetzen des Passworts wurde bereits gesendet. Versuchen Sie es in %s Minuten.');
