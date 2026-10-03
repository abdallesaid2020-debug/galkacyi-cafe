<?php
date_default_timezone_set('Africa/Mogadishu');

// Find the project's URL automatically from the running page
$scriptDir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
$scriptDir = preg_replace('#/pages$#', '', $scriptDir);
define('BASE_URL', rtrim($scriptDir, '/'));

define('SITE_NAME',     'galkayo-café');
define('SITE_PHONE',    '+252 90 000 0000');
define('SITE_EMAIL',    'info@galkayocafe.com');
define('SITE_ADDRESS',  'Main Road, Galkayo, Somalia');
define('SITE_WHATSAPP', '252900000000');