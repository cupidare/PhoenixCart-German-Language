<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2020 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Administratoren');

define('TABLE_HEADING_ADMINISTRATORS', 'Administratoren');
define('TABLE_HEADING_HTPASSWD','Abgesichert mit htpasswd');
define('TABLE_HEADING_ACTION', 'Action');

define('TEXT_INFO_INSERT_INTRO', 'Bitte den neuen Administrator mit seinen Daten eingeben');
define('TEXT_INFO_EDIT_INTRO', 'Nehmen Sie bitte alle notwendigen änderungen vor');
define('TEXT_INFO_DELETE_INTRO', 'Sind Sie sicher dass Sie diesen Administrator löschen möchten?');
define('TEXT_INFO_HEADING_NEW_ADMINISTRATOR', 'Neuer Administrator');
define('TEXT_INFO_USERNAME', 'Benutzername:');
define('TEXT_INFO_NEW_PASSWORD', 'Neues Password:');
define('TEXT_INFO_PASSWORD', 'Password:');
define('TEXT_INFO_PROTECT_WITH_HTPASSWD','mit .htpasswd schützen');

define('ERROR_ADMINISTRATOR_EXISTS', '<strong>Error:</strong> Administrator existiert bereits.');

define('HTPASSWD_INFO', '<strong>Zusätzlicher Schutz durch htaccess/htpasswd</strong><p>Diese OSCOM CE Phoenix Administration Tool-Installation ist nach außen nicht zusätzlich durch htaccess/htpasswd gesichert.</p><p>Durch Aktivieren der htaccess / htpasswd Security-Layer werden automatisch der Administrator-Benutzername und das Kennwort in einer htpasswd-Datei beim Administrator-Passwort-Update aktualisiert. </p><p><strong>Hinweis:</strong> Wenn Sie diesen Schutz aktivieren und Sie sich nicht mehr im Administrations-Tool anmelden können, führen Sie die folgenden Änderungen durch und kontaktieren Sie den Provider Ihrere Website mit der Bitte, den htaccess / htpasswd-Schutz zu aktivieren:</p><p><u><strong>1.  Bearbeiten Sie diese Datei:</strong></u><br /><br />' . DIR_FS_ADMIN . '.htaccess</p><p>Entfernen Sie die folgenden Zeilen, wenn sie vorhanden sind:</p><p><i>%s</i></p><p><u><strong>2. Löschen Sie diese Datei:</strong></u><br /><br />' . DIR_FS_ADMIN . '.htpasswd_oscommerce</p>') ;
define('HTPASSWD_SECURED', '<strong>Zusätzlicher Schutz durch htaccess/htpasswd</strong><p>Diese OSCOM CE Phoenix Administration Tool Installation wird durch htaccess/htpasswd Schutz gesichert.</p>'); 
define('HTPASSWD_PERMISSIONS', '<strong>Zusätzlicher Schutz durch htaccess/htpasswd< /strong><p>Diese OSCOM CE Phoenix Administration Tool Installation ist nicht durch htaccess/htpasswd Schutz gesichert.</p><p>Die folgenden Dateien muss vom Webserver beschreibbar sein, um htaccess/htpasswd-Schutz zu aktivieren:</p><ul><li>' . DIR_FS_ADMIN . '.htaccess</li><li>' . DIR_FS_ADMIN . '.htpasswd_oscommerce</li></ul><p>Laden Sie diese Seite neu, um zu ermitteln, ob dass die richtigen Dateiberechtigungen gesetzt wurden.</p>'); 

define('IMAGE_INSERT_NEW_ADMIN', 'Neuer Admin-Benutzer');
