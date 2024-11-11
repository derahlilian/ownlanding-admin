<?php
session_start();
require_once "env.config.php";
require_once "libs/Database.php";
require_once "libs/AuthClass.class.php";
require_once "libs/Administration.php";


$dbClass = new Database();
$authClass = new AuthClass();
$adminCl = new Administration();