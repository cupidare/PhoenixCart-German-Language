<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2021 Phoenix Cart

  Released under the GNU General Public License
*/

const TEXT_MYSQLI_REQUIRED = 'Die MySQLi-Erweiterung wird benötigt - ist aber nicht installiert. Bitte aktivieren Sie MySQLi.';
const TEXT_MINIMUM_VERSION = 'Die PHP-Version muss mindestens <strong>%s</strong>. Diese Version ist %s.';
const TEXT_MAXIMUM_VERSION = 'Das Verhalten bei Versionen <strong>%s oder darüber wurde nicht getestest</strong>. Diese Version ist %s.';
const TEXT_FOPEN_WRAPPERS_REQUIRED = 'Fopen Wrappers sollten aktiviert sein. Dies ist eine Einstellung von Ihrem <em>Host</em>. Bitte kontaktieren Sie ihn, ob er dies aktivieren kann.';
const TEXT_CURL_REQUIRED = 'cURL sollten aktiviert sein. Dies ist eine Einstellung von Ihrem <em>Host</em>. Bitte kontaktieren Sie ihn, ob er dies aktivieren kann.';
const TEXT_WELCOME_TO = 'Willkommen bei CE Phoenix Cart';
const TEXT_HELPS_YOU_SELL = <<<'EOT'
<p>Mit CE Phoenix Cart können Sie Produkte weltweit mit Ihrem eigenen Onlineshop verkaufen.
Im Admin-Tool können Sie Produkte, Kunden, Bestellungen, Sonderpreise, uvm. verwalten.</p>
<p>Viele Shop-Besitzer und Entwickler haben sich zusammengeschlossen und bieten sowohl freie als auch bezahlte Erweiterungen.</p>
EOT;
const TEXT_NEW_INSTALLATION_OF = 'Neue CE Phoenix Cart v%s Installation';
const TEXT_CONFIGURATION_NOT_WRITABLE = <<<'EOT'
<p>Der Webserver kann die Installationsparameter nicht in die Konfigurationsdateien speichern.</p>
<p>Die folgenden Dateien müssen mit Schreibrechten versehen werden: (chmod 777 hilft immer):</p>
EOT;
const TEXT_CHANGE_MAY_NEED_REBOOT = 'Werden Webserver-Einstellungen geändert, muss gegebenenfalls ein Neustart erfolgen.';
const TEXT_PLEASE_PROCEED = 'Bitte fahren Sie mit der Installation fort.';
const TEXT_ENABLE_JS = 'Bitte aktivieren Sie Javascript in Ihrem Browser, um die Installation durchführen zu können.';
const TEXT_SERVER_CAPABILITIES = 'Server Eigenschaften';
const TEXT_PHP_VERSION = 'PHP-Version';
const TEXT_PHP_SETTINGS = 'PHP-Einstellungen';
const TEXT_REQUIRED_EXTENSIONS = 'Benötigte Erweiterungen';
const TEXT_RECOMMENDED_EXTENSIONS = 'Empfohlene Erweiterungen';
