<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2020 osCommerce CE Phoenix

  Released under the GNU General Public License
*/

const NAVBAR_TITLE_1 = 'Erweiterte Suche';
const NAVBAR_TITLE_2 = 'Suchergebnisse';

const HEADING_TITLE_1 = 'Ihre Suchkriterien';
const HEADING_TITLE_2 = 'Produkte, welche den Suchkriterien entsprechen';

const HEADING_SEARCH_CRITERIA = 'Ihre Suchkriterien';

const TEXT_SEARCH_IN_DESCRIPTION = 'Auch in den Beschreibungen suchen';
const ENTRY_CATEGORIES = 'Kategorien:';
const ENTRY_INCLUDE_SUBCATEGORIES = 'Unterkategorien mit einbeziehen';
const ENTRY_MANUFACTURERS = 'Hersteller:';
const ENTRY_PRICE_FROM = 'Preis ab:';
const ENTRY_PRICE_TO = 'Preis bis:';
const ENTRY_DATE_FROM = 'hinzugefügt von:';
const ENTRY_DATE_TO = 'hinzugefügt bis:';

const ENTRY_PRICE_FROM_TEXT = '';
const ENTRY_PRICE_TO_TEXT = '';

const ENTRY_DATE = 'Datum';
const ENTRY_PRICE = 'Preis';

const TEXT_SEARCH_HELP_LINK = '<i class="fas fa-info-circle"></i>Hilfe zur Suche';

const TEXT_ALL_CATEGORIES = 'Alle Kategorien';
const TEXT_ALL_MANUFACTURERS = 'Alle Hersteller';

const HEADING_SEARCH_HELP = 'Hilfe zur erweiterten Suche';
const TEXT_SEARCH_HELP = <<<'EOT'
Suchbegriffe können durch AND und / oder OR verknüpft werden. <br>
<br>
Zum Beispiel, <u>frisch AND Pfirsich</u> liefert Ergebnisse, die beide Wörter enthält. <u>Orange OR Zitrone</u>, liefert Ergebnisse, die beide oder nur eines der Wörter enthalten.<br>
<br>
Exakte Treffer werden durch Einschließen in Anführungszeichen erzielt.<br>
<br>
Zum Beispiel, <u>"grüner Apfel"</u>
<br>
Man kann auch Klammern für eine weitere Einstellung der Suchparameter verwenden.<br>
<br>
Zum Beispiel <u>Marmelade AND (Erdbeer OR rot OR "grüner Apfel")</u>.
EOT;
const TEXT_CLOSE_WINDOW = '<u>Fenster schliessen</u> [x]';

const TEXT_NO_PRODUCTS = 'Es wurden keine Produkte gefunden, die den Suchkriterien entsprechen.';

const ERROR_AT_LEAST_ONE_INPUT = 'Wenigstens ein Feld des Suchformulars muss ausgefüllt werden.';
const ERROR_INVALID_FROM_DATE = 'Unzulässiges <b>von</b> Datum';
const ERROR_INVALID_TO_DATE = 'Unzulässiges <b>bis jetzt</b> Datum';
const ERROR_TO_DATE_LESS_THAN_FROM_DATE = 'Das Datum <b>von</b> muss größer oder gleich dem <b>bis jetzt</b> Datum sein';
const ERROR_PRICE_FROM_MUST_BE_NUM = '<b>Preis ab</b> muss eine Zahl sein';
const ERROR_PRICE_TO_MUST_BE_NUM = '<b>Preis bis</b> muss eine Zahl sein';
const ERROR_PRICE_TO_LESS_THAN_PRICE_FROM = '<b>Preis bis</b> muss größer oder gleich <b>Preis ab</b> sein.';
const ERROR_INVALID_KEYWORDS = 'Suchbegriff unzulässig';

const DATE_FORMAT_STRING = 'dd.mm.yyyy';
