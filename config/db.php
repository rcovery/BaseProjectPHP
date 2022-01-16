<?php
define("DB_DSN", "mysql:host=db;dbname=projectdb");
define("DB_USER", "username");
define("DB_PASS", "password");
define("DB_OPTIONS", array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
