<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2021 Phoenix Cart

  Released under the GNU General Public License
*/

const MODULE_SECURITY_CHECK_FOPEN_WRAPPER_TITLE = 'allow_url_fopen';
const MODULE_SECURITY_CHECK_FOPEN_WRAPPER_ERROR = <<<'EOT'
allow_url_fopen muss in der php.ini aktiviert sein. <br>
Dies ist eine Einstellung des Hosts und könnte über die Host-Einstellungen konfiguriert werden. Bitte wenden Sie sich an den Support des Hosts, wenn dies nicht möglich ist.
EOT;
