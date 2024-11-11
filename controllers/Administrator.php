<?php



$admin = new Administrator();
if ($_SERVER["REQUEST_METHOD"] == "GET") {

    foreach ($_GET as $property => $value) {
        $property = htmlspecialchars($value);
    }

    if (isset($_GET['listUsers'])) {
        $admin->listUsers();
    }
    elseif (isset($_GET['listPackages'])) {
        $admin->listPackages();
    }
    elseif (isset($_GET['userDetails'])) {
        $user_id = (int)($_GET["userId"]);
        $admin->renderUserDetailsView($user_id);
    }
    elseif (isset($_GET['editUser'])) {
        $user_id = (int)($_GET["userId"]);
        $admin->getUser($user_id);
        header("location: ../edit-user.php");
    }
    elseif (isset($_GET['listCountries'])) {
        $admin->renderCountriesView();
    }
    elseif (isset($_GET['countryId'])) {
        $country_id = (int)$_GET["countryId"];
        $admin->renderStatesView($country_id);
    }
    elseif (isset($_GET['stateId'])) {
        $state_id = (int)$_GET["stateId"];
        $admin->renderLocationsView($state_id);
    }
    elseif (isset($_GET['listSubscriptions'])) {
        $admin->renderSubscriptionsView();
    }
    elseif (isset($_GET['listPayments'])) {
        $admin->renderPaymentsView();
    }
    elseif (isset($_GET['packageId'])) {
        $package_id = (int)$_GET["packageId"];
        $admin->renderPackageSubscriptionsView($package_id);
    }
    elseif (isset($_GET['listSGA'])) {
        $admin->renderSGAView();
    }
    elseif (isset($_GET['listTransactions'])) {
        $admin->renderTransactionsView();
    }
    elseif (isset($_GET['listPayouts'])) {
        $admin->renderPayoutsView();
    }
}
elseif ($_SERVER["REQUEST_METHOD"] == "POST") {

    foreach ($_POST as $property => $value) {
        $property = htmlspecialchars($value);
    }

    if (isset($_POST['editUser'])) {
        $user_id = $_POST['user_id'];
        $name = $_POST['$name'];
        $last_name = $_POST['$last_name'];
        $email = $_POST['$email'];
        $admin->editUser($user_id, $name, $last_name, $email);
    }
    elseif (isset($_POST["deleteUser"])) {
        $user_id = (int)($_POST["userId"]);
        $admin->deleteUser($user_id);
    }
    elseif (isset($_POST["createPackage"])) {
        $data["package_code"] = $_POST['package_code'];
        $data["packages_size"] = $_POST['package_size'];
        $data["package_amount"] = $_POST['package_amount'];
        $data["estate_name"] = $_POST['estate_name'];
        $data["color_code"] = trim($_POST['color_code'], "#");
        $data["location_id"] = (int)$_POST['location_id'];
        $admin->createPackage($data);
    }
    elseif (isset($_POST["createCountry"])) {
        $country_name = $_POST['country_name'];
        $country_code = $_POST['country_code'];
        $admin->createCountry($country_name, $country_code);
    }
    elseif (isset($_POST["createState"])) {
        $state_name = $_POST['state_name'];
        $country_id = (int)$_POST['country_id'];
        $admin->createState($state_name, $country_id);
    }
    elseif (isset($_POST["createLocation"])) {
        $location_name = $_POST['location_name'];
        $state_id = (int)$_POST['state_id'];
        $admin->createLocation($location_name, $state_id);
    }
}
