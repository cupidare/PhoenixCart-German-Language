<?php
/*
  $Id$

  CE Phoenix, E-Commerce Made Easy
  https://phoenixcart.org

  Copyright (c) 2021 Phoenix Cart

  Released under the GNU General Public License
*/

const HEADING_TITLE = 'Versions-Checker';

const TABLE_HEADING_VERSION = 'Version';
const TABLE_HEADING_RELEASED = 'Veröffentlicht am';
const TABLE_HEADING_ACTION = 'Aktion';

const TITLE_INSTALLED_VERSION = 'Installierte Version: <strong>CE Phoenix v%s</strong>';

const VERSION_SERVER_FAILURE = 'Konnte die verfügbaren Versionen nicht vom Server laden. Bitte Internetverbindung testen oder später nocheinmal zu versuchen.';
const VERSION_RUNNING_LATEST = 'Sie verwenden die aktuelle Version von CE Phoenix.';
const VERSION_UPGRADES_AVAILABLE = <<<'EOT'
<strong>CE Phoenix %s</strong> ist die aktuellste Version für Sie!<hr>
<a class="alert-link" target="_blank" href="https://phoenixcart.org/forum/viewtopic.php?f=26&t=309">Zertifizierte Entwickler</a>
 und detaillierte "<a class="alert-link" target="_blank" href="https://phoenixcart.org/forum/app.php/tag/phoenix-update">Do-It-Yourself-</a>"
Anweisungen gibt es im Phoenix Club.
EOT;
