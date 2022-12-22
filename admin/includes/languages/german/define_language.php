<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2022 Phoenix Cart

  Released under the GNU General Public License
*/

const HEADING_TITLE = 'Sprache definieren';

const TABLE_HEADING_FILES = 'Dateien';
const TABLE_HEADING_WRITABLE = 'Beschreibbar';
const TABLE_HEADING_LAST_MODIFIED = 'Letzte Änderung';

const TEXT_EDIT_NOTE = <<<'EORT'
<p class="lead">Definitionen bearbeiten</p>

<p>Jede Sprachdefinition wird wie folgt als PHP-Konstante festgelegt:</p>

<p><pre>const TEXT_MAIN = '<span style="background-color: #FFFF99;">Dieser Text kann bearbeitet werden. Es ist wirklich einfach!</span>');</pre></p>

<p>Der markierte Text kann bearbeitet werden. Da diese Definition einfache Anführungszeichen verwendet, um den Text einzuschliessen, müssen alle einfachen Anführungszeichen innerhalb der Textdefinition mit einem umgekehrten Schrägstrich versehen werden (z. B. It\'s).</p>

<p>Mehrzeilige Einträge können gemacht werden</p>

<p><pre>const TEXT_MAIN = <<<'EOT'
<span style="background-color: #FFFF99;">Dieser Text kann bearbeitet werden.
 Es ist wirklich einfach!</span>
EOT;</pre></p>

<p>Ausserdem ist es nicht mehr erforderlich, in mehrzeiligen Einträgen wie diesem mit einem Backslash zu maskieren.</p>
EORT;

const TEXT_FILE_DOES_NOT_EXIST = 'Datei nicht vorhanden.';
const TEXT_INFO_DOWNLOAD_ONLY = 'Nur Download (nicht serverseitig speichern)';

const ERROR_FILE_NOT_WRITEABLE = '<strong>Error:</strong> Die Datei ist schreibgeschützt. Bitte korrigieren Sie die Zugriffsrechte für: %s';
