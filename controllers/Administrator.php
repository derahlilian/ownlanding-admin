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
}



$admin = new Administrator();

if (isset($_GET['listUsers'])) {
    $admin->listUsers();
}
elseif (isset($_GET['userDetails'])) {
    $user_id = (int)htmlspecialchars($_GET["userId"]);
    $admin->getUser($user_id);
    $admin->getUserPackages($user_id);
    header("location: ../user-details.php");
}
elseif (isset($_GET['editUser'])) {
    $user_id = (int)htmlspecialchars($_GET["userId"]);
    $admin->getUser($user_id);
    header("location: ../edit-user.php");
}
elseif (isset($_POST['editUser'])) {
    $user_id = $_POST['user_id'];
    $name = $_POST['$name'];
    $last_name = $_POST['$last_name'];
    $email = $_POST['$email'];
    $admin->editUser($user_id, $name, $last_name, $email);
}