<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2021 Phoenix Cart

  Released under the GNU General Public License
*/

const MODULE_CUSTOMER_DATA_DOB_TEXT_TITLE = 'Geburtstag';
const MODULE_CUSTOMER_DATA_DOB_TEXT_DESCRIPTION = 'Zeigt einen Eintrag für das Geburtsdatum während der Registrierung';

const ENTRY_DOB = 'Geburtstag';
const ENTRY_DOB_ERROR = 'Ihr Geburtstag muss folgendes Format haben: DD.MM.YYYY (eg 20.05.1994)';
const ENTRY_DOB_TEXT = 'z.B. 20.05.1994';

////
// Umwandeln des Datumformats
// $Datum ist im Format dd.mm.yyyy
// date_raw ist im Format YYYYMMDD oder DDMMYYYY
function tep_cd_dob_date_raw($date, $reverse = false) {
  return substr($date, 6, 4) . substr($date, 3, 2) . substr($date, 0, 2);
}
