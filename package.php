<?php
require_once "init.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $refresh = $_SERVER["REQUEST_URI"];
    if (isset($_POST["createPackageButton"])) {
        $data["package_code"] = $_POST['package_code'];
        $data["packages_size"] = $_POST['package_size'];
        $data["package_amount"] = $_POST['package_amount'];
        $data["estate_name"] = $_POST['estate_name'];
        $data["color_code"] = trim($_POST['color_code'], "#");
        $data["location_id"] = (int)$_POST['location_id'];
        $adminCl->createNewPackage($data);
    }
    echo "<script>window.location.href = $refresh; </script>";
}





$title = "Packages";
$pageFile = "package.php";
require "components/dashboard_template.php";