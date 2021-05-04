<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2021 Phoenix Cart

  Released under the GNU General Public License
*/

const HEADING_TITLE = 'Administratoren';

const TABLE_HEADING_ADMINISTRATORS = 'Administratoren';
const TABLE_HEADING_HTPASSWD = 'Abgesichert mit htpasswd';
const TABLE_HEADING_ACTION = 'Action';

const TEXT_INFO_INSERT_INTRO = 'Bitte den neuen Administrator mit seinen Daten eingeben';
const TEXT_INFO_EDIT_INTRO = 'Nehmen Sie bitte alle notwendigen Änderungen vor';
const TEXT_INFO_DELETE_INTRO = 'Sind Sie sicher dass Sie diesen Administrator löschen möchten?';
const TEXT_INFO_HEADING_NEW_ADMINISTRATOR = 'Neuer Administrator';
const TEXT_INFO_USERNAME = 'Benutzername:';
const TEXT_INFO_NEW_PASSWORD = 'Neues Password:';
const TEXT_INFO_PASSWORD = 'Password:';
const TEXT_INFO_PROTECT_WITH_HTPASSWD = 'mit .htpasswd schützen';
const TEXT_HTPASSWRD_NA_IIS = 'N/A';

const ERROR_ADMINISTRATOR_EXISTS = '<strong>Error:</strong> Administrator existiert bereits.';

const HTPASSWD_INFO = <<<'EOT'
<strong>Zusätzlicher Schutz durch htaccess/htpasswd</strong>
<p>Diese CE-Phoenix-Administration-Tool-Installation ist nach außen nicht zusätzlich durch htaccess/htpasswd gesichert.</p>
<p>Durch Aktivieren der htaccess/htpasswd Security-Layer werden automatisch der Administrator-Benutzername und das Kennwort in einer htpasswd-Datei beim Administrator-Passwort-Update aktualisiert. </p>
<p><strong>Hinweis:</strong> Wenn Sie diesen Schutz aktivieren und Sie sich nicht mehr im Administrations-Tool anmelden können,
 führen Sie die folgenden Änderungen durch und kontaktieren Sie den Provider Ihrere Website mit der Bitte, den htaccess / htpasswd-Schutz zu aktivieren:</p>
<p><u><strong>1. Bearbeiten Sie diese Datei:</strong></u><br /><br />%s</p>
<p>Entfernen Sie die folgenden Zeilen, wenn sie vorhanden sind:</p>
<p><i>%s</i></p>
<p><u><strong>2. Löschen Sie diese Datei:</strong></u><br /><br />%s</p>
EOT;
const HTPASSWD_SECURED = <<<'EOT'
<strong>Zusätzlicher Schutz durch htaccess/htpasswd</strong>
<p>Diese CE-Phoenix-Administration-Tool-Installation wird durch htaccess/htpasswd Schutz gesichert.</p>
EOT;
const HTPASSWD_PERMISSIONS = <<<'EOT'
<strong>Zusätzlicher Schutz durch htaccess/htpasswd</strong>
<p>Diese CE-Phoenix-Administration-Tool-Installation ist nicht durch htaccess/htpasswd Schutz gesichert.</p>
<p>Die folgenden Dateien muss vom Webserver beschreibbar sein, um htaccess/htpasswd-Schutz zu aktivieren:</p>
<ul>
<li>%s</li>
<li>%s</li>
</ul>
<p>Laden Sie diese Seite neu, um zu ermitteln, ob dass die richtigen Dateiberechtigungen gesetzt wurden.</p>
EOT;

const IMAGE_INSERT_NEW_ADMIN = 'Neuer Admin-Benutzer';
