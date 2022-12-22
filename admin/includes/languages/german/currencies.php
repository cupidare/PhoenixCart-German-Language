<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2022 Phoenix Cart

  Released under the GNU General Public License
*/

const HEADING_TITLE = 'Währungen';

const TABLE_HEADING_CURRENCY_NAME = 'Währung';
const TABLE_HEADING_CURRENCY_CODES = 'Kürzel';
const TABLE_HEADING_CURRENCY_VALUE = 'Wert';
const TABLE_HEADING_ACTION = 'Aktion';

const TEXT_INFO_EDIT_INTRO = 'Bitte führen Sie alle notwendigen Änderungen durch';
const TEXT_INFO_COMMON_CURRENCIES = '-- Verbreitete Währungen--';
const TEXT_INFO_CURRENCY_TITLE = 'Name: %s';
const TEXT_INFO_CURRENCY_CODE = 'Kürzel: %s';
const TEXT_INFO_CURRENCY_SYMBOL_LEFT = 'Symbol Links: %s';
const TEXT_INFO_CURRENCY_SYMBOL_RIGHT = 'Symbol Rechts: %s';
const TEXT_INFO_CURRENCY_DECIMAL_POINT = 'Dezimalkomma: %s';
const TEXT_INFO_CURRENCY_THOUSANDS_POINT = 'Tausenderpunkt: %s';
const TEXT_INFO_CURRENCY_DECIMAL_PLACES = 'Dezimalstellen: %s';
const TEXT_INFO_CURRENCY_LAST_UPDATED = 'Letzte Änderung: %s';
const TEXT_INFO_CURRENCY_VALUE = 'Wert: %s';
const TEXT_INFO_CURRENCY_EXAMPLE = 'Beispiel: %s= %s';
const TEXT_INFO_INSERT_INTRO = 'Bitte geben Sie die neue Währung mit allen relevanten Daten ein';
const TEXT_INFO_DELETE_INTRO = 'Sind Sie sicher, dass Sie diese Währung löschen möchten?';
const TEXT_INFO_HEADING_NEW_CURRENCY = 'neue Währung';
const TEXT_INFO_HEADING_EDIT_CURRENCY = 'Währung bearbeiten';
const TEXT_INFO_HEADING_DELETE_CURRENCY = 'Währung löschen';
const TEXT_INFO_SET_AS_DEFAULT = TEXT_SET_DEFAULT . ' (manuelles Aktualisieren der Wechselkurse erforderlich.)';
const TEXT_INFO_CURRENCY_UPDATED = 'Die Verbrauchssteuer für %s (%s) wurde erfolgreich aktualisiert via %s.';

const ERROR_REMOVE_DEFAULT_CURRENCY = '<strong>Error:</strong> Die Standardwährung darf nicht gelöscht werden. Bitte definieren Sie eine neue Standardwährung und wiederholen Sie den Vorgang.';
const ERROR_CURRENCY_INVALID = '<strong>Error:</strong> Die Verbrauchssteuer für %s (%s) wurde nicht aktualisiert via %s. Ist es ein gültiger Währungcode?';
const WARNING_PRIMARY_SERVER_FAILED = '<strong>Warnung:</strong> Der primäre Server (%s) scheiterte bei %s (%s) - teste sekundären Server.';

const ERROR_INSTALL_CURRENCY_CONVERTER = 'Derzeit ist kein Währungsumrechner installiert.  <a class="alert-link font-weight-bold" href="%s">Jetzt installieren</a>';
