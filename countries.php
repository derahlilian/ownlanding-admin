<?php
require_once "init.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $refresh = 'countries.php';
    if(isset($_POST['createCountryButton'])){
        $sv = $adminCl->createNewCountry($_POST['country_name'] ?? "" , $_POST['country_code']);
        if($sv){
            echo "<script>window.location.href = $refresh </script>";
        }
    }

    $id = $_POST['countryid'];
    if (isset($_POST['deleteCountryButton'])) {
        if ($adminCl->deleteCountryById($id)) {
            echo "<script>window.location.href = $refresh </script>";
        }
    }
    else if (isset($_POST['editCountryButton'])) {
        $name = $_POST['country_name'];
        $code = $_POST['country_code'];
        if ($adminCl->updateCountryById($id, $name, $code)){
            echo "<script>window.location.href = $refresh </script>";
        }
    }
}

$title = "List Countries";
$pageFile = "country.php";
require "components/dashboard_template.php";