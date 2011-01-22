<?php
/**
 * Base file where everything is configured and dispatched to
 *
 * PHP version 5
 *
 * @category  Base
 * @package   LATC
 * @author    Sarven Capadisli <sarven.capadisli@deri.org>
 * @copyright 2010 Digital Enterprise Research Institute
 * @license   http://www.fsf.org/licensing/licenses/gpl-3.0.html GNU General Public License version 3.0
 * @link      http://deri.org/
 */

define('SITE_DIR', '/var/www/govdata.ie/');
define('LATC_DIR', '/var/www/lib/linked-data-pages/');
define('PAGET_DIR', '/var/www/lib/paget/');
define('MORIARTY_DIR', '/var/www/lib/moriarty/');
define('MORIARTY_ARC_DIR', '/var/www/lib/arc2/');

define('STORE_URI', 'http://localhost:3030/cso/query');

require_once LATC_DIR . 'classes/LATC_Config.php';
require_once LATC_DIR . 'classes/LATC.php';
require_once SITE_DIR . 'classes/SITE_Template.php';

$config = new LATC_Config(); /* Grabs configuration values from this site */
$space = new LATC($config);  /* Starts to bulid the request */
$space->dispatch();          /* Dispatches the requested URI */
?>
