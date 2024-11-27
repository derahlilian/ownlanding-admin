<?php
require_once "init.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $refresh = $_SERVER["REQUEST_URI"];
    if (isset($_POST["createPackageButton"])) {
        $data = [
            "location_id" => (int)$_POST["location_id"],
            "package_code" => $_POST['package_code'],
            "packages_size" => $_POST['package_size'],
            "package_amount" => $_POST['package_amount'],
            "estate_name" => $_POST['estate_name'],
            "color_code" => trim($_POST['color_code'], "#")
        ];
        $adminCl->createNewPackage($data);
    }
    elseif (isset($_POST["editPackageButton"])) {
        $data = [
            "id" => (int)$_POST["package_id"],
            "package_code" => $_POST['package_code'],
            "packages_size" => $_POST['package_size'],
            "package_amount" => $_POST['package_amount'],
            "estate_name" => $_POST['estate_name'],
            "color_code" => trim($_POST['color_code'], "#")
        ];
        $adminCl->updatePackage($data);
    }
    echo "<script>window.location.href = $refresh; </script>";
}





$title = "Packages";
$pageFile = "package.php";
require "components/dashboard_template.php";