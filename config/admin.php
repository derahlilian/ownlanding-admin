<?php

class Admin extends Database {

    /*
     * Functions to edit, user profile, activate and deactivate user account
     */

    /*
     * Fetch all the users (newest first)
     * func: getAllUsers
     * @params: none
     * return: All Users enrolled
     * */
    function getAllUsers(): false|array
    {
        $sql = "SELECT * FROM users ORDER BY created_at DESC";
        $stmt = $this->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(self::FETCH_ASSOC);
    }

    function getUserById(int $user_id): false|array
    {
        $sql = "SELECT * FROM `users` WHERE `id` = ?";
        $stmt = $this->prepare($sql);
        $stmt->execute([$user_id]);
        return $stmt->fetch(self::FETCH_ASSOC);
    }

    function updateUser(int $user_id, string $name, string $last_name, string $email): bool
    {
        $sql = "UPDATE `users` SET `name` = ?, `last_name` = ?, `email` = ? WHERE `id` = ?";
        $stmt = $this->prepare($sql);
        $stmt->execute([$name, $last_name, $email, $user_id]);
        return $stmt->rowCount() === 1;
    }

    function deactivateUser(int $user_id): bool
    {
        $sql = "UPDATE `users` SET `active` = 0 WHERE `id` = ?";
        $stmt = $this->prepare($sql);
        $stmt->execute([$user_id]);
        return $stmt->rowCount() === 1;
    }

    function activateUserById(int $user_id): bool
    {
        $sql = "UPDATE `users` SET `active` = 1 WHERE `id` = ?";
        $stmt = $this->prepare($sql);
        $stmt->execute([$user_id]);
        return $stmt->rowCount() === 1;
    }

    function deleteUserById(int $user_id): bool
    {
        $sql = "DELETE FROM `users` WHERE `id` = ?";
        $stmt = $this->prepare($sql);
        $stmt->execute([$user_id]);
        return $stmt->rowCount() === 1;
    }


    /*
     * Fetch All Packages
     */
    function getPackages(): false|array
    {
        $sql = "SELECT package_code, packages_size, package_amount, estate_name, color_code, packages.created_at, location_name FROM packages JOIN locations on packages.location_id = locations.id ORDER BY created_at DESC";
        $stmt = $this->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(self::FETCH_ASSOC);
    }

    function getPackageByCode(string $package_code): false|array
    {
        $sql = "SELECT package_code FROM `packages` WHERE `package_code` = ?";
        $stmt = $this->prepare($sql);
        $stmt->execute([$package_code]);
        return $stmt->fetch(self::FETCH_ASSOC);
    }

    /*
     * Create New Package
     */
    public function createNewPackage(array $data): bool
    {
        $sql = "INSERT INTO packages (package_code, packages_size, package_amount, estate_name, color_code, location_id) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->prepare($sql);
        $stmt->execute([$data["package_code"], $data["packages_size"], $data["package_amount"], $data["estate_name"], $data["color_code"], $data["location_id"]]);
        return $stmt->rowCount() === 1;
    }

    /*
     * Functions to fetch user subscribed packages
     *
     */
    function getPackagesByUserId(int $user_id): false|array
    {
        $sql = "SELECT * FROM subscriptions LEFT JOIN packages on subscriptions.package_id = packages.id WHERE subscriptions.user_id = ?";
        $stmt = $this->prepare($sql);
        $stmt->execute([$user_id]);
        return $stmt->fetchAll(self::FETCH_ASSOC);
    }

    /*
     * Fetch All Locations
     */
    public function getLocations(): array|false
    {
        $sql = "SELECT id, location_name FROM locations";
        $stmt = $this->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(self::FETCH_ASSOC);
    }

    /*
     * Fetch Customer Down line
     */
    function getDownlineByUserId(int $user_id): false|array
    {
        $sql = "SELECT id, name, last_name FROM users WHERE referred_by = ?";
        $stmt = $this->prepare($sql);
        $stmt->execute([$user_id]);
        return $stmt->fetchAll(self::FETCH_ASSOC);
    }

    function getUserTransactions(int $user_id): false|array
    {
        $sql = "SELECT * FROM transactions LEFT JOIN payments ON transactions.payment_id = payments.id WHERE transactions.user_id = ?";
        $stmt = $this->prepare($sql);
        $stmt->execute([$user_id]);
        return $stmt->fetchAll(self::FETCH_ASSOC);
    }

}

