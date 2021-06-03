<?php

session_start();
require_once 'config.php';
require_once 'functions.php';

add_into_db($_GET);