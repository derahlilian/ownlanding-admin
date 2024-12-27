<?php
require_once("init.php");
$authClass->logout();
header("Location: login");