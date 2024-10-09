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
        }
        if (!$this->createNewPackage($data)) {
            $_SESSION["createPackageError"] = "Error creating package, please try again";
        }
        $this->listPackages();
    }

    /*
     * Fetch All Locations
     */
    public function getAllLocations(): void
    {
        $Locations = $this->getLocations();
        $_SESSION["allLocations"] = $Locations;
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
        $admin->getUser($user_id);
        $admin->getUserPackages($user_id);
        $admin->getUserDownlines($user_id);
        header("location: ../user-details.php");
    }
    elseif (isset($_GET['editUser'])) {
        $user_id = (int)($_GET["userId"]);
        $admin->getUser($user_id);
        header("location: ../edit-user.php");
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
    elseif (isset($_POST["deletePackage"])) {
        return;
    }
}