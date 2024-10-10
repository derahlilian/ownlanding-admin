<?php
require_once "../config/init.php";
class Administrator extends Admin
{
    /*
     * Fetch all Customers from the database and save in session object then redirect to admin dashboard
     */
    function listUsers(): void
    {
       $result = $this->getAllUsers();
       $_SESSION["listUsers"] = $result;
       header("location: ../user.php");
    }

    /*
     * Fetch Content and render user details page
     */
    function renderUserDetailsView(int $user_id): void
    {
        $this->getUser($user_id);
        $this->getUserPackages($user_id);
        $this->getUserDownlines($user_id);
        header("location: ../user-details.php");
    }

    /*
     * Fetch Customer Details and save in session object
     * @user_id: id of user
     */

    function getUser($id): void
    {
        $user = $this->getUserById($id);
        if (!$user) {
            header("location: ../user.php");
        }
        $_SESSION["editUser"] = $user;
    }

    /*
     * Fetch Customer packages
     * @user_id: id of user
     */
    function getUserPackages(int $id): void
    {
        $Packages = $this->getPackagesByUserId($id);
        if (!$Packages) {
            $_SESSION["userPackages"] = [];
        }
        $_SESSION["userPackages"] = $Packages;
    }

    /*
     * Fetch Customer Down line to second generation
     * @user_id: id of user
     */
    function getUserDownlines(int $id): void
    {
        $downline = $this->getDownlineByUserId($id);
        if ($downline) {
            for ($i = 0; $i < count($downline); $i++) {
                $downline[$i]["downline"] = $this->getDownlineByUserId($downline[$i]["id"]);
            }
            $_SESSION["userDownlines"] = $downline;
        }
        else {
            $_SESSION["userDownlines"] = [];
        }
    }


    /*
     * Edit Customer details then refresh users listing and redirect admin dashboard
     * @user_id: id of user to edit
     * @name: user first name
     * @last_name: user last name
     * @email: user email
     */
    function editUser(int $user_id, string $name, string $last_name, string $email): void
    {
        if ($this->updateUser($user_id, $name, $last_name, $email)) {
            $_SESSION["userUpdateSuccess"] = true;
            $this->listUsers();
            exit();
        }
    }

    /*
     * Delete User from the database
     * @user_id: id of the user
     */
    function deleteUser(int $user_id): void
    {
        $this->deleteUserById($user_id);
        $this->listUsers();
    }

    /*
     * Fetch all Packages and Locations from the database and save in session object then redirect to packages page
     */
    function listPackages(): void
    {
        $this->getAllPackages();
        $this->getAllLocations();
        header("location: ../package.php");
    }

    /*
     * Fetch All Packages
     */
    public function getAllPackages(): void
    {
        $Packages = $this->getPackages();
        $_SESSION["allPackages"] = $Packages;
    }

    /*
     * Create New Package
     */
    public function createPackage(array $data): void
    {
        $package_exists = $this->getPackageByCode($data['package_code']);
        if ($package_exists) {
            $_SESSION["createPackageError"] = "Package already exists";
            $this->listPackages();
            exit();
        }
        if (!$this->createNewPackage($data)) {
            $_SESSION["createPackageError"] = "Error creating package, please try again";
        }
        $this->listPackages();
    }

    /*
     * Create New Country
     */
    function createCountry(string $country_name, string $county_code): void
    {
        $country_name = $this->capitalizeName($country_name);
        $county_code = strtoupper($county_code);
        $country_exists = $this->getCountryByName($country_name);
        if ($country_exists) {
            $_SESSION["createCountryError"] = "Country already exists";
            $this->renderCountriesView();
            exit();
        }
        if (!$this->createNewCountry($country_name, $county_code)) {
            $_SESSION["createCountryError"] = "Error creating country, please try again";
        }
        $this->renderCountriesView();
    }

    /*
     * Create New State
     */
    function createState(string $state_name, int $country_id): void
    {
        $state_name = $this->capitalizeName($state_name);
        $state_exists = $this->getStateByNameAndCountryId($state_name, $country_id);
        if ($state_exists) {
            $_SESSION["createStateError"] = "State already exists";
            $this->renderStatesView($country_id);
            exit();
        }
        if (!$this->createNewState($state_name, $country_id)) {
            $_SESSION["createStateError"] = "Error creating state, please try again";
        }
        $this->renderStatesView($country_id);
    }

    /*
     * Create New Location
     */
    function createLocation(string $location_name, int $state_id): void
    {
        $location_name = $this->capitalizeName($location_name);
        $location_exists = $this->getLocationByNameAndStateId($location_name, $state_id);
        if ($location_exists) {
            $_SESSION["createLocationError"] = "Location already exists";
            $this->renderLocationsView($state_id);
            exit();
        }
        if (!$this->createNewLocation($location_name, $state_id)) {
            $_SESSION["createLocationError"] = "Error creating location, please try again";
        }
        $this->renderLocationsView($state_id);
    }


    /*
     * Fetch All Locations
     */
    public function getAllLocations(): void
    {
        $Locations = $this->getLocations();
        $_SESSION["allLocations"] = $Locations;
    }

    /*
     * Fetch Countries and render
     */
    function renderCountriesView(): void
    {
        $countries = $this->getCountries();
        $_SESSION["allCountries"] = $countries;
        header("location: ../country.php");
    }

    /*
     * Fetch States for a Country and render
     */
    function renderStatesView(int $country_id): void
    {
        $states = $this->getStatesByCountryId($country_id);
        $states[0]["country_id"] = $country_id;
        $_SESSION["allCountryStates"] = $states;
        header("location: ../state.php");
    }

    /*
    * Fetch Locations for a State and render
    */
    function renderLocationsView(int $state_id): void
    {
        $locations = $this->getLocationsByStateId($state_id);
        $locations[0]["state_id"] = $state_id;
        $_SESSION["allStateLocations"] = $locations;
        header("location: ../location.php");
    }

    /*
    * Fetch All Subscriptions and render
    */
    function renderSubscriptionsView(): void
    {
        $subscriptions = $this->getAllSubscriptions();
//        var_dump($subscriptions);
        $_SESSION["allSubscriptions"] = $subscriptions;
        header("location: ../subscription.php");
    }

    /*
     * Fetch All Payments and render
     */
    function renderPaymentsView(): void
    {
        $payments = $this->getAllPayments();
        $_SESSION["allPayments"] = $payments;
        header("location: ../payment.php");
    }

    /*
     * Fix Nouns
     * Capitalize each word
     */
    function capitalizeName(string $name): string
    {
        return ucfirst(trim($name, ' \r\t\v\0\.\,"\"'));
    }

}



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
