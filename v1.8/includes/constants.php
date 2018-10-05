<?php

/*
Spence McComb
September 19, 2018
WEBD3201-02
*/

// User types
define('ADMIN', 's');
define('AGENT', 'a');
define('CLIENT', 'c');
define('PENDING', 'p');
define('DISABLED', 'd');

// Database constants
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'group14_db');
define('DB_PORT', 5432);
define('DB_PASSWORD', '02cemp02');
define('DB_USER', 'group14_admin');

// State maintenance constants
define('COOKIE_LIFESPAN', 2592000); // 30 days worth of seconds
