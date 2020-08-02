<?php
/**
 * @author Amin Mahmoudi (MasterkinG)
 * @copyright    Copyright (c) 2019 - 2022, MsaterkinG32 Team, Inc. (https://masterking32.com)
 * @link    https://masterking32.com
 * @Description : It's not masterking32 framework !
 **/

use voku\helper\AntiXSS;

ob_start();
header('X-Powered-Framework:MasterkinG-Framework');
header('X-Powered-CMS:MasterkinG-CMS');
session_start();
define('base_path', str_replace('application/loader.php', '', str_replace("\\", '/', __FILE__)));
define('app_path', str_replace('application/loader.php', '', str_replace("\\", '/', __FILE__)) . 'application/');
require_once app_path . 'vendor/autoload.php';
require_once app_path . 'config/config.php';
require_once app_path . 'include/functions.php';

if (get_config('debug_mode')) {
    @error_reporting(-1);
    @ini_set('display_errors', 1);
} else {
    @ini_set('display_errors', 0);
    if (version_compare(PHP_VERSION, '5.3', '>=')) {
        @error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT & ~E_USER_NOTICE & ~E_USER_DEPRECATED);
    } else {
        @error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_USER_NOTICE);
    }
}

require_once app_path . 'include/database.php';
require_once app_path . 'include/user.php';
require_once app_path . 'include/vote.php';
require_once app_path . 'include/status.php';
$antiXss = new AntiXSS();
if (!empty(get_config('script_version'))) {
    /* @TODO Add online version check! */
	if(version_compare(get_config('script_version'), '1.9.7', '<') )
	{
		echo 'Use last version of config.php file.';
		exit();
	}
} else {
    echo 'Use last version of config.php file.';
    exit();
}
database::db_connect();