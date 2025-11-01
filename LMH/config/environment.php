<?php
define('ENVIRONMENT', 'development');
if (ENVIRONMENT === 'development') {
    error_reporting(E_ALL);
} else {
    error_reporting(0);
}
