<?php
require_once "init.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $refresh = $_SERVER["REQUEST_URI"];
    if (isset($_POST["createLocationButton"])) {
        $state_id = (int)$_POST["state_id"];
        $location_name = $_POST["location_name"];
        $adminCl->createNewLocation($location_name, $state_id);
    }
    elseif (isset($_POST["editLocationButton"])) {
        $location_id = (int)$_POST["location_id"];
        $location_name = $_POST["location_name"];
        $adminCl->updateLocation($location_id, $location_name);
    }
    elseif (isset($_POST["deleteLocationButton"])) {
        $location_id = (int)$_POST["location_id"];
        $adminCl->deleteLocation($location_id);
    }
    echo "<script>window.location.href = $refresh </script>";
}


$title = "List Locations";
$pageFile = "location.php";
require "components/dashboard_template.php";