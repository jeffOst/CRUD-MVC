<?php

error_reporting(E_ALL);
ini_set('ignore_repeated_errors', TRUE);
ini_set('display_errors', FALSE);
ini_set('log_errors', TRUE);

require 'config/config.php';
ini_set('error_log', DIRECTORY . "logs/errors.log");
require_once("class/vista.php");
require_once("class/controlador.php");
require_once("class/ruteador.php");
require_once("class/database.php");

$ruteador = new Ruteador();

?>