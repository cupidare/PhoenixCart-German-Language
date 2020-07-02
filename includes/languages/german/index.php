<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2019 osCommerce CE Phoenix

  Released under the GNU General Public License
*/

define('TABLE_HEADING_NEW_PRODUCTS', 'Neue Produkte im %s');

define('TEXT_NO_PRODUCTS', 'Es gibt keine Produkte in dieser Kategorie.');
define('TEXT_NUMBER_OF_PRODUCTS', 'Artikel: ');
define('TEXT_SHOW', '<strong>Zeigen:</strong>');
define('TEXT_BUY', 'Bestelle \'');
define('TEXT_NOW', '\' jetzt');
define('TEXT_ALL_CATEGORIES', 'Alle Kategorien');
define('TEXT_ALL_MANUFACTURERS', 'Alle Hersteller');

// seo
if ( ($category_depth == 'top') && (!isset($_GET['manufacturers_id'])) ) {
  define('META_SEO_TITLE', 'Index Page Title');
  define('META_SEO_DESCRIPTION', 'This is the description of your site to be used in the META Description Element');
}

