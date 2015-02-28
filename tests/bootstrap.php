<?php

/* all the things */
error_reporting(E_ALL | E_STRICT);

/* debug mode has to be set to something or include files will die() */
if (!defined('DEBUG_MODE')) {
    define('DEBUG_MODE', false);
}

/* determine current absolute path used for require statements */
define('APP_PATH', dirname(dirname(__FILE__)).'/');

/* random id */
define('SITE_ID', 'randomid');

/* get mock objects */
require APP_PATH.'tests/mocks.php';

/* get the framework */
require APP_PATH.'lib/framework.php';

/* get the stubs */
require APP_PATH.'tests/stubs.php';

?>
