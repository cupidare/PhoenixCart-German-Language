<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2021 Phoenix Cart

  Released under the GNU General Public License
*/

const TEXT_TESTING_DB = '<i class="fas fa-spinner fa-spin fa-2x"></i> Teste Datenbankverbindung.';
const TEXT_IMPORTING_DB = '<i class="fas fa-spinner fa-spin fa-2x"></i> Die Datenbankstruktur wird importiert. Dies kann einen Moment dauern.';
const TEXT_DB_SUCCESS = '<i class="fas fa-thumbs-up fa-2x"></i> Datenbank erfolgreich importiert.';
const TEXT_DB_PROBLEM = <<<'EOT'
<p><i class="fas fa-thumbs-down fa-2x text-danger"></i> Während des Datenbankimports trat ein Problem auf. Folgende Fehlermeldung wurde ausgegeben:</p>
<p  class="text-danger"><strong>%s</strong></p>
<p class="text-danger">Bitte überprüfen Sie die Verbindungseinstellungen und versuchen es erneut.</p>
EOT;
const TEXT_DB_CONNECTION_PROBLEM = <<<'EOT'
<p><i class="fas fa-thumbs-down fa-2x text-danger"></i> Während der Verbindung zur Datenbank trat ein Problem auf. Folgende Fehlermeldung wurde ausgegeben:</p>
<p class="text-danger"><strong>%s</strong></p>
<p class="text-danger">Bitte überprüfen Sie die Verbindungseinstellungen und versuchen es erneut.</p>
EOT;
const TEXT_DATABASE_ADDRESS = '<small class="form-text text-muted">Die Adresse des Datenbankservers in Form von Hostname oder IP-Adresse.</small>';
const TEXT_USERNAME = 'Nutzername';
const TEXT_USERNAME_DESCRIPTION = '<small class="form-text text-muted">Der Nutzername für die Verbindung zum Datenbankserver.</small>';
const TEXT_PASSWORD = 'Passwort';
const TEXT_PASSWORD_DESCRIPTION = '<small class="form-text text-muted">Das Passwort für die Verbindung zum Datenbankserver.</small>';
const TEXT_DATABASE_NAME = 'Name der Datenbank';
const TEXT_NAME_DESCRIPTION = '<small class="form-text text-muted">Der Name der Datenbank, die die Daten enthalten soll.</small>';
const TEXT_IMPORT_SAMPLE_DATA = 'Beispieldaten importieren';
const TEXT_SAMPLE_IMPORT_DESCRIPTION = '<small class="form-text text-muted">Sollen Beispieldaten für Musterprodukte und -kategorien geladen werden?</small>';
const TEXT_CONTINUE_STEP_2 = 'Weiter zu Schritt 2';
const TEXT_STEP_1 = 'Schritt 1';
const TEXT_DB_EXPLANATION = <<<'EOT'
<p>Der Datenbankserver speichert Daten wie die Produktinformationen, Kundendaten und Bestellungen.</p>
<p>Bitte kontaktieren Sie Ihren Server-Admin (Host), wenn Sie die Zugangsdaten zu Ihrer Datenbank nicht kennen.</p>
EOT;
const TEXT_DATABASE = 'Datenbank';
const TEXT_SKIP_SAMPLE_DATA = 'Musterdaten überspringen';
