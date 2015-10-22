<?php
$domain = str_replace('index.php', '', $_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']);

// Always provide a TRAILING SLASH (/) AFTER A PATH
define('URL', 'http://'.$domain);
define('LIBS', 'libs/');
define('MAX_FILE_SIZE', 2000);
define('UPLOAD_PATH', 'uploads');

// The sitewide hashkey, do not change this because its used for passwords!
// This is for other hash keys... Not sure yet
define('HASH_GENERAL_KEY', 'mySimpleMvc1');

// This is for database passwords only
define('HASH_PASSWORD_KEY', 'mySimpleMvc1');

include_once 'db.php';