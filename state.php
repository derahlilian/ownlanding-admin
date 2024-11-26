<?php
require_once "init.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $refresh = $_SERVER["REQUEST_URI"];
    if (isset($_POST["createStateButton"])) {
        $country_id = (int)$_POST["country_id"];
        $state_name = $_POST["state_name"];
        $adminCl->createNewState($state_name, $country_id);
    }
    elseif (isset($_POST["editStateButton"])) {
        $state_id = (int)$_POST["state_id"];
        $state_name = $_POST["state_name"];
        $adminCl->updateState($state_id, $state_name);
    }
    elseif (isset($_POST["deleteStateButton"])) {
        $state_id = (int)$_POST["state_id"];
        $adminCl->deleteStateById($state_id);
    }
    echo "<script>window.location.href = $refresh </script>";
}





$title = "List States";
$pageFile = "states.php";
require "components/dashboard_template.php";