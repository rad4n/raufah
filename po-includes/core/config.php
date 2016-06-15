<?php

$site['structure'] = 'PopojiCMS';
$site['ver'] = '2.0';
$site['build'] = '0';
$site['release'] = '07 Juni 2016';

define('CONF_STRUCTURE', $site['structure']);
define('CONF_VER', $site['ver']);
define('CONF_BUILD', $site['build']);
define('CONF_RELEASE', $site['release']);

$site['url'] = "http://localhost/nyokap/";
$site['adm'] = "po-admin";
$site['con'] = "po-content";
$site['inc'] = "po-includes";

define('WEB_URL', $site['url']);
define('DIR_ADM', $site['adm']);
define('DIR_CON', $site['con']);
define('DIR_INC', $site['inc']);

$db['host'] = "localhost";
$db['sock'] = "";
$db['port'] = "";
$db['user'] = "root";
$db['passwd'] = "";
$db['db'] = "nyokap";

define('DATABASE_HOST', $db['host']);
define('DATABASE_SOCK', $db['sock']);
define('DATABASE_PORT', $db['port']);
define('DATABASE_USER', $db['user']);
define('DATABASE_PASS', $db['passwd']);
define('DATABASE_NAME', $db['db']);

?>